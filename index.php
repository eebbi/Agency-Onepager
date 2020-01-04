<?php 

// Check what language is selected and open the proper site for it
if(isset($_GET['lang'])) {
	if ($_GET['lang'] == 'en') {
	   include("partials/index_en.php");
	} else {
	   include("partials/index_fi.php");
	}
// If there is no ?lang= in url, get the language from cookies and put it in the url
} elseif(isset($_COOKIE['lang'])) {
	header('Location: ?lang=' . $_COOKIE['lang']);
	exit;
} else {
	header('Location: ?lang=en');
	exit;
}

include('footer.php');

?>
