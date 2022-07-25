@extends('front.layouts.master')


@section('content')
<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row row--grid">

            <!-- title -->
            <div class="col-12">
                <div class="main__title">
                    <h1>{{ $about->title }}</h1>
                    {!! $about->text !!}
                </div>
            </div>
            <!-- end title -->

            @foreach ($about_details as $d)
            @php
                $index = $loop->index + 1;
                $first = '';
            @endphp

            @if ($index < 10)
                @php
                    $first = 0;
                @endphp
            @endif
            <div class="col-12 col-lg-4">
                <div class="step">
                    <span class="step__number">{{ $first }}{{ $index }}</span>
                    <h3 class="step__title">{{ $d->title }}</h3>
                    <div class="step__text">{!! $d->text !!}</div>
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</main>
<!-- end main content -->

@endsection
