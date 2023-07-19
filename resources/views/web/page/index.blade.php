@extends('web.layouts.app')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white"
        data-image-src="{{ asset('assets_front/img/photos/bg37.jpg') }}"
        style="background-image: url(&quot;{{ asset('assets_front/img/photos/bg37.jpg') }}&quot;);">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">Our Services</h1>
                    <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10">We are a creative company that focuses on
                        establishing long-term relationships with customers.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-8 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <h1 class="display-1 mb-4">Commodo Dolor Bibendum Parturient Cursus Mollis</h1>
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="blog single mt-n19">
                        <div class="card">
                            <figure class="card-img-top"><img src="{{ asset('assets_front/img/photos/b8-full.jpg') }}"
                                    alt=""></figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">

                                    </article>
                                    <!-- /.post -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
