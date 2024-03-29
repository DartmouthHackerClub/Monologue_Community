<?php
/**
 * HybridAuth
 * 
 * An open source Web based Single-Sign-On PHP Library used to authentificates users with
 * major Web account providers and accessing social and data apis at Google, Facebook,
 * Yahoo!, MySpace, Twitter, Windows live ID, etc. 
 *
 * Copyright (c) 2009 (http://hybridauth.sourceforge.net)
 *
 * @package     Hybrid_Auth
 * @author      hybridAuth Dev Team
 * @copyright   Copyright (c) 2009, hybridAuth Dev Team.
 * @license     http://hybridauth.sourceforge.net/licenses.html under MIT and GPL
 * @link        http://hybridauth.sourceforge.net 
 */

// ------------------------------------------------------------------------

/**
 * Hybrid_Providers_Vimeo class, wrapper for Vimeo auth/api
 *
 * @package    Hybrid_Auth 
 * @author     Zachy <hybridauth@gmail.com>
 * @version    1.0
 * @since      hybridAuth 1.0.2
 * @link       http://hybridauth.sourceforge.net/userguide/IDProvider_info_Vimeo.html
 * @link       http://en.netlog.com/go/developer/documentation/
 * @see        Hybrid_Provider_Model
 * @see        Hybrid_Provider_Adapter
 */
class Hybrid_Providers_Vimeo extends Hybrid_Provider_Model
{
   /**
	* the IDp api client (optional)
	*/
	var $api = NULL; 

	// --------------------------------------------------------------------

   /**
	* IDp wrappers initializer
	*
	* The main job of wrappers initializer is to performs (depend on the IDp api client it self): 
	*     - include some libs nedded by this provider,
	*     - check IDp key and secret,
	*     - set some needed parameters (stored in $this->params) by this IDp api client
	*     - create and setup an instance of the IDp api client on $this->api 
	*/
	function initialize() 
	{
		GLOBAL $GLOBAL_HYBRID_AUTH_PATH_LIBRARIES;

		Hybrid_Logger::info( "Enter [{$this->providerId}]::initialize()" );

		if( empty( $this->config["keys"]["CONSUMER_KEY"] ) )
		{
			throw new Exception( "CONSUMER_KEY of [{$this->providerId}] is set to NULL!" );
		}

		if( empty( $this->config["keys"]["CONSUMER_SECRET"] ) )
		{
			throw new Exception( "CONSUMER_SECRET of [{$this->providerId}] is set to NULL!" );
		}

		require_once $GLOBAL_HYBRID_AUTH_PATH_LIBRARIES . "Vimeo/Vimeo.php"; 

		$this->api = new phpVimeo( $this->config["keys"]["CONSUMER_KEY"], $this->config["keys"]["CONSUMER_SECRET"] ); 
	}

	// --------------------------------------------------------------------

   /**
	* begin login step 
	*/
	function loginBegin()
	{
		Hybrid_Logger::info( "Enter [{$this->providerId}]::loginBegin()" );

		Hybrid_Auth::storage()->delete( "hauth_session.vimeo.oauth_request_token" );  
		Hybrid_Auth::storage()->delete( "hauth_session.vimeo.oauth_request_token_secret" );  
		Hybrid_Auth::storage()->delete( "hauth_session.vimeo.oauth_access_token" );  
		Hybrid_Auth::storage()->delete( "hauth_session.vimeo.oauth_access_token_secret" );  

		// Get a new request token
		$tokz = $this->api->getRequestToken();

		Hybrid_Logger::info( "Enter [{$this->providerId}]::loginFinish(), received tokens", $tokz );

		if 
		(
			! isset( $tokz['oauth_token'] ) || ! is_string( $tokz['oauth_token'] )
		|| 
			! isset( $tokz['oauth_token_secret'] ) || ! is_string( $tokz['oauth_token_secret'] )
		)
		{
			throw new Exception( "Authentification failed! Vimeo returned an invalid Request Token." );
		}

		Hybrid_Auth::storage()->set( "hauth_session.vimeo.oauth_request_token"        , $tokz['oauth_token'] ); 
		Hybrid_Auth::storage()->set( "hauth_session.vimeo.oauth_request_token_secret" , $tokz['oauth_token_secret'] );  

		// Build authorize link
		$authorize_link = $this->api->getAuthorizeUrl( $tokz['oauth_token'], 'write' );

		# redirect user to vimeo authorisation web page
		Hybrid_Auth::redirect( $authorize_link ); 
	}

	// --------------------------------------------------------------------

   /**
	* finish login step
	* 
	* fetch returned parameters by The IDp client
	*/
	function loginFinish()
	{
		Hybrid_Logger::info( "Enter [{$this->providerId}]::loginFinish()" );

		$oauth_verifier = @ $_REQUEST['oauth_verifier'];

		if ( ! $oauth_verifier )
		{
			throw new Exception( "Authentification failed! Vimeo returned an invalid Authentication token." );
		}

		// Exchange for an access token
		$this->api->setToken
			( 
				Hybrid_Auth::storage()->get( "hauth_session.vimeo.oauth_request_token" ), 
				Hybrid_Auth::storage()->get( "hauth_session.vimeo.oauth_request_token_secret" ) 
			);
		$tokz = $this->api->getAccessToken( $oauth_verifier  );

		if 
		(
			! isset( $tokz['oauth_token'] ) || ! is_string( $tokz['oauth_token'] )
		|| 
			! isset( $tokz['oauth_token_secret'] ) || ! is_string( $tokz['oauth_token_secret'] )
		)
		{
			throw new Exception( "Authentification failed! Vimeo returned an invalid Access Token." );
		}

		// Store 
		Hybrid_Auth::storage()->set( "hauth_session.vimeo.oauth_access_token"        , $tokz['oauth_token'] ); 
		Hybrid_Auth::storage()->set( "hauth_session.vimeo.oauth_access_token_secret" , $tokz['oauth_token_secret'] );

		$this->api->setToken
			( 
				Hybrid_Auth::storage()->get( "hauth_session.vimeo.oauth_access_token" ), 
				Hybrid_Auth::storage()->get( "hauth_session.vimeo.oauth_access_token_secret" ) 
			);

		Hybrid_Logger::info( "[{$this->providerId}]::loginFinish(), Set user to connected" );
		Hybrid_Auth::storage()->set( "hauth_session.is_logged_in", 1 ); 

		$this->getUserProfile();
	}

	// --------------------------------------------------------------------

   /**
	* sign out the user from the IDp if possible, and erase his local session  
	*/
	function logout()
	{
		Hybrid_Logger::info( "Enter [{$this->providerId}]::logout()" );

		// adapter::deconnect() => expireStorage
		$this->deconnect(); 

		// Dunno if this provider support force logout

		return TRUE;
	}

	// --------------------------------------------------------------------

   /**
	* load the user profile from the IDp api client
	*/
	function getUserProfile()
	{
		Hybrid_Logger::info( "Enter [{$this->providerId}]::getUserProfile()" );

		if ( ! Hybrid_Auth::hasSession() )
		{
			throw new Exception( "HybridAuth can't access user profile data. The current user have to sign in with [{$this->providerId}] before any request!" );
		}

		$data = $this->api->call('vimeo.people.getInfo');

		Hybrid_Logger::info( "[{$this->providerId}]::getUserProfile(), Get user data", $data );

		if ( ! is_object( $data ) )
		{
			Hybrid_Logger::info( "[{$this->providerId}]::getUserProfile(), reSet user to deconnected" );
			Hybrid_Auth::storage()->set( "hauth_session.is_logged_in", 0 );
			Hybrid_Auth::storage()->set( "hauth_session.user.data", NULL );

			throw new Exception( "User profile request failed! {$this->providerId} returned an invalide response." );
		} 

		$this->user->providerUID         	= @ $data->person->id;
		$this->user->profile->displayName  	= @ $data->person->display_name;
		$this->user->profile->address 		= @ $data->person->location;
		$this->user->profile->profileURL 	= @ $data->person->profileurl;
		$this->user->profile->webSiteURL 	= @ $data->person->url[0]; 
		$this->user->profile->description 	= @ $data->person->bio; 
		$this->user->profile->photoURL      = @ $data->person->portraits->portrait[3]->_content; 
 
		Hybrid_Logger::info( "[{$this->providerId}]::getUserProfile(), set user data", $this->user );

		Hybrid_Auth::storage()->set( "hauth_session.user.data", $this->user );

		// if the the provider has failed to return the user profile
		if ( ! $this->user->providerUID )
		{
			Hybrid_Auth::storage()->set( "hauth_session.is_logged_in", 0 );
			Hybrid_Auth::storage()->set( "hauth_session.user.data", NULL );

			Hybrid_Logger::error( "User profile request failed! The user was able to authenticate with {$this->providerId}, but the provider has failed to return the user profile." );
			throw new Exception( "User profile request failed! The user was able to authenticate with {$this->providerId}, but the provider has failed to return the user profile." );
		}
	}

	// --------------------------------------------------------------------

   /**
	* load the current logged in user contacts list from the IDp api client 
	*
	* HybridAuth dont provide users contats on version 1.0.x
	*/
	function getUserContacts()
	{
		Hybrid_Logger::info( "Enter [{$this->providerId}]::getUserContacts()" );
	}
}
