@extends('front.layouts.master')

@section('content')

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Bloq</h1>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12">
					<ul class="nav nav-tabs main__tabs" id="main__tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><span>#</span>Hamısı</a>
						</li>

						@foreach ($blog_categories as $b)
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-{{ $loop->index + 2 }}" role="tab" aria-controls="tab-{{ $loop->index + 2 }}" aria-selected="false"><span>#</span>{{ $b->name }}</a>
						</li>
						@endforeach

						

				
					</ul>
				</div>
			</div>

			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
					<div class="row row--grid">

						@foreach ($blogs as $blog)
							<!-- post -->
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="post">
								<a href="blog/{{ $blog->slug }}" class="post__img">
									<img src="{{ $blog->photo }}" alt="">
								</a>

								<div class="post__content">
									<a href="#" class="post__category">{{ $blog->category->name }}</a>
									<h3 class="post__title"><a href="blog/{{ $blog->slug }}">{{ $blog->title }}</a></h3>
									<div class="post__meta">
										<span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z"/></svg> {{ $blog->created_at->diffForHumans() }}</span>
										<span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"/></svg> {{ $blog->view }}</span>
									</div>
								</div>
							</div>
						</div>
						<!-- end post -->
						@endforeach
						

					</div>

				</div>

				@foreach ($blog_categories as $b)
				<div class="tab-pane fade" id="tab-{{ $loop->index + 2 }}" role="tabpanel">
					<div class="row row--grid">
						@foreach ($b->blogs as $blog)
							<!-- post -->
						<div class="col-12 col-sm-6 col-lg-4">
							<div class="post">
								<a href="blog/{{ $blog->slug }}" class="post__img">
									<img src="{{ $blog->photo }}" alt="">
								</a>

								<div class="post__content">
									<h3 class="post__title"><a href="blog/{{ $blog->slug }}">{{ $blog->title }}</a></h3>
									<div class="post__meta">
										<span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z"/></svg> {{ $blog->created_at->diffForHumans() }}</span>
										<span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"/></svg> {{ $blog->view }}</span>
									</div>
								</div>
							</div>
						</div>
						<!-- end post -->
						@endforeach
						
					</div>
				</div>
				@endforeach
				

			</div>
		</div>
	</main>
	<!-- end main content -->
    
@endsection