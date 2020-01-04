<?php
// Save selected language in cookies until it's changed
if ( !empty($_GET['lang']) ) {
    $_COOKIE['lang'] = $_GET['lang'] === 'en' ? 'en' : 'fi';
} else {
    $_COOKIE['lang'] = 'fi';
}
if (!isset($_COOKIE['lang'])) {
	setcookie('lang', 'en');
} else {
	setcookie('lang', $_COOKIE['lang']);
}
?>
