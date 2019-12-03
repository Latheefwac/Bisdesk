<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
     <title>Bisdesk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/intl-tel-input@15.0.2/build/css/intlTelInput.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="assets/js/vendors/slick.min.js"></script>
	<script>
	// Replace all SVG images with inline SVG
	$(function() {
		$('img.svg').each(function() {
			var $img = $(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');
			$.get(imgURL, function(data) {
				// Get the SVG tag, ignore the rest
				var $svg = $(data).find('svg');
				// Add replaced image's ID to the new SVG
				if (typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if (typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass + ' replaced-svg');
				}
				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');
				// Replace image with new SVG
				$img.replaceWith($svg);
			}, 'xml');
		});
	});
	</script>
</head>
<body class="">
<header class="bd-header logged">
	<div class="container-fluid h100">
		<div class="heder-wrp d-flx alignVcenter h100">
			<div class="hdr-logo">
				<a href="index.php">
					<!-- <img alt="" src="assets/images/logo.svg" alt="Bisdesk" title="Bisdesk"> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="157.471" height="61.992" viewBox="0 0 157.471 61.992">
			<g id="logo-wrap" data-name="Logo" transform="translate(-1319.539 -317.419)">
				<path id="logo_text" data-name="logo-path" d="M12.39-7.644a3.879,3.879,0,0,1,1.932,1.333,3.71,3.71,0,0,1,.714,2.321,3.4,3.4,0,0,1-1.47,2.951A7.386,7.386,0,0,1,9.282,0H1.974V-14.7H8.862a6.764,6.764,0,0,1,4.011,1.019,3.272,3.272,0,0,1,1.407,2.8,3.682,3.682,0,0,1-.5,1.932A3.451,3.451,0,0,1,12.39-7.644ZM4.7-12.558v4.053H8.568a3.927,3.927,0,0,0,2.194-.515,1.7,1.7,0,0,0,.767-1.5,1.715,1.715,0,0,0-.767-1.523,3.927,3.927,0,0,0-2.194-.514ZM9.114-2.142q3.171,0,3.171-2.121T9.114-6.384H4.7v4.242Zm9.009-9.072h2.625V0H18.123Zm1.323-1.848a1.686,1.686,0,0,1-1.2-.451,1.475,1.475,0,0,1-.483-1.124,1.475,1.475,0,0,1,.483-1.123,1.686,1.686,0,0,1,1.2-.451,1.733,1.733,0,0,1,1.2.431,1.388,1.388,0,0,1,.483,1.082,1.584,1.584,0,0,1-.472,1.165A1.635,1.635,0,0,1,19.446-13.062ZM28.077.147A10.04,10.04,0,0,1,25.41-.21a6.71,6.71,0,0,1-2.079-.9l1.008-2a6.481,6.481,0,0,0,1.816.809,7.547,7.547,0,0,0,2.09.3Q30.6-2,30.6-3.234a.828.828,0,0,0-.6-.819,10.334,10.334,0,0,0-1.921-.441,15.589,15.589,0,0,1-2.257-.483,3.465,3.465,0,0,1-1.512-.955,2.669,2.669,0,0,1-.64-1.9A2.988,2.988,0,0,1,25-10.385a6.069,6.069,0,0,1,3.6-.955,10.394,10.394,0,0,1,2.31.263,6.476,6.476,0,0,1,1.89.7L31.794-8.379a6.217,6.217,0,0,0-3.213-.84,3.561,3.561,0,0,0-1.753.346,1.034,1.034,0,0,0-.6.914.912.912,0,0,0,.64.893,10.179,10.179,0,0,0,1.985.493,15.312,15.312,0,0,1,2.2.483,3.451,3.451,0,0,1,1.48.924,2.576,2.576,0,0,1,.62,1.848A2.924,2.924,0,0,1,31.794-.8,6.436,6.436,0,0,1,28.077.147ZM46.83-15.582V0H44.31V-1.449A4.061,4.061,0,0,1,42.7-.252a5.425,5.425,0,0,1-2.111.4,5.91,5.91,0,0,1-2.908-.714,5.13,5.13,0,0,1-2.027-2.026,6.062,6.062,0,0,1-.735-3.013,6,6,0,0,1,.735-3,5.149,5.149,0,0,1,2.027-2.016,5.909,5.909,0,0,1,2.908-.714,5.331,5.331,0,0,1,2.037.378,4.1,4.1,0,0,1,1.575,1.134v-5.754ZM40.908-2.1a3.376,3.376,0,0,0,1.7-.43,3.111,3.111,0,0,0,1.2-1.229,3.758,3.758,0,0,0,.441-1.848,3.758,3.758,0,0,0-.441-1.848,3.111,3.111,0,0,0-1.2-1.229,3.376,3.376,0,0,0-1.7-.43,3.376,3.376,0,0,0-1.7.43,3.111,3.111,0,0,0-1.2,1.229,3.758,3.758,0,0,0-.441,1.848,3.758,3.758,0,0,0,.441,1.848,3.111,3.111,0,0,0,1.2,1.229A3.376,3.376,0,0,0,40.908-2.1ZM61.236-5.544q0,.273-.042.777H52.4A3.05,3.05,0,0,0,53.6-2.8a3.958,3.958,0,0,0,2.425.724A4.087,4.087,0,0,0,59.073-3.3L60.48-1.68A4.741,4.741,0,0,1,58.569-.315a6.961,6.961,0,0,1-2.6.462A6.93,6.93,0,0,1,52.71-.588a5.293,5.293,0,0,1-2.174-2.047,5.782,5.782,0,0,1-.766-2.971,5.868,5.868,0,0,1,.745-2.951A5.288,5.288,0,0,1,52.584-10.6a6.035,6.035,0,0,1,2.982-.735,5.884,5.884,0,0,1,2.929.724,5.131,5.131,0,0,1,2.016,2.037A6.177,6.177,0,0,1,61.236-5.544Zm-5.67-3.7a3.166,3.166,0,0,0-2.132.745A3.136,3.136,0,0,0,52.374-6.51h6.363a3.1,3.1,0,0,0-1.029-1.974A3.129,3.129,0,0,0,55.566-9.24ZM67.641.147A10.04,10.04,0,0,1,64.974-.21a6.71,6.71,0,0,1-2.079-.9l1.008-2a6.481,6.481,0,0,0,1.816.809,7.547,7.547,0,0,0,2.09.3q2.352,0,2.352-1.239a.828.828,0,0,0-.6-.819,10.334,10.334,0,0,0-1.922-.441,15.589,15.589,0,0,1-2.257-.483,3.465,3.465,0,0,1-1.512-.955,2.669,2.669,0,0,1-.64-1.9,2.988,2.988,0,0,1,1.333-2.552,6.069,6.069,0,0,1,3.6-.955,10.394,10.394,0,0,1,2.31.263,6.476,6.476,0,0,1,1.89.7L71.358-8.379a6.217,6.217,0,0,0-3.213-.84,3.561,3.561,0,0,0-1.754.346,1.034,1.034,0,0,0-.6.914.912.912,0,0,0,.641.893,10.178,10.178,0,0,0,1.984.493,15.312,15.312,0,0,1,2.205.483,3.451,3.451,0,0,1,1.48.924,2.576,2.576,0,0,1,.619,1.848A2.924,2.924,0,0,1,71.358-.8,6.436,6.436,0,0,1,67.641.147ZM79.989-4.809,78.036-2.961V0H75.411V-15.582h2.625v9.408l5.439-5.04h3.15l-4.683,4.7L87.066,0H83.874Z" transform="translate(1389.43 355.671)" fill="#1f1f1f" stroke="#1f1f1f" stroke-width="0.5"/>
				<g id="logo-icon" data-name="Group 3" transform="translate(1319.539 317.419)">
				<path id="Path_2" data-name="Path 2" d="M1374.031,328.464a47.054,47.054,0,0,0-3.366,11.957,51.346,51.346,0,0,0,1.327,21.91,27.179,27.179,0,0,0,7.3,13.281,13.493,13.493,0,0,0,9.46,3.8c.113,0,.227,0,.341,0a14.527,14.527,0,0,0,9.947-4.319,14.153,14.153,0,0,0,.526-19.745,24.9,24.9,0,0,0-12.62-6.927,24.9,24.9,0,0,0,12.62-6.927,14.153,14.153,0,0,0-.526-19.745,14.527,14.527,0,0,0-9.947-4.319,13.508,13.508,0,0,0-9.8,3.8A25.84,25.84,0,0,0,1374.031,328.464Z" transform="translate(-1347.526 -317.419)" fill="#ee3a4e"/>
				<circle id="Ellipse_2" data-name="Ellipse 2" cx="9.115" cy="9.115" r="9.115" transform="translate(0 21.881)" fill="#ee3a4e"/>
				</g>
			</g>
			</svg>

				</a>
			</div>
			<div class="hdr-right d-flx ml-auto alignVcenter">
				<div class="hdr-search bd-search">
					<div class="back-to-screen search-backto" onclick="backToScreen();">
					<span class="icon-left-1"></span>
					</div>
					<div class="fxlwrap d-flx alignVcenter h100">
						<input id ="top-search" type="search" name="" value="" placeholder="Office Space in Dubai">
						<button type="button" class="btn-search locate"><i class="icon-direction"></i> Locate Me</button>
						<button type="button" class="btn-search icon-search_icon"></button>
					</div>
					<div class="suggested-box" id="suggested-box">
						<div class="sbox-wrap">
							<div class="sbox-ttl">Suggested</div>
							<div class="sbox-product-list">
								<ul>
									<li><a href="">Office Space in  Dubai</a></li>
									<li><a href="">Private Office Space in  Dubai</a></li>
									<li><a href="">Office Space in  Ajman</a></li>
									<li><a href="">Office Space in  Sharja</a></li>
									<li><a href="">Office Space in  Abu Dhabi</a></li>
								</ul>
							</div>
							<?php include('includes/suggested-box.php');?>
						</div>
					</div>
				</div>
				<div class="hdr-menu logged">
					<nav class="main-nav">          
						<ul>
							<li><a href="work-space.php" title="">List your Space </a></li>
							<li><a href="" title="">Help</a></li>
							<li class="sign-in"><a href="" title="" data-toggle="modal" data-target="#login">Login & Signup</a></li>
							<li class="login-menu">
								<span class="user-name" title=""><img alt="" class="sign-up-avatar" src="assets/images/sing-in.svg">Clint Antony</span>
								<div class="header-login">
									<div class="login-items">Tenant Dashboard</div>
									<div class="login-items">Profile Settings</div>
									<div class="login-items">Logout</div>
								</div>
							</li>
						</ul>
					</nav>
				</div>
				<div class="hdr-countrysel">
                        <div class="ddmenu-wrap" data-toggle="dropdown" type="button" aria-expanded="true">
                            <div class="drop-name"><img alt="" src="assets/images/flag.svg" alt=""></span>UAE</div>
                            <button class="drop-btn"></button>
                            <div class="drop-menu">
                                <ul class="menu_items">
                                    <li><a href="#"><img alt="" src="assets/images/flag.svg" alt=""></span>UAE</a></li>
                                    <li><a href="#"><img alt="" src="assets/images/flag.svg" alt=""></span>KSA</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
			</div>
		</div>
	</div>
	<div class="mobile-search mobile-only">
		<span class="icon-search_icon"></span>
	</div>
	<div class="mob-btn">
			<span></span>
			<span></span>
			<span></span>
	</div>
	<div class="mobile-locate">
		<i class="icon-direction"></i>
	</div>
	<div class="back-to-screen" onclick="backToScreen()";>
		<span class="icon-left-1"></span>
	</div>
	<div class="overlay"></div>	
</header>
<nav class="mobile-menu">
		<div class="mmenu-item login-item">
			<ul>
				<li><strong>My Account</strong></li>
				<li><a href="" data-toggle="modal" data-target="#login">Login</a></li>
			</ul>

		</div>
		<div class="mmenu-item logged-item">
			<ul>
				<li><i class="icon-user"></i><strong>Clint Antony</strong></li>
				<li><a href="">Tenant Dashboard</a></li>
				<li><a href="">Profile Settings</a></li>
				<li><a href="">Logout</a></li>
			</ul>
		</div>
		<div class="mmenu-item hdr-item">
			<ul>
				<li><strong><a href="work-space.php" title="">List your Space </a></strong></li>
				<li><strong><a href="" title="">Help</a></strong></li>
			</ul>
		</div>
		<div class="mmenu-item ftr-item">
			<ul>
				<li><a href="">About Bisdesk</a></li>
				<li><a href="">Our Plans</a></li>
				<li><a href="">Office Spaces</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</div>
		<div class="mmenu-item select-location">
			<div class="lctnnme">
				Select Location
			</div>
			<div class="hdr-countrysel">
				<div class="ddmenu-wrap" data-toggle="dropdown" type="button" aria-expanded="true">
					<div class="drop-name"><img alt="" src="assets/images/flag.svg" alt=""></span>UAE</div>
						<button class="drop-btn"></button>
					<div class="drop-menu">
						<ul class="menu_items">
							<li><a href="#"><img alt="" src="assets/images/flag.svg" alt=""></span>UAE</a></li>
							<li><a href="#"><img alt="" src="assets/images/flag.svg" alt=""></span>KSA</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="mmenu-item tel-number">
			<ul>
				<li class="li-icon"><img src="assets/images/footer-phone.svg" alt=""><a href="tel:+971 52 331 0006">+971 52 331 0006</a></li>
				<li class="li-icon e-mail"><img src="assets/images/footer-mail.svg" alt=""><a class="lvrcase" href="mailto:Info@bisdesk.com">Info@bisdesk.com</a></li>
			</ul>
		</div>	
	</nav>