CREATE TABLE monologue (
  ID                integer PRIMARY KEY NOT NULL,
  MonoKey           char(10),
  ClassifiedBy      char(50),
  ClassifiedDate    timestamp,
  ClassifiedYYYYMM  char(8),
  Reader            char(50),
  Gender            char(3),
  Tone              char(3),
  Age               char(3),
  WrittenInPeriod   char(3),
  Quality           char(3),
  `Character`         char(3),
  Profession        char(3),
  Setting           char(3),
  Dialect           char(3),
  `Length`            char(3),
  `Source`            char(3),
  Title             char(255),
  Author            char(255),
  Playwright        char(255),
  Translation       char(255),
  Play              char(250),
  AuthorURL         char(255),
  BookURL           char(255),
  QuickID           char(255),
  Notes             text,
  Setup             text,
  Monologue         text,
  Abstract          text,
  Subjects          text
);
INSERT INTO monologue VALUES(46,NULL,NULL,NULL,NULL,'X01','G01','T01','A07','W04','Q69','C71','','S01','','L02','Ori','Simple','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Lori','You're stressed out about the test? Why? This class is so easy. I don't know. I just think it makes total sense. All you have to do is talk in class sometimes and listen to the professor. He practically tells you the answers. Just listen to how he asks the questions and watch his face. Like last week, when he said, “Do you think slavery is the only reason for the Civil War?” his face was all scrunched up and he emphasized “only.” So you know the answer is no. You just have to be observant. That's all.

You haven't been to class all semester? Well then, yeah. I guess you do have a problem. 
','',NULL);
INSERT INTO monologue VALUES(47,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q18','','','S01','','L02','Ori','Laundry Day','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Amanda','Oh my God. Oh my God! I literally have no clean underwear! Oh, God, I really thought I had one more pair. Why didn't I do laundry yesterday? I even said that to you yesterday, do you remember? I was going to do laundry—what happened? Oh, yeah. I fell asleep. Oops. Listen, I know this is weird, but can I wear your underwear? I'll wash it. Or I'll buy you new ones! I promise. 

Megan! I can't believe you won't do this for me! I'm desperate. I wouldn't ask you otherwise. I can't wear dirty underwear. That's disgusting. I'll buy you new ones . . . OK, fine! I'll just go commando. You are so dead to me.
','',NULL);
INSERT INTO monologue VALUES(48,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q29','C29','','S01','','L02','Ori','Building','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','','I had the most amazing experience today. The bookshelf that Dad ordered arrived today, right? So I took it into the den, and I put it together myself. I did! You can go and look. It was hard. The whole time I was thinking, 
“I can't do this. It's too heavy. It's too hard to do on my own.” But I did it anyway. I tell you it seemed almost impossible. I'd be working on one side of it and the other side would collapse. I actually cried in the middle of it. But I kept going. I think it looks good. Go in and see it! I'm really proud of it.

It is not backwards!
','',NULL);
INSERT INTO monologue VALUES(49,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q01','C41','','S01','','L02','Ori','Monkey Boy','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Olivia','It must have been awful to be a woman in caveman times. You'd just be so ugly. And all the guys would be ugly, too. Do you think beauty standards were different then? 
I guess they must have been. I just can't imagine how the species didn't become extinct. Scott does not look like a Neanderthal! You're crazy. I guess he does sort of have 
a heavy brow, but—Oooo, I hate you, AnnMarie! You 
ruined Scott for me forever! I'll never be able to look at him the same again!
','',NULL);
INSERT INTO monologue VALUES(50,NULL,NULL,NULL,NULL,'X01','G01','T01','A07','W04','Q01','C11','P08','S01','','L02','Ori','Not Oprah','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','ANNABELLE','Oprah makes me sick. I guess she does great things, but sometimes . . . I just want to puke when rich people sit around talking about all they have. Yeah, she shouldn't have to lie about it, I suppose, and everyone knows she's rich . . . I don't know. I had to steal toilet paper from school yesterday. I'll admit it. My roommates and I don't have money to buy our own. It's pathetic, isn't it? I know! But that's how it is. So lately celebrities just make me sick. 

Ugh, work? Why would I want to do that? Listen, making minimum wage isn't going to make me Oprah-rich. I'd rather steal toilet paper than work at the cafeteria.
','',NULL);
INSERT INTO monologue VALUES(51,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q04','C29','','S01','','L02','Ori','The Puppy','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Mya','I look tired? I am tired! You know that adorable little puppy I got a few weeks ago? Well, he's not so cute anymore. He ate the leg off of the sofa. He pooped in my shoes. He ate my socks—somehow he managed to eat one of every pair I have! And he barks all night. I don't want him anymore. I mean it. I don't. I can't watch “The Dog Whisperer.” Abercrombie ate through the TV cord. Nothing I own is sacred to him! I am at wits' end, Mollie. Normally, I would have put “puppy killer” at the very bottom of things I would be when I grow up. But now, I don't know . . . 

I'm kidding! But I'm not. I swear, I hate that dog!
','',NULL);
INSERT INTO monologue VALUES(52,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q05','C29','P02','S01','','L02','Ori','The Waiting','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Ayana','I can't bear it any longer. The anticipation is killing me. God! I want this so bad. I cannot wait a second longer. Not even a millisecond. I'm going nuts. 

(Starts to pace.) What am I waiting for? Why is there such a buildup to this? It's torture. I'm tingling all over. I think I might die. Now! Now! Now! Now!

I'm leaving. This is unbearable. Oh God!

It's my turn? I'm not ready; I'm not ready! OK, just a second. Coming! Mom, wish me luck on this audition!
','',NULL);
INSERT INTO monologue VALUES(53,NULL,NULL,NULL,NULL,'X01','G01','T01','A07','W04','Q09','C73','','S01','','L02','Ori','License','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Alli','I hate being late. And I'm powerless. I'm stuck in traffic! There's nothing I can do. There's probably an accident up ahead. I have no idea why people want to stop and stare at someone whose guts are on the sidewalk. It's sick. If it were me, I'd want people to look away. (Shouting.) If everyone would just put their foot on the gas pedal, we'd get there a lot faster! (In a normal voice.) I hate people, Cheryl. I swear, I do. Especially when I drive. No one can drive right! People don't signal. They slow down for no reason. They brake suddenly. They don't use common sense or pay attention. No one can drive, Cheryl!

(Gasps.) Oh! Whoops! I think I gotta go. I kinda bumped into the guy in front of me. Why can't anyone drive? 
','',NULL);
INSERT INTO monologue VALUES(54,NULL,NULL,NULL,NULL,'X01','G01','T01','A07','W04','Q60','C18','','S01','','L02','Ori','I Love Shoe','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Mallika','Yeah, he was cute, but did you see his shoes? They were like clown shoes. Not the size, the colors! I can't believe you didn't notice. They were so ugly. 

Well, yeah, that's something I look at. Everything's important. I don't like to make mistakes, especially when it comes to guys. How they run, if they have a nice smile, if their voices are low or high—all of these things are important. Well, what do you look for?

Honesty? Sincerity? You are going to get yourself a real wimp that way. Don't you want a guy with some backbone? Well, yeah, there are personal qualities I look for. But if he has ugly shoes, who cares?
','',NULL);
INSERT INTO monologue VALUES(55,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q05','C71','','S01','','L02','Ori','The Interview','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Erin','Do you mind if I stand? I know that's not usual, but when I'm nervous I like to stand. You should have seen me during the SATs! That was really hard for me, sitting all that time when I'm nervous. Am I the first person to stand during an interview here? Well, it makes me stand out, right? Am I making you nervous? I don't want to make you nervous just because I'm nervous. I can sit if you want. OK. (Sits, but crosses legs and starts madly swinging her top leg.) Is that better? I really want to go here. I do. This is my dream college. So I want this to go perfectly.

Relax? I am relaxed. This is me relaxed! OK. I'm lying, I'm not on crack of anything, but I think this is the best I can do at the moment!
','',NULL);
INSERT INTO monologue VALUES(56,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q54','C16','','S01','','L02','Ori','Ordin-Mary','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Mary','I was born in the wrong country. I'm supposed to be 
European. I'm sure of it. Being American is so boring. It's not exotic. Whatever, Dad. I guess it could be exotic to someone from, I don't know, Siberia, but that's about it. American culture is everywhere. There's no mystery to it. And it's so . . . We have cowboys and plantations. That's about as exotic as it gets. There's no glamour to that. The South is where the slaves were, so that's not that cool. And the West is so . . . dirty. I'm not saying you have to agree with me, but that's how I see it. Why can't we be Spanish or Moroccan or something like that? I am just doomed to be ordinary. I mean, we live in Connecticut! It couldn't get any less exotic!
','',NULL);
INSERT INTO monologue VALUES(57,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q10','C30','','S01','','L02','Ori','So Hot','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Natalie','I hate being sick. I cannot stop sneezing. I'm sorry. I have to blow my nose. (Blows her nose.) Sorry. If I got up from the table every time I had to blow my nose, I'd never get to eat! 

Look, I'm not contagious. I've had this cold for weeks now. So, you wanna make out after this? I don't feel like going to a movie. Everyone in the theater will be mad at me for coughing and sneezing every two minutes. 

No? Why not? Don't you think I'm pretty? Hold on a sec. (Blows nose again.) So what's your problem?
','',NULL);
INSERT INTO monologue VALUES(58,NULL,NULL,NULL,NULL,'X01','G01','T01','A07','W04','Q10','C41','','S01','','L02','Ori','Sexed-Out','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Hannah','Sex, sex, sex, sex, sex! Everywhere I look—sex! I actually think I'm getting bored of it. I'm over it. I think I am. It's official. I'm going to just watch Disney movies and cartoons from now on. If I so much as see Paris Hilton, I'm going to close my eyes and cover my ears and sing “Yankee Doodle.” We are all way too preoccupied with something that is basically, when you think about it, a really strange thing that's meant to bring new babies into the world. When you think about it that way, it's amazing anyone thinks about it at all. I am going to go a whole week without thinking or seeing anything about sex. I will! I bet it will make me a better person. Maybe even more creative or something. I just think we need a new topic. 

I don't know what we'd talk about otherwise, that's the whole point! But I'm going to find out.
','',NULL);
INSERT INTO monologue VALUES(59,NULL,NULL,NULL,NULL,'X01','G01','T01','A06','W04','Q52','','P79','S01','','L02','Ori','Re-Route','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Sophia','No. I don't want to even walk past where I work. I'd rather starve than walk by the food court. I just don't want to be reminded. I have to go back there soon—See, you made me think about it! I just want to have one whole day where I don't think about it. One whole day when I can imagine that I'm free, without a care in the world. Let me live that fantasy, Lindsey! Don't burst my bubble. For one day, I want to imagine I'm a rich girl who doesn't work at Fat Wok every day after classes. Is that too much to ask? Listen, if you wait to eat, I'll buy you dinner on the way home tonight. Sure, it will blow all my pathetic earnings for the week, but the fantasy will go on. Besides, there's always the dollar menu, right?','',NULL);
INSERT INTO monologue VALUES(60,NULL,NULL,NULL,NULL,'X01','G01','T01','A05','W04','Q12','C16','','S01','','L02','Ori','Hungry','Kristen Dabrowski','','Any','',NULL,NULL,NULL,'','Raisa','I'm so hungry. My stomach is burning. Mom, when are we going to eat? You said we'd eat at six. It's six-thirty! Can I make myself a sandwich? You said it would be ready “any minute” ten minutes ago! I've been hungry for hours now. 

I'm not whining! I'm just telling you how I feel. I even offered to make my own meal. I'd say I'm being pretty terrific right now. Oh no. You're kidding, right? You can't send me to my room without dinner! I'm not being bratty! I'm just really, really hungry, Mom. Please, are we eating soon?
','',NULL);
INSERT INTO monologue VALUES(61,NULL,NULL,NULL,NULL,'X01','G02','T02','A09','W04','Q13','C24','P62','','','L02','Ori','Asylum','Keith Aisner','','Any','',NULL,NULL,NULL,'','The Salesman is talking to Gary, who is spiraling out of control. Gary is about to take a sleeping pill to try and regain his mental stability. The Salesman is the personification of all his fears.','Words, Gary? You want me to use words to tell you the meaning of your own soul? Would you like to buy a goddamned vowel?
			. . . It doesn't work like that, Gary. You stop now and, if you're lucky, you'll have to start all over again from square one. And then what? You'll just try again? Next time? Why are you so sure there's going to be a next time? What, you think you'll just be able to swan dive into this very rare form of perception again, no problemo? C'mon. Who knows how close to me, your guide, your friend, you might make it the next time you try, if you make it at all? And that's supposing that right now you can actually paddle all the way up to the surface from the murky depths in which you are currently swimming without getting a mental case of the bends. I mean, give it some thought, cowboy. You've been bruisin' the old bean there. And I'll tell you something. I'll tell you what everyone else knows but hasn't told you. All that fuckin' around you've been doin' inside your head? There's a real good chance you did some damage. Serious, permanent damage. I'm talking collecting early Social Security on a regular-type-basis damage. Alright? You see? You're already too invested. You made it this far. You are so goddamned close . . . inches, man . . . just inches. And now you're going to give up? Throw it all away. Just because some people think they know what they're talking about; people who, may I remind you, have never set foot in this land you so easily stride through, people who want you . . . to give up. Be a man. Do this for you. Take the pills and throw them in the sink and we'll finish this tonight; we'll see it through. You and me.
','',NULL);
INSERT INTO monologue VALUES(62,NULL,NULL,NULL,NULL,'X01','G02','T02','A09','W04','Q01','C72','P30','S01','','L03','Ori','Back of the Throat','Yussef El Guindi','','Any','',NULL,NULL,NULL,'','Carl, a government agent, is convinced that Khaled, an Arab-
American writer, is somehow involved with terrorist cells inside the United States. Here he is using strong-arm tactics to interrogate him.
','You really give a bad name to immigrants, you know that. Because of you we have to pass tougher laws that stop people who might actually be good for us.
			. . . God: I know your type, so well. The smiling little Semite who gives you one face while trying to stab you with the other. You're pathetic, you know that. If you hate us, then just hate us. But you don't have the balls to do even that. You bitch and you moan and complain how overrun you are by us and all the time you can't wait to get here. You'd kill for a visa. That pisses me off. That's hypocrisy. Why not just come clean and own up that you hate everything this country stands for.
			. . . No, that's right, because you're too busy envying us.
			. . . I could snap your neck just for that. What's the expression for “fuck-face” in Arabic? “Hitit khara”? “Sharmoot”?
			. . . Just how crushed do you feel, Khaled? (Slight beat, then:) All right, I'm done. (He lets go and stands up. Beat.) Now do you want to tell me what you and Asfoor got up to in the strip club? Were you passing a message on to him? Were you the Internet guy? The guy to help him get around? A carrier for something? What? What? Tell me, or I'll — (Carl pulls his foot back as if to kick him.)
			. . . I'll exercise my drop kick on your testicle sac and make you sing an Arabic song in a very unnatural key.
			. . . You're going to be sick. I'm the one who's throwing up. Only I have the decency to do it quietly, inside, and not make a public spectacle of myself. (Perhaps grabbing Khaled by his lapels.) What did he want from you? What did he want? What fucked-up part did you play in all of this? What happened with you in there? What happened when you met up with Asfoor? What did he want? . . . You know what I really resent? . . . What you force us to become. To protect ourselves. We are a decent bunch and do not want to be dragged down to your level. But no, you just have to drag us down, don't you. You have to gross us out with your level of crap. I personally hate this, you know that. I hate it when I have to beat the shit out of someone because then by an act of willful horror, whose effect on my soul I can only imagine, I have to shut out everything good about me to do my job to defend and protect. Here I am quickly devolving into a set of clichés I can barely stomach and you have the nerve to think you can vomit. No, it is I who am throwing up, sir, and if I see one scrap of food leave your mouth I will shove it back so far down your throat you'll be shitting it before you even know what you've swallowed again.
','',NULL);