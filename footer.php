
<!-- Footer, icluded on each page
	Easy to modify just this one file to make changes on all pages
 -->

		<footer>
			<div class="wrapper">
				<div class="inner">
					<div class="column">
						<p>Facebook Headquarters<br>
						Hacker Way 1<br>
						CA 94025<br>
						USA</p>
					</div>
					<div class="column">
						<p>Twitter Headquarters<br>
						1355 Market St #900<br>
						CA 94103<br>
						USA</p>
					</div>
					<div class="column">
						<p>Google Headquarters<br>
						1600 Amphitheatre Pkwy<br>
						CA 94043<br>
						USA</p>
					</div>
					<div class="column">
						<p>(+358) 044 262 7686<br>
						eepi1994@hotmail.com</p>
						<div class="social-media">
							<a class="icon icon-facebook" target="_blank" href="https://www.facebook.com"></a>
							<a class="icon icon-twitter" target="_blank" href="https://twitter.com"></a>
							<a class="icon icon-linkedin" target="_blank" href="https://www.linkedin.com"></a>
						</div>
					</div>
				</div>
				<div class="inner">
					<div id="contact" class="anchor"></div>
					<?php
					// Check what language is selected and use the contact form for it
					if(isset($_GET['lang'])) {
						if ($_GET['lang'] == "en") {
						   include("partials/contact_en.php");
						} else {
						   include("partials/contact_fi.php");
						}
					} else {
						include("partials/contact_en.php");
						exit;
					}
					?>
				</div>
			</div>
			<div class="bottom">
				<span>&copy; Erik Vänttinen 2019</span>
			</div>
		</footer>

		<div id="cookie-bar">
			<div class="left-side">
				<span>Warning - evil cookies!</span><br>
				<i>By allowing these cookies, we will do cool stuff. <b>Trust me.</b></i>
			</div>
			<a id="cookie-btn">OK</a>
		</div>

		<a id="nocookies">Delete cookies</a>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="assets/scripts/main.js"></script>

    </body>
</html>
