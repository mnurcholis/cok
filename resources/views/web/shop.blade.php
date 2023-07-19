@extends('web.layouts.app')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay text-white"
        data-image-src="{{ asset('assets_front/img/photos/bgcctv.jpg') }}"
        style="background-image: url(&quot;{{ asset('assets_front/img/photos/bg37.jpg') }}&quot;);">
        <div class="container pt-19 pt-md-21 pb-18 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 text-white mb-3">{{ $data->nama }}</h1>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper  bg-gradient-primary">
        <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-8">
                <div class="col-lg-6">
                    <div class="swiper-container swiper-thumbs-container swiper-container-0" data-margin="10"
                        data-dots="false" data-nav="true" data-thumbs="true">
                        <div class="swiper-main">
                            <div
                                class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-b83d165adaf57451" aria-live="off"
                                    style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                                    @foreach ($data->gambar as $gambar1)
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4"
                                            style="width: 520px; margin-right: 10px;">
                                            <figure class="rounded"><img
                                                    src="{{ url('/') }}{{ Storage::url($gambar1->path) }}"
                                                    srcset="{{ url('/') }}{{ Storage::url($gambar1->path) }} 2x"
                                                    alt=""><a class="item-link"
                                                    href="{{ url('/') }}{{ Storage::url($gambar1->path) }}"
                                                    data-glightbox="" data-gallery="product-group"><i
                                                        class="uil uil-focus-add"></i></a></figure>
                                        </div>
                                        <!--/.swiper-slide -->
                                    @endforeach

                                </div>
                                <!--/.swiper-wrapper -->
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                        <!-- /.swiper -->
                        <div
                            class="swiper swiper-thumbs swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-273292a501113c21" aria-live="polite"
                                style="transform: translate3d(0px, 0px, 0px);">
                                @foreach ($data->gambar as $gambar1)
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                        role="group" aria-label="1 / 4" style="width: 96px; margin-right: 10px;"><img
                                            src="{{ url('/') }}{{ Storage::url($gambar1->path) }}"
                                            srcset="{{ url('/') }}{{ Storage::url($gambar1->path) }} 2x"
                                            class="rounded" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <!--/.swiper-wrapper -->
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /column -->
                <div class="col-lg-6">
                    <div class="post-header mb-5">
                        <h2 class="post-title display-5">Detail Produk : </h2>
                        <p class="price fs-20 mb-2"><span class="amount">Rp.
                                {{ number_format($data->harga, 0, '.', ',') }}</span></p>
                    </div>
                    <!-- /.post-header -->
                    <p class="mb-6">{!! nl2br(e($data->description)) !!}</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-9 d-flex flex-row pt-2">
                                <div>
                                    <div class="form-select-wrapper">
                                        <select class="form-select">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                                <div class="flex-grow-1 mx-2">
                                    <button class="btn btn-primary btn-icon btn-icon-start rounded w-100 flex-grow-1"><i
                                            class="uil uil-shopping-bag"></i> Add to Cart</button>
                                </div>
                                <div>
                                    <button class="btn btn-block btn-red btn-icon rounded px-3 w-100 h-100"><i
                                            class="uil uil-heart"></i></button>
                                </div>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-gray">
        <div class="container py-14 py-md-16">
            <h3 class="h2 mb-6 text-center">Mungkin Kamu Suka.</h3>
            <div class="swiper-container blog grid-view shop mb-6 swiper-container-1" data-margin="30" data-dots="true"
                data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-a67b10b9078bc4c9a" aria-live="off"
                        style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                        @foreach ($produk as $pro)
                            <div class="swiper-slide project item swiper-slide-active" role="group" aria-label="1 / 5"
                                style="width: 350px; margin-right: 30px;">
                                <figure class="rounded mb-6">
                                    <img src="{{ url('/') }}{{ Storage::url($pro->gambar[0]->path) }}"
                                        srcset="{{ url('/') }}{{ Storage::url($pro->gambar[0]->path) }} 2x"
                                        alt="">
                                    <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to
                                        Cart</a>
                                </figure>
                                <div class="post-header">
                                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                        <div class="post-category text-ash mb-0">
                                            @if ($pro->kategori)
                                                @foreach ($pro->kategori as $kategori)
                                                    <span class="badge bg-grape rounded-pill">{{ $kategori->kategori }}
                                                    </span>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <h2 class="post-title h3 fs-22"><a
                                            href="{{ route('shop-product', ['id' => $pro->id]) }}"
                                            class="link-dark">{{ $pro->nama }}</a></h2>
                                    <p class="price"><ins><span class="amount">Rp.
                                                {{ number_format($pro->harga, 0, '.', ',') }}</span></ins></p>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!--/.swiper-slide -->
                        @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <!-- /.swiper -->
                <div class="swiper-controls">
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 3"></span>
                    </div>
                </div>
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
@endsection
