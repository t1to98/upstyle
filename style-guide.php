	<?php

		$client_name = 'Upstatement';


		/*	This array fills in the tabs and includes the files for each section of the style guide
			Delete a section if you don't need it */
		
		// $style_tabs = array();
		// $style_tabs[] = array('title' => 'Type', 'file' => '_includes/_style/type.php');
		// $style_tabs[] = array('title' => 'Objects', 'file' => '_includes/_style/objects.php');
		// $style_tabs[] = array('title' => 'Forms', 'file' => '_includes/_style/forms.php');
		//  		$style_tabs[] = array('title' => 'Tables', 'file' => '_includes/_style/tables.php');
/* 		$style_tabs[] = array('title' => 'Layout', 'file' => '_includes/_style/layout.php'); */
/* 		$style_tabs[] = array('title' => 'Color', 'file' => '_includes/_style/color.php'); */
	
	?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie oldie" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $client_name ?> Pattern Library</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="/_css/screen.css?v=2">
  <link rel="stylesheet" href="/_css/style-guide.css" media="screen"/>  
  <script type="text/javascript" src="_js/libs/modernizr-2.0.6.min.js"></script>

	<?php 
		$code_snip = '<pre class="html-code prettyprint linenums"></pre>';
	?>

</head>

<body class="style-bd" onload="prettyPrint()">

	<div class="style-content">

		<!-- ~~~~~~~~~~~~~~~~~~~~~~	-->		
		<!-- Header 				-->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~	-->
		<nav id="style-hdr" class="style-hdr">
			<h1 class="style-page-h"><?php echo $client_name ?> <span class="thin">Style Guide</thin></h1>
			<a class="all-code-btn">Show All Code</a>
		</nav> <!--style-hdr -->


		<!-- ~~~~~~~~~~~~~~~~~~~~~~	-->		
		<!-- Typography 			-->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~	-->

		<section id="typography" class="typography">

			<article class="style-mod">
				<hgroup class="style-hgroup">
					<h3 class="style-h">Page Headline - h1</h3>
					<a class="code-btn">Show Code</a>
				</hgroup>
				<div class="inner">
					<div class="style-example">
						<h1 class="page-h1">Sample Page Headline 1</h1>
					</div>
				</div> <!-- /inner -->
				<div class="code-example">
					<div class="inner">
						<div class="code-markup ui-block">
							<h4 class="code-h" title="Copy to Clipboard">HTML <span class="code-copy">Copy to clipboard</span></h4>
							<?php echo $code_snip ?>
						</div>
						<div class="code-style ui-block">
							<h4 class="code-h" title="Copy to Clipboard">CSS <span class="code-copy">Copy to clipboard</span></h4>
							<textarea class="css-code ta">
							</textarea>
						</div>
					</div> <!-- /inner -->
				</div> <!-- /code-example -->
			</article> <!-- /style-mod -->

		</section> <!-- /typography -->
		

	</div> <!-- panes -->


  <script type="text/javascript" src="_js/libs/jquery-1.7.2.min.js"></script>

  <script type="text/javascript" src="_js/libs/jquery.tools.min.js"></script>  

  <!-- Modals: Do you enjoy modals? Yes you do -->
  <script type="text/javascript" src="_js/libs/jquery.simplemodal.1.4.2.min.js"></script>

  <!-- scripts concatenated and minified via ant build script-->
  <script type="text/javascript" src="_js/libs/prettify.js"></script>
  <script type="text/javascript" src="_js/libs/style-guide.js"></script>
  <script type="text/javascript" src="_js/script.js"></script>
  <script type="text/javascript" src="_js/up-base.js"></script>
  <!-- end scripts-->


  <!-- PNG fix for IE6 -->
  <!--[if lt IE 7 ]>
    <script src="_js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->


  <!-- change the UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>