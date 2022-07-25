@extends('front.layouts.master')



@section('content')

	<!-- main content -->

	<main class="main">

		<div class="container-fluid">

			<div class="row row--grid">

				<div class="col-12">

					<div class="article article--page">

						<!-- article content -->

						<div class="article__content">

							<div class="article__artist">

								<img src="{{ $artist->photo }}" alt="">

								<div>

									<h1>{{ $artist->name }}</h1>
									<div class="hero__btns-2">
										<a href="#reservation" class="hero__btn hero__btn--green open-modal">Rezervasiya</a>
									</div>

									
								</div>
								
							</div>
							
						</div>
						
						<!-- end article content -->
						
						<div style="color: #fff;">{!! $artist->text1 !!}</div>


						<!-- share -->

						<div class="share">

							<a href="{{ $artist->instagram }}" class="share__link share__link--insta">

								<svg width="15" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>

								Instagram</a>

							<a href="{{ $artist->tiktok }}" class="share__link share__link--tiktok">

								<svg width="16" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>

								Tiktok</a>

							<a href="{{ $artist->youtube }}" class="share__link share__link--yt">

								<svg width="20" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>

								Youtube</a>

						</div>

						<!-- end share -->

					</div>

				</div>

			</div>



			<!-- music videos -->

			<section class="row row--grid">

				<!-- title -->

				<div class="col-12">

					<div class="main__title">

						<h2>Kliplər</h2>

					</div>

				</div>

				<!-- end title -->



				<div class="col-12">

					<div class="main__carousel-wrap">

						<div class="main__carousel main__carousel--podcasts owl-carousel" id="podcasts">

							@foreach ($artist->videos as $v)

							<div class="live">

								<a href="{{ $v->link }}" class="live__cover open-video">

									<iframe width="560" height="315" src="{{ $v->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

									{{-- <span class="live__value">6.5K viewers</span> --}}

								</a>

								<h3 class="live__title"><a href="{{ $v->link }}" class="open-video">{{ $artist->name }} - {{ $v->name }}</a></h3>

							</div>

							@endforeach

							



						</div>



						<button class="main__nav main__nav--prev" data-nav="#podcasts" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>

						<button class="main__nav main__nav--next" data-nav="#podcasts" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>

					</div>

				</div>

			</section>

			<!-- end music videos -->



		</div>

	</main>

	<!-- end main content -->

	<form action="javascript:void(0)" id="reservation" method="POST" class="zoom-anim-dialog modal modal--form mfp-hide">
		<button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button>

		<h4 class="sign__title">Rezervasiya</h4>
		<span class="sign__text sign__text--small">İfaçını səhnəyə dəvət etmək üçün aşağıdakı bölmələri doldurun</span>
		<br>

		<div class="sign__group sign__group--row">
			<label class="sign__label" for="value">Ad və Soyad:</label>
			<input type="text" name="name" id="name" class="sign__input" placeholder="Ad və Soyad" >
		</div>
		<div class="sign__group sign__group--row">
			<label class="sign__label" for="value">Telefon:</label>
			<input type="number" name="phone" id="phone" class="sign__input" placeholder="Telefon" >
		</div>
		<div class="sign__group sign__group--row">
			<label class="sign__label" for="value">Email:</label>
			<input type="email" name="email" id="email" class="sign__input" placeholder="Email" >
		</div>

		<button class="sign__btn" type="submit"><span class="button_text">Göndər</span><img src="/images/spinner2.gif" class="spinner" style="width: 10%; display:none" alt=""></button>
	</form>
@endsection



