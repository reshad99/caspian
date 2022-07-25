<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="/assets-front/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="/assets-front/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/assets-front/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets-front/css/magnific-popup.css">
	<link rel="stylesheet" href="/assets-front/css/select2.min.css">
	<link rel="stylesheet" href="/assets-front/css/paymentfont.min.css">
	<link rel="stylesheet" href="/assets-front/css/slider-radio.css">
	<link rel="stylesheet" href="/assets-front/css/plyr.css">
	<link rel="stylesheet" href="/assets-front/css/main.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="National Projects of Azerbaijan">
	<title>Caspian Music </title>

</head>

<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<div class="header__logo">
				<a href="index.html">
					<img src="{{ $about->light_logo }}" alt="">
				</a>
			</div>

		

			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<div class="sidebar__logo">
			<img src="{{ $about->light_logo }}" alt="">
		</div>
		<!-- end sidebar logo -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="/" class="sidebar__nav-link @if(Request::segment(1) == '') sidebar__nav-link--active @endif"><svg
						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z">
						</path>
					</svg> <span>Ana Səhifə</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="/about" class="sidebar__nav-link @if(Request::segment(1) == 'about') sidebar__nav-link--active @endif"><svg xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24">
						<path
							d="M16,14H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0-4H10a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-6H17V3a1,1,0,0,0-2,0V4H13V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H4A1,1,0,0,0,3,5V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V5A1,1,0,0,0,20,4ZM19,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V6H7V7A1,1,0,0,0,9,7V6h2V7a1,1,0,0,0,2,0V6h2V7a1,1,0,0,0,2,0V6h2Z" />
					</svg> <span>Haqqımızda</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="/artists" class="sidebar__nav-link @if(Request::segment(1) == 'artists') sidebar__nav-link--active @endif"><svg xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24">
						<path
							d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z" />
					</svg> <span>Artistlər</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="/events" class="sidebar__nav-link @if(Request::segment(1) == 'events') sidebar__nav-link--active @endif"><svg xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24">
						<path
							d="M12,19a1,1,0,1,0-1-1A1,1,0,0,0,12,19Zm5,0a1,1,0,1,0-1-1A1,1,0,0,0,17,19Zm0-4a1,1,0,1,0-1-1A1,1,0,0,0,17,15Zm-5,0a1,1,0,1,0-1-1A1,1,0,0,0,12,15ZM19,3H18V2a1,1,0,0,0-2,0V3H8V2A1,1,0,0,0,6,2V3H5A3,3,0,0,0,2,6V20a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V11H20ZM20,9H4V6A1,1,0,0,1,5,5H6V6A1,1,0,0,0,8,6V5h8V6a1,1,0,0,0,2,0V5h1a1,1,0,0,1,1,1ZM7,15a1,1,0,1,0-1-1A1,1,0,0,0,7,15Zm0,4a1,1,0,1,0-1-1A1,1,0,0,0,7,19Z" />
					</svg> <span>Tədbirlərimiz</span></a>
			</li>

	

			<li class="sidebar__nav-item">
				<a href="/blogs" class="sidebar__nav-link @if(Request::segment(1) == 'blogs') sidebar__nav-link--active @endif"><svg xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24">
						<path
							d="M16,14H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0-4H10a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-6H17V3a1,1,0,0,0-2,0V4H13V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H4A1,1,0,0,0,3,5V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V5A1,1,0,0,0,20,4ZM19,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V6H7V7A1,1,0,0,0,9,7V6h2V7a1,1,0,0,0,2,0V6h2V7a1,1,0,0,0,2,0V6h2Z" />
					</svg> <span>Bloq</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="/contact" class="sidebar__nav-link @if(Request::segment(1) == 'contact') sidebar__nav-link--active @endif"><svg xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24">
						<path
							d="M19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.05,1.05,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1Z">
						</path>
					</svg>
					<span>Əlaqə</span></a>

			</li>
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar -->

	<!-- player -->
	<div class="player">
		<div class="player__cover">
			<img src="{{ $active_song->photo }}" alt="" style="width: 160px; height:160px;">
			
		</div>

		<div class="player__content">
			<span class="player__track"><b class="player__title">{{ $active_song->artist->name }}</b>  <span
				class="player__artist">{{ $active_song->name }}</span></span>
			<audio src="{{ $active_song->mp3 }}" id="audio" controls></audio>
		</div>
	</div>

	<button class="player__btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
			<path
				d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
			</svg> Player</button>
	<!-- end player -->
