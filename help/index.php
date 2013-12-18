<?php
  $currentPage="Home";
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Home - Help for SQLGenerator</title>
		<?php include("assets/php/links.php"); ?>
	</head>

    <body>		
		<!--php navigation include-->
		<?php include("assets/php/navigation.php"); ?>
		
        <div id="content">
			
			<h1>Need help with SQLGenerator?</h1>
            
			<div id="homeNav">
			  <p>SQLGenerator converts Edge Diagrammer files into SQL statements to save you time and effort.</p>
			</div>	
			
			<div id="start-guide">
			<div id="startup-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#startup-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#startup-carousel" data-slide-to="1"></li>
					<li data-target="#startup-carousel" data-slide-to="2"></li>
				</ol>

			<! -- slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="assets/images/step1.png" alt="step 1">
					<div class="carousel-caption"> Step 1: Set the output file location.</div>
				</div>
				<div class="item">
					<img src="assets/images/step2.png" alt="step 2">
					<div class="carousel-caption"> Step 2: Load an Edge Diagrammer or XML file into the program.</div>
				</div>
				<div class="item">
					<img src="assets/images/step3.png" alt="step 3">
					<div class="carousel-caption"> Step 3: Run the results!</div>

				</div>
			<! -- controls -->
			<a class="left carousel-control" href="#startup-carousel" data-slide="prev">
				<i class="fa fa-chevron-left"></i>
			</a>

			<a class="right carousel-control" href="#startup-carousel" data-slide="next">
				<i class="fa fa-chevron-right"></i>
			</a>
			</div>
			</div>


			<div id="faq">
			  <h2>FAQ</h2>
			  
			  <h3>What database management systems does SQLGenerator support?</h3>
			  <p>SQLGenerator supports MySQL, as well as Oracle. Support for more may be added in the future!</p>
			  
			  <h3>Does SQLGenerator support XML?</h3>
			  <p>Yes. Because EdgeDiagrammer isn't within everyone's budget, we also included the ability to use XML files to create your SQL statments with SQLGenerator.</p>
			  
			  <h3>Can I get a sample XML file to make sure I'm formatting mine correctly?</h3>
			  <p><a target="_blank" href="assets/sample/alternative_diagrammer_file.xml">Sure.</a></p>
			  
			  
			</div>
        </div>
		
	  <script src="assets/libraries/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
