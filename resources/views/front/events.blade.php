@extends('front.layouts.master')

@section('content')
@php
use App\Http\Controllers\Controller;
@endphp

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">


				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Tədbirlər</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
					<div class="row row--grid">
						@foreach ($events as $e)
						
						<div class="col-12 col-md-6 col-xl-4">
							<div class="event" data-bg="{{ $e->photo }}">
								<span class="event__date">{{ Controller::get_month_name($e->date) }}</span>
								<span class="event__time">{{ $e->time }}</span>
								<h3 class="event__title"><a href="event/{{ $e->slug }}">{{ $e->title }}</a></h3>
								<p class="event__address">{{ $e->location }}</p>
							</div>
						</div>
						@endforeach
						

					</div>

				</div>
			</div>

			<!-- partners -->
			<div class="row">
				<div class="col-12">
					<div class="partners owl-carousel">
						<a href="#" class="partners__img">
							<img src="img/partners/3docean-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/activeden-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/audiojungle-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/codecanyon-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/photodune-light-background.png" alt="">
						</a>

						<a href="#" class="partners__img">
							<img src="img/partners/themeforest-light-background.png" alt="">
						</a>
					</div>
				</div>
			</div>
			<!-- end partners -->
		</div>
	</main>
	<!-- end main content -->

@endsection

