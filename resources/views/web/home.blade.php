@extends('web.layouts.app')

@section('content')
    <section class="wrapper bg-gray">
        <div class="container py-12 py-md-16 text-center">
            <div class="row">
                <div class="col-lg-10 col-xxl-8 mx-auto">
                    <h1 class="display-1 mb-3">Shop Layout</h1>
                    <p class="lead mb-1">Integer posuere erat a ante venenatis dapibus.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
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
                                <figure class="rounded mb-6 item-image">
                                    <div class="item-container">
                                        <img src="{{ url('/') }}{{ Storage::url($item->gambar[0]->path) }}"
                                            srcset="{{ url('/') }}{{ Storage::url($item->gambar[0]->path) }} 2x"
                                            alt="" />
                                    </div>
                                    <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Tambahkan Ke
                                        Kranjang</a>
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
                                    <h2 class="post-title h3 fs-22"><a href="./shop-product"
                                            class="link-dark">{{ $item->nama }}</a></h2>
                                    <p class="price">
                                        <ins>
                                            <span class="amount">
                                                Rp. {{ number_format($item->harga, 0, '.', ',') }}
                                            </span>
                                        </ins>
                                    </p>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.item -->
                        @endforeach
                    @endif
                </div>
                <!-- /.row -->
            </div>
            <!-- /.grid -->
            <nav class="d-flex justify-content-center" aria-label="pagination">
                <ul class="pagination">
                    <!-- Previous Page Link -->
                    <li class="page-item {{ $produk->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $produk->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                        </a>
                    </li>

                    <!-- Pagination Links -->
                    {{ $produk->links() }}

                    <!-- Next Page Link -->
                    <li class="page-item {{ !$produk->hasMorePages() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $produk->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
                <!-- /.pagination -->
            </nav>

            {{-- <nav class="d-flex justify-content-center" aria-label="pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
                <!-- /.pagination -->
            </nav> --}}
            <!-- /nav -->
        </div>
        <!-- /.container -->
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
