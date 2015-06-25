<?php
	require_once ('ServerSideCode/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/CastCrew.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - Cast &amp; Crew Biographies</title>
</head>
<body>
	<div id="top-strip">
		<div class="centre">
			<?php if(isset($_SESSION['validUser']) && $_SESSION['validUser'] == true){
					echo "<a href=\"logout.php\">Logout</a>";
					$cartTotal = getCartTotal();
					echo "<a style=\"float:right;\" href=\"cart.php\">Shopping Cart[".$cartTotal."]</a>";
				  }
				  else{
					echo "<a href=\"login.php\">Login</a>"; 
			  	  }
		    ?>
	    </div>		
	</div>
	<div style="height:25px;width:100%;"></div>
	<div id="container">
		<div id="header">
			<div id="head-logo"></div>
			<div class="yellow-divider"></div>
		</div>
		<div id="nav">
			<h4>Site Menu</h4>
			<div class="yellow-divider-small"></div>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="CastCrew.php">Cast &amp; Crew</a></li>
				<li><a href="Gallery.php">Image Gallery</a></li>
				<li><a href="Video.php">Video Gallery</a></li>
				<li><a href="Store.php">Store</a></li>
				<li><a href="Register.php">Register</a></li>
				<li><a href="HallOfFame.php">Hall of Fame</a></li>
			</ul>
			<div class="yellow-divider-small"></div>
			<div id="social-badges">
				<h4>Share:</h4>
				&nbsp;&nbsp;<a href="https://www.facebook.com/TheHobbitMovie"><img src="Images/Global/badge1.png" alt=""></img></a>
				<a href="https://twitter.com/wbpictures"><img src="Images/Global/badge2.png" alt=""></img></a>
				<a href="https://plus.google.com/+TheHobbitMovie/posts"><img src="Images/Global/badge3.png" alt=""></img></a>
				<a href="http://www.youtube.com/thehobbit"><img src="Images/Global/badge4.png" alt=""></img></a>
				<a href="http://thehobbitmovie.tumblr.com/"><img src="Images/Global/badge5.png" alt=""></img></a>
				<a href="http://instagram.com/thehobbitmovie"><img src="Images/Global/badge6.png" alt=""></img></a>
			</div>			
		</div>
		<div id="main-content">
			<div id="centre-content">
				<h2><img class="sword-img" src="Images/Global/mini-sword-variant.png" alt="hobbit-sword"></img>&nbsp;Cast &amp; Crew Biographies</h2>
				<div class="yellow-divider-medium"></div>
				<br /><div class="sub-header">Cast Biographies</div><br />
				<div class="bio-title">Ian McKellen</div>
				<div class="CCBio">
					<img src="Images/Content/CCThumb_Ian.jpg" alt="cast-pic" class="right-wrap"></img>
					<p>IAN McKELLEN (Gandalf the Grey), born and raised in the north of England, has been honored with over 50 international acting awards during his more than half a century on stage and screen.  He is beloved by fans worldwide as Magneto in the X-Men films and Gandalf in The Lord of the Rings and The Hobbit trilogies.</p>
					<p>McKellen's performance as Gandalf the Grey in Peter Jackson's The Lord of the Rings: The Fellowship of the Ring brought him an Academy Award nomination for Best Supporting Actor and a Screen Actors Guild (SAG) Award. </p> 
					<p>He received his first Academy Award nomination, for Best Actor, for his masterly portrayal of gay film director James Whale, in Bill Condon's 1998  classic Gods and Monsters. </p>
					<p>In 1995, McKellen starred to acclaim as Richard III, in his own screen-adaptation of Shakespeare's play, which he also produced. Other film credits include Michael Mann's The Keep, Fred Schepisi' Plenty  and Six Degrees of Separation,  John Schlesinger's Cold Comfort Farm,  Sean Mathias' Bent and Ron Howard's The Da Vinci Code.  Next, he will play a 93 year old Sherlock Holmes in A Slight Trick of the Mind again with director Bill Condon.</p>
					<p>McKellen has also been honored for his extensive television work, from the miniseries The Prisoner to his monumental performance in King Lear: from his reincarnation of Tsar Nicholas II in the telefilm Rasputin, to his classic guesting as himself in HBO's Extras. </p>
					<p>On the first night of Channel 4 in UK, McKellen played a mentally handicapped man in Stephen Frears' Walter.  He surprised everyone with his 10 episodes in UK's longest running soap, Coronation Street, and in the new British/PBS sitcom Vicious., with Derek Jacobi.</p>
					<p>McKellen attended Cambridge University and, since 1961, has worked non-stop in the British theatre.  He has been leading man and produced plays, modern and classic, for the Royal Shakespeare Company and the National Theatre of Great Britain and in the West End of London.  He has won Olivier Awards for his performances in Macbeth (1976-78), The Alchemist (1977), Bent (1979), Wild Honey (1984), and Richard III (1990), as well as Evening Standard Awards for his work in Coriolanus (1984) and Othello (1989), and for Outstanding Contribution to British Theatre (2009).</p>
					<p>In 1981, he swept the Best Actor Awards, including the Tony, for his portrayal of Salieri in the Broadway production of Peter Shaffer's Amadeus. For over a decade, he toured his one-man show, Ian McKellen: Acting Shakespeare, through four continents, including twice on Broadway. In 2001 he returned to the New York stage in Dance of Death, with Helen Mirren.   He is now back with Patrick Stewart, and raves all round,  in a repertory of Pinter's No Man’s Land and Beckett’s Waiting for Godot, at the Cort Theatre.</p>
					<p>In 1991, Sir Ian was knighted for services to theatre in UK.  He is a co-founder of Stonewall UK, which lobbies for legal and social equality for gay people.  In 2008, the Queen personally appointed him Companion of Honour, for his services to drama and to equality.</p>	
				</div><br /><br />
				
				<div class="bio-title">Martin Freeman</div>
				<div class="CCBio">
					<img src="Images/Content/CCThumb_Martin.jpg" alt="cast-pic" class="left-wrap"></img>
					<p>MARTIN FREEMAN (Bilbo Baggins) earned an Emmy nomination in the category of Best Supporting Actor in a Drama Series for his portrayal of Dr. John Watson on the award-winning BBC television series Sherlock.  Freeman also won a BAFTA TV Award and received a second nomination for his work on the program, which debuted in 2010 and is now entering its third season.</p>
					<p>Freeman was already familiar to television audiences for the role of Tim Canterbury on Ricky Gervais's original hit comedy series The Office.  He starred for three seasons on the hugely acclaimed show, earning a BAFTA TV Award nomination and two British Comedy Award nominations for his performance.</p>
					<p>In The Hobbit: The Desolation of Smaug, Freeman reprises the role he first played in The Hobbit: An Unexpected Journey.  He will conclude his portrayal of Bilbo in next year's The Hobbit: There and Back Again.  Freeman's recent film credits also include the sci-fi comedy The World’s End, written by Edgar Wright and Simon Pegg, and directed by Wright, and the independent film Svengali.  He also lends his voice to the animated feature Saving Santa.</p>
					<p>Freeman has been seen in a wide range of film roles, but is perhaps best known for his comedic roles.  He starred opposite Joanna Page in the 2003 box office success Love Actually, followed by the horror spoof Shaun of the Dead, from Wright and Pegg.  He later reunited with the writing duo on the 2007 cult hit Hot Fuzz.  He also starred as Arthur Dent in Garth Jennings' The Hitchhiker's Guide to the Galaxy, the screen version of Douglas Adams' best-selling book, also starring Zooey Deschanel and Sam Rockwell.  His other credits include the mockumentary Confetti, Nativity!, and the Aardman animated feature The Pirates! Band of Misfits.</p>
					<p>On stage, Freeman's latest project was the successful West End production of Clybourne Park at the Royal Court Theatre, directed by Dominic Cooke.  His other theatre work includes Kathy Burke's Kosher Harry, at the Royal Court, and Blue Eyes and Heels, by Toby Whithouse, presented at the Soho Theatre, under the direction of Jonathan Lloyd.</p>			
				</div><br /><br />
				<div class="bio-title">Richard Armitage</div>
				<div class="CCBio">
					<img src="Images/Content/CCThumb_Richard.jpg" alt="cast-pic" class="right-wrap"></img>
					<p>RICHARD ARMITAGE (Thorin Oakenshield) has been a favorite of critics and audiences in the UK for several years, and his popularity is quickly rising worldwide.</p>
					<p>Armitage, who originated the part of Thorin Oakenshield in Peter Jackson's The Hobbit: An Unexpected Journey, will reprise his role in the conclusion of the Trilogy, The Hobbit: There and Back Again, due out in December 2014.  Also in 2014, he stars in Steven Quale’s action thriller Into the Storm, slated for release in August.  </p>
					<p>Armitage gained a huge fan following in the UK with starring roles in such high-profile television productions as North and South, Spooks (US title: MI-5), Robin Hood and Strike Back.</p>
					<p>His first film in the U.S. was the 2011 hit Captain America: The First Avenger, directed by Joe Johnston and starring Chris Evans in the title role.  Armitage played the super hero's nemesis, Heinz Kruger, in the film, which also starred Tommy Lee Jones, Stanley Tucci and Hayley Atwell.</p>
					<p>His recent television credits include Macbeth, part of the BBC's 2005 ShakespeaRe-told miniseries, opposite James McAvoy and Keeley Hawes, and the ITV telefilm Marple: Ordeal by Innocence.  British TV audiences have also seen him on such programs as Sparkhouse, Cold Feet, Ultimate Force and Between the Sheets.</p>
					<p>Born and raised in Leicester, England, Armitage was classically trained at the London Academy of Music and Dramatic Art (LAMDA).  He has appeared in numerous stage productions, including such plays as Hamlet, The Four Alice Bakers, Macbeth and The Duchess of Malfi.</p>		
				</div><br /><br />
				<div class="bio-title">Benedict Cumberbatch</div>
				<div class="CCBio">
					<img src="Images/Content/CCThumb_Smaug.jpg" alt="cast-pic" class="left-wrap"></img>
					<p>BENEDICT CUMBERBATCH (Smaug) is currently starring in Steve McQueen's widely acclaimed true-life drama 12 Years a Slave and next appears in the film adaptation of the hit play August: Osage County, as part of an all-star ensemble cast under the direction of John Wells.  Earlier in 2013, he starred as Khan in J.J. Abrams’ Star Trek Into Darkness and as Julian Assange in Bill Condon's The Fifth Estate.  His recent film credits also include Steven Spielberg's War Horse, and Tomas Alfredson's Tinker Tailor Soldier Spy, for which he received a British Independent Film Award nomination.</p>
					<p>Television audiences know Cumberbatch for his performance in the title role of the BBC's contemporized Sherlock Holmes, for which he has garnered Emmy, Golden Globe and two BAFTA TV Award nominations.  He earned his second Best Actor Emmy nomination this year for his performance in the HBO miniseries Parade’s End. </p>
					<p>Cumberbatch studied drama at the University of Manchester before training at the London Academy of Music and Dramatic Art.  Early in his career, he was seen in a number of theatre and television roles; however, it was his portrayal of Stephen Hawking in the 2004 BBC biopic Hawking that brought him international attention and his first BAFTA TV Award nomination.  He later gained another BAFTA TV Award nomination for his work in the BBC's Small Island.</p>
					<p>Among his additional television credits are Silent Witness, MI-5, Dunkirk, To the Ends of the Earth and The Last Enemy.  His other big-screen credits include Starter for 10, Amazing Grace, Third Star, Wreckers, Stuart: A Life Backwards, The Other Boleyn Girl and Atonement.</p>
					<p>On the stage, Cumberbatch starred in Danny Boyle's celebrated 2011 production of Mary Shelley's Frankenstein at the National Theatre, alternating (with Jonny Lee Miller) in the roles of The Creature and Dr. Frankenstein.  Together with Miller, he shared in an Olivier Award, an Evening Standard Theatre Award and a Critics' Circle Theatre Award for the dual roles.  He previously received an Olivier Award nomination for his performance in Richard Eyre's 2005 West End production of Hedda Gabbler.  His extensive stage work also includes two seasons with the Open Air Theatre in Regent's Park with The New Shakespeare Company; Trevor Nunn’s production of Lady from the Sea; Tennessee Williams' Period of Adjustment; Ionesco's Rhinoceros; The Arsonists; The City at the Royal Court Theatre; and Thea Sharrock's award-winning 2010 revival of After the Dance at the National Theatre.</p>		
				</div><br /><br />
				<div class="bio-title">Orlando Bloom</div>
				<div class="CCBio">
					<img src="Images/Content/CCThumb_Orlando.jpg" alt="cast-pic" class="right-wrap"></img>
					<p>ORLANDO BLOOM (Legolas) first created the role of Legolas in Peter Jackson's Oscar-winning The Lord of the Rings Trilogy.  For the final film, The Lord of the Rings: The Return of the King, he shared in several Best Ensemble awards, including a Screen Actors Guild (SAG) Award.</p>
					<p>Born in Canterbury, England, Bloom trained at the National Youth Theatre in London and he later earned a scholarship to study with the British American Drama Academy.  After completing his scholarship, he made his feature film debut in Wilde, starring Stephen Fry and Jude Law.  Bloom was next accepted to London's Guildhall School of Music and Drama, where he performed in many stage productions, including Peer Gynt and Twelfth Night.  Upon graduation, a then unknown Bloom was cast in the films that launched his career, Jackson's screen adaptation of J.R.R. Tolkien's The Lord of the Rings.</p>
					<p>In the summer of 2003, Bloom starred opposite Johnny Depp and Keira Knightley in the Jerry Bruckheimer-produced mega-hit Pirates of the Caribbean: The Curse of the Black Pearl, directed by Gore Verbinski.  Bloom would go on to reprise his role in the record-breaking sequels, Pirates of the Caribbean: Dead Man’s Chest and Pirates of the Caribbean: At World's End, both under the direction of Verbinski.</p>
					<p>He also worked with director Ridley Scott on Black Hawk Down and then reunited with Scott to star in Kingdom of Heaven.  Bloom's first contemporary American role was in Cameron Crowe’s semi-autobiographical Elizabethtown.</p>
					<p>Bloom's additional film credits include Ned Kelly, opposite Heath Ledger; Wolfgang Petersen's Troy, with Brad Pitt; Haven, opposite Zoe Saldana; the anthology film New York, I Love You; Mark Ruffalo's directorial debut, Sympathy for Delicious, opposite Laura Linney; Main Street, written by Horton Foote; and Paul W.S. Anderson's The Three Musketeers.  He was most recently seen at the closing night of the 2013 Cannes Film Festival in Jerome Salle's Zulu, alongside Forest Whitaker.</p>
					<p>On stage, Bloom made his debut in London's West End in a critically acclaimed 2007 revival of David Storey's 1969 drama In Celebration, directed by Anna Mackmin.  In 2013, he made his Broadway debut as Romeo in Shakespeare’s Romeo and Juliet, directed by David Leveaux. </p>		
				</div><br /><br />
				<div class="bio-title">Evangeline Lilly</div>
				<div class="CCBio">
					<img src="Images/Content/CCThumb_Eva.jpg" alt="cast-pic" class="right-wrap"></img>
					<p>EVANGELINE LILLY (Tauriel) is perhaps best known for the starring role of Kate Austen on the thought-provoking series Lost, which, over the course of six successful seasons, became one of the most discussed and debated shows in TV history.  Lilly earned a Golden Globe Award nomination for Best Actress in a Drama Series for her work on the show, and also shared in a Screen Actors Guild (SAG) Award for Outstanding Drama Series Ensemble in 2006.</p>
					<p>On the big screen, Lilly appeared in Kathryn Bigelow's Oscar-winning Best Picture The Hurt Locker, playing Connie James, the wife of Jeremy Renner's character.  As part of the ensemble cast, Lilly earned her second SAG Award  nomination, for Outstanding Motion Picture Cast.</p>
					<p>Lilly more recently starred in Shawn Levy's science fiction actioner Real Steel, opposite Hugh Jackman.  Her other film credits include the indie feature Afterwards, with John Malkovich.  Next year, she stars in Peter Jackson’s The Hobbit: There and Back Again, the conclusion of the Trilogy, in which she reprises the role of Tauriel.</p>
					<p>Apart from her acting, Lilly has also written The Snickerwonkers, the first book in a planned series for young readers.</p>		
				</div><br /><br />
				<div class="yellow-divider-medium"></div>
				<br /><div class="sub-header">Crew Biographies</div><br />
				<div class="bio-title">Peter Jackson</div>
				<div class="CCBio">
					<p>PETER JACKSON (Director/Producer/Screenwriter) is one of the world's most successful filmmakers.  His monumental achievement was The Lord of the Rings Trilogy, which he directed, as well as co-wrote and produced together with fellow Academy Award winners and frequent collaborators Fran Walsh and Philippa Boyens.  Collectively, the films earned a total of 30 Academy Award nominations, winning 17 Academy Awards, including Best Picture for the final film.  Jackson and Walsh had received their first Oscar nomination for Best Original Screenplay for their acclaimed film Heavenly Creatures.</p>
					<p>Jackson once again plunged into the world of Middle-earth to direct, co-write and produce a trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien. The first film in The Hobbit Trilogy, The Hobbit: An Unexpected Journey, was released in 2012 and earned over $1 billion worldwide and three Academy Award nominations.</p>
					<p>Jackson, through his New Zealand-based WingNut Films banner, also was responsible for the globally successful 2005 remake of King Kong, which earned over $500 million worldwide and three Academy Awards.  Jackson more recently directed the Academy Award-nominated The Lovely Bones, an adaptation of the acclaimed best-selling novel by Alice Sebold, and produced the global sensation District 9, which received an Academy Award nomination for Best Picture.  </p>
					<p>Jackson also produced, with Steven Spielberg and Kathleen Kennedy, The Adventures of Tintin, which was directed by Spielberg.  The film won, amongst many other awards and nominations, the Golden Globe for Best Animated Feature and the Producers Guild of America Award for Animated Motion Picture Producers of the Year.  The movie is the first of three, based on the world-renowned comic book series by Herge, and Jackson will direct the second film in the trilogy. </p>
					<p>In 2010, he received a knighthood for his services to film.</p>			
				</div><br /><br />
				<div class="bio-title">Fran Walsh</div>
				<div class="CCBio">
					<p>FRAN WALSH (Producer/Screenwriter) shared writing, producing and songwriting credits on Peter Jackson's The Lord of the Rings: The Return of the King, for which she won three Academy Awards, two BAFTA Awards, and two Golden Globe Awards, all including Best Picture. She also won a Grammy Award for the song Into the West, and earned a Producers Guild Award.  She had previously been recognized with a number of award nominations, including three Oscar nods, for her work as a screenwriter and producer on the first two films in the trilogy: The Lord of the Rings: The Fellowship of the Ring and The Lord of the Rings: The Two Towers.</p>
					<p>Walsh returned to Middle-earth to co-write and produce a trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien.  She also contributed to songs that are heard in the Trilogy, including Torture Song in the first film, 2012's The Hobbit: An Unexpected Journey, which she co-wrote with Philippa Boyens.  </p>
					<p>Walsh received her first Academy Award nomination, for Best Original Screenplay, for her work on Heavenly Creatures, which she co-wrote with Jackson.  She more recently collaborated with Jackson as both a producer and screenwriter on the 2005 remake of King Kong and The Lovely Bones, based on the best-selling novel. Her earlier credits as a co-writer with Jackson include The Frighteners, Dead Alive and Meet the Feebles.</p>
					<p>Walsh began her writing career soon after leaving Victoria University, where she majored in English Literature. She also has a background in music.</p>			
				</div><br /><br />
				<div class="bio-title">Philippa Boyens</div>
				<div class="CCBio">
					<p>PHILIPPA BOYENS (Screenwriter/Co-Producer) won an Academy Award and a BAFTA Award, both shared with Peter Jackson and Fran Walsh, for Best Adapted Screenplay for The Lord of the Rings: Return of the King, also receiving a Writers Guild of America (WGA) Award nomination. She had earned Oscar, BAFTA Award and WGA Award nominations for her work on the first film in the trilogy, The Lord of the Rings: The Fellowship of the Ring, which also marked her screenwriting debut. In addition, Boyens co-wrote the screenplay for The Lord of the Rings: The Two Towers.</p>
					<p>Boyens returned to Middle-earth to co-write and co-produce a trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien.  She also contributed to songs that are heard in the Trilogy, including Torture Song in the first film, 2012's The Hobbit: An Unexpected Journey, which she co-wrote with Fran Walsh. </p>
					<p>Boyens has since collaborated with Jackson on the screenplays for the director's remake of King Kong and The Lovely Bones, based on the best-selling novel.  She also served as a co-producer on both films.</p>
					<p>Prior to screenwriting, Boyens worked in theatre as a playwright, teacher, producer and editor.  She segued to film via a stint as director of the New Zealand Writers Guild.  In 2000, she was named by Variety as one of the Ten Screenwriters to Watch.</p>			
				</div><br /><br />
				<div class="bio-title">Guillermo Del Toro</div>
				<div class="CCBio">
					<p>GUILLERMO DEL TORO (Screenwriter) earned international acclaim as the director, writer and producer of the 2006 fantasy drama Pan's Labyrinth.  Del Toro was honored with an Oscar nomination for his original screenplay for the film, which received five more Oscar nominations, including Best Foreign Language Film, and won Academy Awards for Art Direction, Cinematography and Makeup.  In all, the film garnered more than 40 international awards and appeared on more than 35 critics' lists of the year's best films.</p>
					<p>Del Toro first gained worldwide recognition for the 1993 Mexican-American co-production Cronos, a supernatural horror film, which he directed from his own screenplay.  The film premiered at the 1993 Cannes Film Festival, where it won the Mercedes Benz Award.  It also won over twenty International awards, including eight Ariel Awards from the Mexican Academy of Film, including Best Director, Best Screenplay and the Golden Ariel.</p>
					<p>He then directed and co-wrote the supernatural thriller The Devil’s Backbone, which, along with Cronos has appeared repeatedly in Top Ten lists of best genre films of all times.</p>
					<p>In 2004, del Toro directed and co-wrote the action adventure sci-fi thriller Hellboy, starring Ron Perlman in the title role.  Four years later, he wrote and directed the hit sequel, Hellboy II: The Golden Army.</p>
					<p>Among his other film credits, del Toro produced the supernatural thriller The Orphanage, which became the highest-grossing local language film in Spain's history; and the world-wide horror hit Mama, starring Jessica Chastain.</p>
					<p>In addition, he partnered with fellow Mexican directors Alfonso Cuaron and Alejandro Gonzalez Inarritu to produce Rudo Y Cursi, directed by Carlos Cuaron, and Biutiful, written and directed by Inarritu.  On the animation front, del Toro was an executive producer on the films Kung Fu Panda 2, Puss in Boots and Rise of the Guardians.</p>
					<p>Del Toro more recently directed the sci-fi action blockbuster Pacific Rim, starring Charlie Hunnam, Idris Elba and Rinko Kikuchi. </p>
					<p>Del Toro has also turned his attention to publishing.  With novelist Chuck Hogan, he co-authored the horror novel The Strain, which was published in June 2009 by William Morrow.  They have since collaborated on the books The Fall and The Night Eternal.  All three books debuted as The New York Times top ten bestsellers.  Del Toro is currently developing the Strain novels as an acclaimed series of graphic novels for Dark Horse comics and a television series for FX network. Dark Horse Comics is publishing an acclaimed series of graphic novels based on the series. Del Toro is currently in production on the pilot for a series based on The Strain novels for the FX network. Insight Editions and Harper Design have recently published Guillermo del Toro: Cabinet of Curiosities, a lavishly illustrated book which contains notes and drawing from his private journals.</p>			
				</div><br /><br />
				<div class="bio-title">Carolynne Cunningham</div>
				<div class="CCBio">
					<p>CAROLYNNE CUNNINGHAM (Producer) has an entertainment industry career spanning more than thirty years.  She first collaborated with filmmaker Peter Jackson on Heavenly Creatures as first assistant director.  They reunited on the challenging and Academy Award-winning The Lord of the Rings Trilogy, winning a Directors Guild of America Award as part of the directing team on the finale, The Return of the King.  After completion of the trilogy, Cunningham continued with Jackson on King Kong and The Lovely Bones in a producer role, while also maintaining her first assistant director duties.</p>
					<p>Cunningham then teamed with director Neill Blomkamp and produced the hugely successful sci-fi feature District 9.  For this film, she was nominated alongside Jackson for an Academy Award for Best Picture and a Producers Guild Award.</p>
					<p>Most recently, Cunningham reunited with Peter Jackson to produce The Hobbit Trilogy.  The first film in the Trilogy, The Hobbit: An Unexpected Journey, was released in 2012.</p>			
				</div><br /><br />
				<div class="bio-title">Zane Weiner</div>
				<div class="CCBio">
					<p>ZANE WEINER (Producer) was recently the co-producer on One for the Money.  Weiner first collaborated with Peter Jackson as the unit production manager on the blockbuster The Lord of the Rings Trilogy.  He reunited with Jackson again to produce The Hobbit Trilogy.  The first film in the Trilogy, The Hobbit: An Unexpected Journey, was released in 2012.  </p>
					<p>After executive producing The Big Bounce, Weiner became President of Physical Production for Shangri-La Entertainment from 2003 to 2009.  In this role, he produced Martin Scorsese's Shine a Light, and was the company's production executive on Robert Zemeckis's Beowulf and The Polar Express, Christopher Guest's For Your Consideration and Albert Brooks' Looking for Comedy in the Muslim World.</p>
					<p>His other film credits include: co-producing The Crew, starring Richard Dreyfuss and Burt Reynolds; unit production manager on Rapa Nui; Curtis Hanson's critically acclaimed 8 Mile; Wonder Boys and For the Money.</p>
					<p>Prior to beginning his film career, Weiner acted as stage manager for over twenty Broadway and touring theatrical productions, including A Chorus Line, Cats, Dreamgirls, Ballroom, The Pirates Of Penzance, Chess, and The Royal Shakespeare Company's production of Nicholas Nickleby.</p>				
				</div><br /><br />
			</div>
		</div>		
		<div class="clear"></div>
		<div id="footer">
			<div class="yellow-divider"></div>
			<div><img src="Images/Global/real3D.png" alt="available_in_3D"></img></div>	
			<p><a href="#">SITE MAP</a> | <a href="#">PRIVACY</a></p>
		</div>
	</div>
</body>
</html>