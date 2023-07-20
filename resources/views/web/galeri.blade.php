@extends('web.layouts.app')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white"
        data-image-src="{{ asset('assets_front/img/photos/bgcctv.jpg') }}"
        style="background-image: url(&quot;{{ asset('assets_front/img/photos/bgcctv.jpg') }}&quot;);">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">{{ $page_title }}</h1>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section id="portfolio">
        <div class="wrapper bg-gray">
            <div class="container py-15 py-md-8 text-center">
                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-6 gy-6 isotope">
                        @foreach ($galeri as $g)
                            <div class="project item col-md-6 col-xl-4 drinks events">
                                <figure class="overlay overlay-1"><a href="{{ url('/') }}{{ Storage::url($g->path) }}"
                                        data-glightbox data-gallery="shots-group"> <img
                                            src="{{ url('/') }}{{ Storage::url($g->path) }}"
                                            alt="{{ $g->name }}" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">{{ $g->name }}</h5>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.grid -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /section -->
@endsection
