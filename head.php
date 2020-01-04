
<!-- Head, icluded on each page
	Easy to modify just this one file to make changes on all pages
 -->


<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Basic site</title>
        <meta name="description" content="A small website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/styles/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/companylogo.png">
    </head>

<?php 
include('languages.php'); 
include('contact.php');
?>

	<body>
		<header>
			<div class="nav-container">
				<div class="logo-container">
					<a class="logo" href="#"></a>
					<svg class="nav-mobile" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
					width="24" height="24"
					viewBox="0 0 172 172"
					style=" fill:#FFF;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M0,14.33333v14.33333h172v-14.33333zM0,78.83333v14.33333h172v-14.33333zM0,143.33333v14.33333h172v-14.33333z"></path></g></g></svg>
				</div>

				<?php
				// Check what language is selected and use the navigation site for it
				if(isset($_GET['lang'])) {
					if ($_GET['lang'] == "en") {
					   include("partials/nav_en.php");
					} else {
					   include("partials/nav_fi.php");
					}
				// If there is no ?lang= in url, get the language from cookies and use the en navigation as default
				} else {
					include("partials/nav_en.php");
					exit;
				}
				?>
			</div>
		</header>

		<!-- A small box that's shown if the user clicks on a button that
		doesn't really take them anywhere -->
		<div class="sorry">
			<div>
				<i class="fa fa-frown-o"></i>
			</div>
			<div>
				<h2>Sorry</h2>
				<p>but this page hasn't been developed yet.</p>
				<a id="sorryclose">OK...</a>
			</div>
		</div>
