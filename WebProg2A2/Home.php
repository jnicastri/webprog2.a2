<?php
	require_once ('ServerSideCode/functions.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="Styles/Global.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/Home.css"/>
	<link rel="shortcut icon" href="Images/Global/H.ico" />
	<title>Hobbit: The Desolation of Smaug - Welcome</title>
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
				<h2><img class="sword-img" src="Images/Global/mini-sword-variant.png" alt="hobbit-sword"></img>&nbsp;The Hobbit: The Desolation of Smaug</h2>
				<div class="yellow-divider-medium"></div>
				<div class="padder"></div>
				<img src="Images/Content/Home-leaderboard.jpg" alt="Hobbit-leaderboard-image"></img>
				<div class="yellow-divider-medium"></div>
				<div class="padder"></div>
				<div class="sub-header">About the Film</div>
				<div class="text-content">
					<p>From Academy Award-winning filmmaker Peter Jackson comes The Hobbit: The Desolation of Smaug, the second in a trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien.</p>
					<p>The three films tell a continuous story set in Middle-earth 60 years before The Lord of the Rings, which Jackson and his filmmaking team brought to the big screen in the blockbuster trilogy that culminated with the Oscar-winning The Lord of the Rings: The Return of the King.</p>
					<p>The Hobbit: The Desolation of Smaug continues the adventure of the title character Bilbo Baggins as he journeys with the Wizard Gandalf and thirteen Dwarves, led by Thorin Oakenshield, on an epic quest to reclaim the Lonely Mountain and the lost Dwarf Kingdom of Erebor.</p>
					<p>Having survived the beginning of their unexpected journey, the Company travels East, encountering along the way the skin-changer Beorn and a swarm of giant Spiders in the treacherous forest of Mirkwood.  After escaping capture by the dangerous Wood-elves, the Dwarves journey to Lake-town, and finally to the Lonely Mountain itself, where they must face the greatest danger of all—a creature more terrifying than any other; one which will test not only the depth of their courage but the limits of their friendship and the wisdom of the journey itself—The Dragon Smaug.</p>
					<p>Ian McKellen returns as Gandalf the Grey, with Martin Freeman in the central role of Bilbo Baggins, and Richard Armitage as Thorin Oakenshield.  The international ensemble cast is led by Benedict Cumberbatch, Evangeline Lilly, Lee Pace, Luke Evans, Stephen Fry, Ken Stott, James Nesbitt, and Orlando Bloom as Legolas.  The film also stars Mikael Persbrandt, Sylvester McCoy, Aidan Turner, Dean O'Gorman, Graham McTavish, Adam Brown, Peter Hambleton, John Callen, Mark Hadlow, Jed Brophy, William Kircher, Stephen Hunter, Ryan Gage, John Bell, Manu Bennett and Lawrence Makoare.</p>
					<p>The screenplay for The Hobbit: The Desolation of Smaug is by Fran Walsh &amp; Philippa Boyens &amp; Peter Jackson &amp; Guillermo del Toro, based on the novel by J.R.R. Tolkien.  Jackson also produced the film, together with Carolynne Cunningham, Zane Weiner and Fran Walsh.  The executive producers are Alan Horn, Toby Emmerich, Ken Kamins and Carolyn Blackwood, with Philippa Boyens and Eileen Moran serving as co-producers.</p>
					<p>The creative behind-the-scenes team is led by director of photography Andrew Lesnie, production designer Dan Hennah, editor Jabez Olssen and composer Howard Shore.  The costumes are designed by Bob Buck, Ann Maskrey and Richard Taylor.  Taylor is also overseeing the design and production of armour, weapons, creatures and special makeup, which are once again being made by the award-winning Weta Workshop.  Oscar-winning visual effects studio Weta Digital is again handling the visual effects for the film, led by senior visual effects supervisor Joe Letteri.  The hair and makeup designer is Peter Swords King. The conceptual designers are John Howe and Alan Lee.  The visual effects supervisor is Eric Saindon, with David Clayton &amp; Eric Reynolds serving as animation supervisors.</p>
					<p>Under Jackson's direction, The Hobbit: The Desolation of Smaug was shot in 3D 48 frames-per-second and will be released in High Frame Rate 3D (HFR 3D) in select theaters, other 2D and 3D formats, and IMAX.  Production took place at Jackson's own facilities in Miramar, Wellington, and on location around New Zealand.  Post production took place at Park Road Post Production in Wellington.</p>  
					<p>New Line Cinema and Metro-Goldwyn-Mayer Pictures Present a Wingnut Films Production, The Hobbit: The Desolation of Smaug.  The film is a production of New Line Cinema and Metro-Goldwyn-Mayer Pictures (MGM), with New Line managing production.  Warner Bros. Pictures is handling worldwide theatrical distribution, with select international territories as well as all international television distribution being handled by MGM. </p>									
				</div>
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