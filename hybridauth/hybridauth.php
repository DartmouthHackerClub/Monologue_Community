<?php
	#AUTOGENERATED BY HYBRIDAUTH 1.1.1 beta INSTALLER - Sunday 19th of June 2011 01:19:12 AM

/**
 * HybridAuth
 * 
 * An open source Web based Single-Sign-On PHP Library used to authentificates users with
 * major Web account providers and accessing social and data apis at Google, Facebook,
 * Yahoo!, MySpace, Twitter, Windows live ID, etc. 
 *
 * Copyright (c) 2009, 2011 (http://hybridauth.sourceforge.net)
 *
 * @package		Hybrid_Auth
 * @author		hybridAuth Dev Team
 * @copyright	Copyright (c) 2009, 2010 hybridAuth Dev Team.
 * @license		http://hybridauth.sourceforge.net/licenses.html under MIT and GPL
 * @link		http://hybridauth.sourceforge.net 
 */

	# try to create a php session
    if ( ! session_id() ) {
		session_start();
    }

	// Change $GLOBAL_HYBRID_AUTH_URL_BASE in hybridauth/hybridauth.php configuration file
	// with the complete url to hybridauth library on your website
 	$GLOBAL_HYBRID_AUTH_URL_BASE         = "http://www.example.com/hybridauth/"; 

	// real path to hybridauth
	$GLOBAL_HYBRID_AUTH_PATH_BASE 		 = realpath( dirname( __FILE__ ) ) . "/";

	// Define Auth_OpenID_RAND_SOURCE as null to continue with an insecure random number generator.
	define('Auth_OpenID_RAND_SOURCE', NULL);

	/**
	* List of IDentity provider to use 
	*  - "enabled" can be ture: active; false: disabled 
	* 
	* Note: You have to fill IDentity provider keys ( consumer, secret, appid, etc . ) 
	*       To know how to register your application and get keys please refer to the userguide
	*       http://hybridauth.sourceforge.net/userguide/Supported_identity_providers_and_setup_keys.html
	*/
	$GLOBAL_HYBRID_AUTH_IDPROVIDERS      = ARRAY
	(
		// -- OpenID
		"OpenID" 		=> ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> NULL, // not keys needed for OPEN ID
				"wrapper" 	=> "Providers/OpenID.php"
			),

		// -- Google
		"Google" => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY ( 
					"CONSUMER_KEY" 	  => "",
					"CONSUMER_SECRET" => "", 
				),
				"wrapper" 	=> "Providers/Google.php"
			),

		// -- Facebook
		"Facebook" => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY( 
					"APPLICATION_ID"  => "", 
					"CONSUMER_SECRET" => "", 
				),
				"wrapper" 	=> "Providers/Facebook.php"
			),

		// -- MySpace
		"MySpace" 	=> ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY( 
					"CONSUMER_KEY" 	  => "",
					"CONSUMER_SECRET" => "", 
				),
				"wrapper" 	=> "Providers/MySpace.php"
			),

		// -- Twitter
		"Twitter"   	=> ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY( 
					"CONSUMER_KEY" 	  => "",
					"CONSUMER_SECRET" => "", 
				),
				"wrapper" 	=> "Providers/Twitter.php"
			),

		// -- Vimeo
		"Vimeo"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY ( 
					"CONSUMER_KEY" 	  => "",
					"CONSUMER_SECRET" => "", 
				),
				"wrapper" 	=> "Providers/Vimeo.php" 
			),

		// -- Yahoo
		"Yahoo"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> NULL, // not keys needed, its OPEN ID after all
				"wrapper" 	=> "Providers/Yahoo.php" 
			),

		// -- PayPal
		"PayPal"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> NULL, // not keys needed, its OPEN ID after all
				"wrapper" 	=> "Providers/PayPal.php" 
			),

		// -- Foursquare
		"Foursquare"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY ( 
					"CLIENT_ID" 	  => "",
					"CLIENT_SECRET"   => "", 
				),
				"wrapper" 	=> "Providers/Foursquare.php" 
			),

		// -- LinkedIn
		"LinkedIn"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY ( 
					"CONSUMER_KEY" 	    => "",
					"CONSUMER_SECRET"   => "", 
				),
				"wrapper" 	=> "Providers/LinkedIn.php" 
			),

		// -- Friendster
		"Friendster"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY( 
					"CONSUMER_KEY"      => "",
					"CONSUMER_SECRET"   => "" 
				),
				"wrapper" 	=> "Providers/Friendster.php" 
			),

		// -- Tumblr
		"Tumblr"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY( 
					"CONSUMER_KEY"      => "",
					"CONSUMER_SECRET"   => "" 
				),
				"wrapper" 	=> "Providers/Tumblr.php" 
			),

		// -- Gowalla
		"Gowalla"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY( 
					"CONSUMER_KEY"      => "",
					"CONSUMER_SECRET"   => "" 
				),
				"wrapper" 	=> "Providers/Gowalla.php" 
			),

		// -- Windows Live
		"Live"  => ARRAY ( 
				"enabled" 	=> TRUE,
				"keys"	 	=> ARRAY( 
					"CONSUMER_ID"       => "",
					"CONSUMER_SECRET"   => "" 
				),
				"wrapper" 	=> "Providers/Live.php" 
			),
	);

	// -----------------------------------------------------------------------------
	// /!\ Everything below shouldn't be edited unless you know what are you doing .
	// -----------------------------------------------------------------------------

	$GLOBAL_HYBRID_AUTH_URL_EP           = $GLOBAL_HYBRID_AUTH_URL_BASE ;   
	$GLOBAL_HYBRID_AUTH_PATH_EP          = $GLOBAL_HYBRID_AUTH_PATH_BASE; 
	$GLOBAL_HYBRID_AUTH_PATH_CORE        = $GLOBAL_HYBRID_AUTH_PATH_BASE . "Hybrid/";
	$GLOBAL_HYBRID_AUTH_PATH_LIBRARIES   = $GLOBAL_HYBRID_AUTH_PATH_CORE . "thirdparty/" ;
	$GLOBAL_HYBRID_AUTH_PATH_RESOURCES   = $GLOBAL_HYBRID_AUTH_PATH_CORE . "resources/" ;

	$GLOBAL_HYBRID_AUTH_REDIRECT_MODE    = "PHP"; // JS => javascript, PHP => header 

	$GLOBAL_HYBRID_AUTH_TEXT_LANG        = "EN"; // for error messages, the lang file is $GLOBAL_HYBRID_AUTH_PATH_RESOURCES/lang.ini
	$GLOBAL_HYBRID_AUTH_TEXT_FILE        = $GLOBAL_HYBRID_AUTH_PATH_RESOURCES . "lang.ini";
	$GLOBAL_HYBRID_AUTH_TEXT             = NULL; 

	$GLOBAL_HYBRID_AUTH_TEMP_FOLDER      = $GLOBAL_HYBRID_AUTH_PATH_BASE . "../temp/" ;
	
	$GLOBAL_HYBRID_AUTH_DEBUG_MODE       = FALSE ;
	$GLOBAL_HYBRID_AUTH_DEBUG_FILE       = $GLOBAL_HYBRID_AUTH_TEMP_FOLDER . "log.log";

	$GLOBAL_HYBRID_AUTH_STORAGE_TYPE     = "File" ; 
	$GLOBAL_HYBRID_AUTH_STORAGE_PATH     = $GLOBAL_HYBRID_AUTH_TEMP_FOLDER . "sessions/";// make it writable for the web server
	
	$GLOBAL_HYBRID_AUTH_STORAGE_INSTANCE = NULL ;
	$GLOBAL_HYBRID_AUTH_SERVICES_JSON    = NULL ;

	$GLOBAL_HYBRID_AUTH_BYPASS_EP_MODE   = FALSE;

	# some required includes  
	require_once "Hybrid/Logger.php"; 

	require_once "Hybrid/Storage.php"; 
	require_once "Hybrid/Storage/File.php";
	require_once "Hybrid/Storage/Apc.php";
	require_once "Hybrid/Storage/Memcache.php";
	require_once "Hybrid/Storage/Session.php";

	require_once "Hybrid/Auth.php";

	require_once "Hybrid/Provider_Model.php";
	require_once "Hybrid/Provider_Adapter.php"; 

	require_once "Hybrid/User.php"; 
	require_once "Hybrid/User/Profile.php"; 
	require_once "Hybrid/User/Contacts.php"; 

	# Enables/disables session debugging
	Hybrid_Logger::setDebug( $GLOBAL_HYBRID_AUTH_DEBUG_MODE ); 
	
	# Loading Hybrid lang file 
	$GLOBAL_HYBRID_AUTH_TEXT = parse_ini_file( $GLOBAL_HYBRID_AUTH_TEXT_FILE, TRUE ); 

	# Redefine php include_path 
	set_include_path
		( 
			$GLOBAL_HYBRID_AUTH_PATH_BASE . 
			PATH_SEPARATOR . $GLOBAL_HYBRID_AUTH_PATH_LIBRARIES . 
			PATH_SEPARATOR . get_include_path() 
		); 

	# Check if we the installed PHP version support json extention  
	if( ! function_exists('json_encode') )
	{ 
		require_once $GLOBAL_HYBRID_AUTH_PATH_LIBRARIES . "Common/Services_JSON.php";
	}

	# Build hybridAuth storage instance  
	Hybrid_Auth::startStorage();

	# Check if we are in localhost mode 
	if( $_SERVER['HTTP_HOST'] == "localhost" )
	{
		Hybrid_Auth::addWarning( Hybrid_Auth::text( "LOCALHOST_WARNING" ) );
	}

	# Check if GLOBAL_HYBRID_AUTH_BYPASS_EP_MODE is activated
	if( $GLOBAL_HYBRID_AUTH_BYPASS_EP_MODE )
	{ 
		Hybrid_Auth::addWarning( Hybrid_Auth::text( "BYPASS_EP_MODE_ACTIVATED" ) );
	}
