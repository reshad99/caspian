<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>BTF CMS</title>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="description" content="BTF Agency, Wibty" />
		<meta name="keywords" content="BTF Agency, Wibty" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="{{ Request::url() }}" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="/" />
		<link rel="shortcut icon" href="{{ $about->light_logo }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

		<!-- CSS Alertify -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<!-- Default theme -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
		<!-- Semantic UI theme -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
		<!-- CSS Alertify -->

		<!--Begin::Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!--End::Google Tag Manager -->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--Begin::Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!--End::Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-grow-1 flex-stack">
							<!--begin::Header Logo-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Heaeder menu toggle-->
								<div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Heaeder menu toggle-->
								<!--begin::Logo-->
								<a href="/admin">
									<img alt="Logo" src="{{ $about->light_logo }}" class="h-25px h-lg-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Header Logo-->
							<!--begin::Toolbar wrapper-->
							<div class="topbar d-flex align-items-stretch flex-shrink-0" id="kt_topbar">
								<!--begin::User-->
								<div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="/assets/media/avatars/300-1.jpg" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="/assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }} 
													<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
													<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="/admin/logout" class="menu-link px-5">Çıxış</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User -->
								<!--begin::Heaeder menu toggle-->
								<!--end::Heaeder menu toggle-->
							</div>
							<!--end::Toolbar wrapper-->
						</div>
						<!--end::Container-->
						<!--begin::Container-->
						<div class="header-menu-container d-flex align-items-stretch flex-stack h-lg-75px w-100" id="kt_header_nav">
							<!--begin::Menu wrapper-->
							<div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
								<!--begin::Menu-->
								<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
									<div data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'dashboard') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<a href="/admin/dashboard">
											<span class="menu-title">Dashboard</span>
											<span class="menu-arrow d-lg-none"></span>
										    </a>
										</span>
									</div>
									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'artists') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Artistlər</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/artists">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Artistlərin siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/artists/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Artist əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'videos') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Kliplər</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/videos">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Kliplərin siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/videos/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Klip əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'songs') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Mahnılar</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/songs">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Mahnıların siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/songs/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Mahnı əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'reservations') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Rezervasiyalar</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/reservations">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Rezervasiyaların siyahısı</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'events') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Tədbirlərimiz</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/events">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tədbirlərin siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/events/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tədbir əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'blogs') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Bloqlar</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/blogs">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Bloqların siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/blogs/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Bloq əlavə et</span>
												</a>
											</div>

											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/categories">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Kateqoriyaların siyahısı</span>
												</a>
											</div>

											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/categories/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Kateqoriya əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'partners') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Partnyorlar</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/partners">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Partnyorların siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/partners/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Partnyor əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'sliders') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Slayderlər</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/sliders">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Slayderlərin siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/sliders/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Slayder əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'about-details') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Haqqımızda detaylar</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/about-details">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Detayların siyahısı</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/about-details/create">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Detay əlavə et</span>
												</a>
											</div>

										</div>
									</div>

									<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item @if(Request::segment(2) == 'about' || Request::segment(2) == 'privacy') here show @endif menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3">
											<span class="menu-title">Məlumat</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/about" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
														<span class="svg-icon svg-icon-2">
														<i class="fonticon-settings fs-2x"></i>
														</span>
														<!--end::Svg Icon-->
													</span>
													<span class="menu-title">Haqqımızda və əlaqə</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link py-3" href="/admin/privacy/edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
																<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<span class="menu-title">Gizlilik Siyasəti</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->