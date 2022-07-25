@extends('front.layouts.master')

@section('content')
<!-- main content -->
<main class="main">
	<div class="container-fluid">
		<!-- artists -->
		<div class="row row--grid">

			<!-- title -->
			<div class="col-12">
				<div class="main__title main__title--page">
					<h1>Artistlər</h1>
				</div>
			</div>
			<!-- end title -->
		</div>

		<div class="row row--grid">
			<div class="col-12">
				

				<div class="row row--grid">
					@foreach ($artists as $a)
					<div class="col-6 col-sm-4 col-md-3 col-xl-2">
						<a href="artist/{{ $a->slug }}" class="artist">
							<div class="artist__cover">
								<img src="{{ $a->photo }}" alt="" style="width: 200px; height:160px;">
							</div>
							<h3 class="artist__title">{{ $a->name }}</h3>
						</a>
					</div>
					@endforeach
					


				</div>


			</div>
		</div>
		<!-- end artists -->

		<!-- events -->

		<!-- end events -->
	</div>
</main>
<!-- end main content -->

@endsection

