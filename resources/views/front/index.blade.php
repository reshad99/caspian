@extends('front.layouts.master')

@section('content')
@php
use App\Http\Controllers\Controller;
@endphp
    	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<!-- slider -->
			<section class="row">
				<div class="col-12">
					<div class="hero owl-carousel" id="hero">
						@foreach ($sliders as $s)
						<div class="hero__slide" data-bg="{{ $s->image }}">
							<h1 class="hero__title">{{ $s->title }}</h1>
							<div class="hero__text">{{ $s->text }}</div>
							<div class="hero__btns">
								<a href="{{ $s->link }}" class="hero__btn">Daha çox</a>
							</div>
						</div>
						@endforeach
						
					</div>
					
					<button class="main__nav main__nav--hero main__nav--prev" data-nav="#hero" type="button"><svg
							xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path
								d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
							</svg></button>
						<button class="main__nav main__nav--hero main__nav--next" data-nav="#hero" type="button"><svg
							xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path
								d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></button>
				</div>
			</section>
			<!-- end slider -->
			<!-- articts -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Artistlər</h2>
		
						<a href="artists.html" class="main__link">Hamısı <svg xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 24 24">
								<path
									d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
							</svg></a>
					</div>
				</div>
				<!-- end title -->
		
				<div class="col-12">
					<div class="main__carousel-wrap">
						<div class="main__carousel main__carousel--artists owl-carousel" id="artists">
							@foreach ($artists as $a)
							<a href="/artist/{{ $a->slug }}" class="artist">
								<div class="artist__cover">
									<img src="{{ $a->photo }}" alt="">
								</div>
								<h3 class="artist__title">{{ $a->name }}</h3>
							</a>
							@endforeach
							
		
						</div>
		
						<button class="main__nav main__nav--prev" data-nav="#artists" type="button"><svg
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
							</svg></button>
						<button class="main__nav main__nav--next" data-nav="#artists" type="button"><svg
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
							</svg></button>
					</div>
				</div>
			</section>
			<!-- end articts -->
	

			<!-- events -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Yaxınlaşan tədbirlər</h2>

						<a href="/events" class="main__link">Hamısı <svg xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 24 24">
								<path
									d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
							</svg></a>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12">
					<div class="main__carousel-wrap">
						<div class="main__carousel main__carousel--events owl-carousel" id="events">
							@foreach ($events as $e)
							<div class="event" data-bg="{{ $e->photo }}">
								<span class="event__date">{{ Controller::get_month_name($e->date) }}</span>
								<span class="event__time">{{ $e->time }}</span>
								<h3 class="event__title"><a href="event/{{ $e->slug }}">{{ $e->title }}</a></h3>
								<p class="event__address">{{ $e->location_name }}</p>
							</div>
							@endforeach
							
						</div>

						<button class="main__nav main__nav--prev" data-nav="#events" type="button"><svg
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
							</svg></button>
						<button class="main__nav main__nav--next" data-nav="#events" type="button"><svg
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
							</svg></button>
					</div>
				</div>
			</section>
			<!-- end events -->


			<section class="row row--grid">
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row row--grid">
						<!-- title -->
						<div class="col-12">
							<div class="main__title">
								<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path
											d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
									</svg><a href="#">Top Mahnılar</a></h2>
							</div>
						</div>
						<!-- end title -->

						<div class="col-12">
							<ul class="main__list">
								@foreach ($top_songs as $s)
								<li class="single-item">
									<span class="single-item__number">{{ $loop->index + 1 }}</span>
									
									<a data-link data-title="{{ $s->artist->name }}" data-artist="{{ $s->name }}"
										data-img="{{ $s->photo }}"
										href="{{ $s->mp3 }}"
										class="single-item__cover">
										<img src="{{ $s->photo }}" alt="" style="width: 50px; height:50px;">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path
												d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path
												d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
										</svg>
									</a>
									<div class="single-item__title">
										<h4><a href="/artist/{{ $s->artist->slug }}">{{ $s->artist->name }}</a></h4>
										<span><a href="artist/{{ $s->artist->slug }}">{{ $s->name }}</a></span>
									</div>
									<span class="single-item__time">{{ $s->duration }}</span>
								</li>
								@endforeach
								
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-xl-4">
					<div class="row row--grid">
						<!-- title -->
						<div class="col-12">
							<div class="main__title">
								<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path
											d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z" />
									</svg><a href="#">Yeni Mahnılar</a></h2>
							</div>
						</div>
						<!-- end title -->

						<div class="col-12">
							<ul class="main__list">
								@foreach ($songs as $s)
								<li class="single-item">									
									<a data-link data-title="{{ $s->artist->name }}" data-artist="{{ $s->name }}"
										data-img="{{ $s->photo }}"
										href="{{ $s->mp3 }}"
										class="single-item__cover">
										<img src="{{ $s->photo }}" alt="" style="width: 50px; height:50px;">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path
												d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path
												d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
										</svg>
									</a>
									<div class="single-item__title">
										<h4><a href="/artist/{{ $s->artist->slug }}">{{ $s->artist->name }}</a></h4>
										<span><a href="artist/{{ $s->artist->slug }}">{{ $s->name }}</a></span>
									</div>
									<span class="single-item__time">{{ $s->duration }}</span>
								</li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>

	
			</section>

			<!-- partners -->
			<div class="row">
				<div class="col-12">
					<div class="partners owl-carousel">

						@foreach ($partners as $p)
						<a href="{{ $p->link }}" class="partners__img">
							<img src="{{ $p->logo }}" alt="">
						</a>
						@endforeach
						

					</div>
				</div>
			</div>
			<!-- end partners -->
		</div>
	</main>
	<!-- end main content -->
@endsection


	