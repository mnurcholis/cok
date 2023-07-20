@extends('web.layouts.app')

@section('content')
    <section class="wrapper bg-dark">
        <div class="swiper-container swiper-hero dots-over swiper-container-0" data-margin="0" data-autoplay="true"
            data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-3d51ba67b353bb4d" aria-live="off"
                    style="cursor: grab; transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide bg-overlay bg-overlay-200 bg-dark bg-image swiper-slide-prev"
                        data-image-src="{{ asset('assets_front/img/photos/bgcctv.jpg') }}" role="group" aria-label="1 / 3"
                        style="background-image: url(&quot;{{ asset('assets_front/img/photos/bgcctv.jpg') }}&quot;); width: 1349px;">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div
                                    class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-8 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                    <h2
                                        class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                        CCTV ONLINE KLATEN</h2>
                                    <p
                                        class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                        We are a creative company that focuses on long term relationships with customers.
                                    </p>
                                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#"
                                            class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/.container -->
                    </div>
                    <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
            <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container py-10 py-md-5">
            <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="rounded"><img class="img-fluid"
                                    src="{{ asset('assets_front/img/avatars/kamera-cctv.png') }}"
                                    srcset="{{ asset('assets_front/img/avatars/kamera-cctv.png') }} 2x" alt="" />
                            </figure>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="rounded"><img class="img-fluid"
                                    src="{{ asset('assets_front/img/avatars/dvr.png') }}"
                                    srcset="{{ asset('assets_front/img/avatars/dvr.png') }} 2x" alt="" /></figure>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="rounded"><img class="img-fluid"
                                    src="{{ asset('assets_front/img/avatars/paketcctv.png') }}"
                                    srcset="{{ asset('assets_front/img/avatars/paketcctv.png') }} 2x" alt="" />
                            </figure>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="position-relative">
                        <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0"
                            style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                        <div class="card">
                            <figure class="rounded"><img class="img-fluid"
                                    src="{{ asset('assets_front/img/avatars/aksesoris.png') }}"
                                    srcset="{{ asset('assets_front/img/avatars/aksesoris.png') }} 2x" alt="" />
                            </figure>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /div -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->

        <div class="overflow-hidden">
            <div class="divider text-soft-primary mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                    <path fill="currentColor"
                        d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z">
                    </path>
                </svg>
            </div>
        </div>
        <!-- /.overflow-hidden -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gradient-primary">
        <div class="container pt-12 pt-lg-8 pb-14 pb-md-4">
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="fs-16 text-uppercase text-primary mb-3">What We Do?</h2>
                    <h3 class="display-3 mb-10 px-xxl-10">Layanan Kami ?</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">
                <div class="col-lg-4">
                    <div class="px-md-15 px-lg-3">
                        <figure class="mb-6"><img class="img-fluid"
                                src="{{ asset('assets_front/img/illustrations/pasang.png') }}"
                                srcset="{{ asset('assets_front/img/illustrations/pasang.png') }} 2x" alt="">
                        </figure>
                        <h3>Pemasangan CCTV</h3>
                    </div>
                    <!--/.px -->
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="px-md-15 px-lg-3">
                        <figure class="mb-6"><img class="img-fluid"
                                src="{{ asset('assets_front/img/illustrations/jual.png') }}"
                                srcset="{{ asset('assets_front/img/illustrations/jual.png') }} 2x" alt="">
                        </figure>
                        <h3>Penjualan CCTV</h3>
                    </div>
                    <!--/.px -->
                </div>
                <!--/column -->
                <div class="col-lg-4">
                    <div class="px-md-15 px-lg-3">
                        <figure class="mb-6"><img class="img-fluid"
                                src="{{ asset('assets_front/img/illustrations/servis.png') }}"
                                srcset="{{ asset('assets_front/img/illustrations/servis.png') }} 2x" alt="">
                        </figure>
                        <h3>Maintenance CCTV</h3>
                    </div>
                    <!--/.px -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-soft-primary mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                    <path fill="currentColor"
                        d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z">
                    </path>
                </svg>
            </div>
        </div>
        <!-- /.overflow-hidden -->
    </section>
    <section class="wrapper bg-gradient-primary">
        <div class="container py-14 py-md-4">
            <div class="row align-items-center mb-10 position-relative zindex-1">
                <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                    <h2 class="display-6">New Arrivals</h2>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!--/column -->
                <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                    <div class="form-select-wrapper">
                        <select class="form-select">
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="newness">Sort by newness</option>
                            <option value="price: low to high">Sort by price: low to high</option>
                            <option value="price: high to low">Sort by price: high to low</option>
                        </select>
                    </div>
                    <!--/.form-select-wrapper -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="grid grid-view projects-masonry shop mb-13">
                <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                    @if ($produk->count() > 0)
                        @foreach ($produk as $item)
                            <div class="project item col-md-6 col-xl-4">
                                <figure class="rounded mb-6">
                                    <img src="{{ url('/') }}{{ Storage::url($item->gambar[0]->path) }}"
                                        srcset=".{{ url('/') }}{{ Storage::url($item->gambar[0]->path) }} 2x"
                                        alt="" />
                                    <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                        Cart</a>
                                </figure>
                                <div class="post-header">
                                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                        <div class="post-category text-ash mb-0">
                                            @if ($item->kategori)
                                                @foreach ($item->kategori as $kategori)
                                                    <span class="badge bg-grape rounded-pill">{{ $kategori->kategori }}
                                                    </span>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <h2 class="post-title h3 fs-22"><a
                                            href="{{ route('shop-product', ['id' => $item->id]) }}"
                                            class="link-dark">{{ $item->nama }}</a></h2>
                                    <p class="price"><ins><span class="amount">Rp.
                                                {{ number_format($item->harga, 0, '.', ',') }}</span></ins></p>
                                </div>
                                <!-- /.post-header -->
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- /.row -->
            </div>
            <!-- /.grid -->
            <nav class="d-flex justify-content-center" aria-label="pagination">
                <ul class="pagination">
                    <!-- Pagination Links -->
                    {{ $produk->links() }}
                </ul>
                <!-- /.pagination -->
            </nav>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section id="portfolio">
        <div class="wrapper bg-gray">
            <div class="container py-15 py-md-8 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 col-xxl-7 mx-auto mb-8">
                        <h2 class="display-5 mb-3">Galeri</h2>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-6 gy-6 isotope">
                        @foreach ($galeri as $g)
                            <div class="project item col-md-6 col-xl-4 drinks events">
                                <figure class="overlay overlay-1"><a
                                        href="{{ url('/') }}{{ Storage::url($g->path) }}" data-glightbox
                                        data-gallery="shots-group"> <img
                                            src="{{ url('/') }}{{ Storage::url($g->path) }}" alt="{{ $g->name }}" /></a>
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
@push('style-css')
    <style>
        .item-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .item-container {
            width: 100%;
            height: 280px;
            /* Ubah tinggi kotak wadah sesuai kebutuhan Anda */
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endpush
