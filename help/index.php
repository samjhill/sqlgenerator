<?php
  $currentPage="Home";
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Home - Help for SQLGenerator</title>
		<?php include("php/links.php"); ?>
	</head>

    <body>		
		<!--php navigation include-->
		<?php include("php/navigation.php"); ?>
		
        <div id="content">
			
			<h1>Need help with SQLGenerator?</h1>
            
			<div id="homeNav">
			  <p>SQLGenerator converts Edge Diagrammer files into SQL statements to save you time and effort.</p>
			  <a href="#faq">FAQ</a> check out the frequently asked questions about SQLGenerator.
			</div>	
			
			<div id="faq">
			  <h2>FAQ</h2>
			  
			  <h3>What database management systems does SQLGenerator support?</h3>
			  <p>SQLGenerator supports MySQL, as well as Oracle. Support for more may be added in the future!</p>
			  
			  <h3></h3>
			</div>
        </div>
		
	  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>