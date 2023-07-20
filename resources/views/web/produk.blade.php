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
            <div class="container py-15 py-md-8">
                <div class="grid grid-view projects-masonry">
                    <div class="row gx-md-6 gy-6 isotope">
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
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /section -->
@endsection
