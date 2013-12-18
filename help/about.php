<?php

  $currentPage="About";

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>About the Team</title>
		<?php include("assets/php/links.php"); ?>
		<script>
			function submit(){
				alert("hey");
			}
		</script>
	</head>
    <body>	
		<!--php navigation include-->
		<?php include("assets/php/navigation.php"); ?>
		
		<div id="content">
			<h1>About SQLGenerator and its team</h1>
			<p>SQLGenerator's team was formed in <a href="http://www.rit.edu">RIT's</a> ISTE 422 class - App Development practices. Our goal was twofold:
			<h4>Generate the appropriate statements</h4>
			<p>For any number of database management systesms, given an Edge Diagrammer file. We were provided with some base code, and had to restructure it and provide it with the information it needs to create the tables on a different DBMS without major rewriting of the code. Then, the company can switch vendors with minimal effort.</p>
			
			<h4>Replace Edge Diagrammer</h4>
			<p>With some other tool or schema description file and perform the same functions.</p>
			
			
			<a href="https://github.com/samjhill/sqlgenerator" target="_blank" alt="github project" title="visit this project on github!"><i class="fa fa-github"></i> Visit this project on GitHub!</a>
			<h2>Team Members</h2>
			
			<div id="about-1" class="team-member">
			    <img class="pull-left" alt="team member 1" width="150" height="150" src="images/prof.jpg">
			    <div class="info-text">
				<h3>Michael Blout</h3>
				<a href="#" target="_blank">www.website.com</a>
				<p>info goes here</p>
			    </div>
			</div>
			
			<div id="about-2" class="team-member">

			    <img class="pull-left" alt="team member 2" width="150" height="150" src="https://pbs.twimg.com/profile_images/378800000279639066/3d4df3e64e1add95383bdec0493f2876.jpeg">
			    <div class="info-text">
				<h3>Sam Hill</h3>
				<a href="http://www.samjhill.com" target="_blank">www.samjhill.com</a>
				<p>I'm a third-year IT student. I love skiing, web development, playing bass, and having fun.</p>
			    </div>
			</div>
			
			<div id="about-3" class="team-member">
			    <img class="pull-left" alt="team member 3" width="150" height="150" src="">
			    <div class="info-text">
				<h3>Greg Sapienza</h3>
				<a href="http://www.website.com" target="_blank"></a>
				<p>info goes here</p>
			    </div>
			</div>
			
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="assets/libraries/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>