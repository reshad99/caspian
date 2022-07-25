<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme 
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Caspian Music</title>
		<meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="../../../../demo1/index.html" />
		<link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!--Begin::Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!--End::Google Tag Manager -->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--Begin::Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!--End::Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo16/assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="../../../index.html" class="mb-12">
						<img alt="Logo" src="{{ $about->dark_logo }}" class="h-40px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="login-form" action="javascript:void(0)">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Caspian Music'ə daxil ol</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<!-- <div class="text-gray-400 fw-bold fs-4">New Here? 
								<a href="sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> -->
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" id="email" name="email" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<!--end::Label-->
									<!--begin::Link-->
									{{-- <a href="password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> --}}
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label login">Daxil ol</span>
									<span class="indicator-progress">Zəhmət olmasa gözləyin... 
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
								<!-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div> -->
								<!--end::Separator-->
								<!--begin::Google link-->
								<!-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a> -->
								<!--end::Google link-->
								<!--begin::Google link-->
								<!-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a> -->
								<!--end::Google link-->
								<!--begin::Google link-->
								<!-- <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="/assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a> -->
								<!--end::Google link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="/about" class="text-muted text-hover-primary px-2">About</a>
						<a href="/contact" class="text-muted text-hover-primary px-2">Contact</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "/metronic8/demo16/assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="/assets/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Page Custom Javascript-->
    <script>
      $('#kt_sign_in_submit').click(function(){
    let form = $('#login-form').serialize();

    $.ajax({
      url: '/admin/login-try',
      type: 'POST',
      data: form,
      dataType: 'json',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      beforeSend: function(){
        $('.indicator-label').css('display', 'none')
        $('.indicator-progress').css('display', 'block')
        $('#kt_sign_in_submit').css('opacity', '.4')
      },
      success: function(data){
        $('.login').html('Daxil ol')
        console.log(data)
        if(data.status == 1)
        {
			Swal.fire({
				text: data.message,
				icon: "success",
				buttonsStyling: !1,
				confirmButtonText: "Giriş!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
			}).then((function () {
				window.location.replace('/admin/dashboard');
			}));
            
        }

        if(data.status == 0)
        {
          Swal.fire({
                        text: "Giriş uğursuz oldu, yenidən cəhd et",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Cəhd et",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
        }

        $('.indicator-label').css('display', 'block')
        $('.indicator-progress').css('display', 'none')
        $('#kt_sign_in_submit').css('opacity', '')


      },
      error: function(data){
        $('.login').html('Daxil ol')
        console.log(data)
        $.each(data.responseJSON.errors, function(_key, e){
          $('#'+_key).css('border-color', 'red')
          $('#'+_key).closest('div').find('.input-group-text').css('border-color', 'red');
          $('#'+_key).val('')
          $('#'+_key).attr('placeholder', e[0])
          $('body').append('<style>#'+_key+'::placeholder{color:red}</style>')

        });
        $('.indicator-label').css('display', 'block')
        $('.indicator-progress').css('display', 'none')
        $('#kt_sign_in_submit').css('opacity', '')
      }
    })
  })

  $('input').keyup(function(){
    val = $(this).val();
    if(!val)
    {
        $(this).css('border-color', 'red')
        $(this).closest('div').find('.input-group-text').css('border-color', 'red');
    }

    else
    {
        $(this).css('border-color', '')
        $(this).closest('div').find('.input-group-text').css('border-color', '');
    }


  })
    </script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>