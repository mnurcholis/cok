@extends('web.layouts.app')

@section('content')
    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item"><a href="#">Cosmetics</a></li>
                    <li class="breadcrumb-item active text-muted" aria-current="page">Cleansers</li>
                </ol>
            </nav>
            <!-- /nav -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
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
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4"
                                        style="width: 520px; margin-right: 10px;">
                                        <figure class="rounded"><img src="./assets/img/photos/shs1.jpg"
                                                srcset="./assets/img/photos/shs1@2x.jpg 2x" alt=""><a
                                                class="item-link" href="./assets/img/photos/shs1@2x.jpg" data-glightbox=""
                                                data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                    </div>
                                    <!--/.swiper-slide -->
                                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4"
                                        style="width: 520px; margin-right: 10px;">
                                        <figure class="rounded"><img src="./assets/img/photos/shs2.jpg"
                                                srcset="./assets/img/photos/shs2@2x.jpg 2x" alt=""><a
                                                class="item-link" href="./assets/img/photos/shs2@2x.jpg" data-glightbox=""
                                                data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                    </div>
                                    <!--/.swiper-slide -->
                                    <div class="swiper-slide" role="group" aria-label="3 / 4"
                                        style="width: 520px; margin-right: 10px;">
                                        <figure class="rounded"><img src="./assets/img/photos/shs3.jpg"
                                                srcset="./assets/img/photos/shs3@2x.jpg 2x" alt=""><a
                                                class="item-link" href="./assets/img/photos/shs3@2x.jpg" data-glightbox=""
                                                data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                    </div>
                                    <!--/.swiper-slide -->
                                    <div class="swiper-slide" role="group" aria-label="4 / 4"
                                        style="width: 520px; margin-right: 10px;">
                                        <figure class="rounded"><img src="./assets/img/photos/shs4.jpg"
                                                srcset="./assets/img/photos/shs4@2x.jpg 2x" alt=""><a
                                                class="item-link" href="./assets/img/photos/shs4@2x.jpg" data-glightbox=""
                                                data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure>
                                    </div>
                                    <!--/.swiper-slide -->
                                </div>
                                <!--/.swiper-wrapper -->
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div class="swiper-controls">
                                <div class="swiper-navigation">
                                    <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1"
                                        role="button" aria-label="Previous slide"
                                        aria-controls="swiper-wrapper-b83d165adaf57451" aria-disabled="true"></div>
                                    <div class="swiper-button swiper-button-next" tabindex="0" role="button"
                                        aria-label="Next slide" aria-controls="swiper-wrapper-b83d165adaf57451"
                                        aria-disabled="false"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.swiper -->
                        <div
                            class="swiper swiper-thumbs swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-273292a501113c21" aria-live="polite"
                                style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                    role="group" aria-label="1 / 4" style="width: 96px; margin-right: 10px;"><img
                                        src="./assets/img/photos/shs1-th.jpg"
                                        srcset="./assets/img/photos/shs1-th@2x.jpg 2x" class="rounded" alt="">
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group"
                                    aria-label="2 / 4" style="width: 96px; margin-right: 10px;"><img
                                        src="./assets/img/photos/shs2-th.jpg"
                                        srcset="./assets/img/photos/shs2-th@2x.jpg 2x" class="rounded" alt="">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 4"
                                    style="width: 96px; margin-right: 10px;"><img src="./assets/img/photos/shs3-th.jpg"
                                        srcset="./assets/img/photos/shs3-th@2x.jpg 2x" class="rounded" alt="">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" role="group" aria-label="4 / 4"
                                    style="width: 96px; margin-right: 10px;"><img src="./assets/img/photos/shs4-th.jpg"
                                        srcset="./assets/img/photos/shs4-th@2x.jpg 2x" class="rounded" alt="">
                                </div>
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
                        <h2 class="post-title display-5"><a href="./shop-product.html" class="link-dark">Curology
                                Skincare Set</a></h2>
                        <p class="price fs-20 mb-2"><span class="amount">$55.00</span></p>
                        <a href="#" class="link-body ratings-wrapper"><span class="ratings four"></span><span>(3
                                Reviews)</span></a>
                    </div>
                    <!-- /.post-header -->
                    <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus.
                        Duis mollis, est non commodo luctus. Nulla vitae elit libero pharetra augue. Donec id elit non mi
                        porta gravida at eget metus.</p>
                    <form>
                        <fieldset class="picker">
                            <legend class="h6 fs-16 text-body mb-3">Choose a size</legend>
                            <label for="size-xs">
                                <input type="radio" name="sizes" id="size-xs" checked="">
                                <span>XS</span>
                            </label>
                            <label for="size-s">
                                <input type="radio" name="sizes" id="size-s">
                                <span>S</span>
                            </label>
                            <label for="size-m">
                                <input type="radio" name="sizes" id="size-m">
                                <span>M</span>
                            </label>
                            <label for="size-l">
                                <input type="radio" name="sizes" id="size-l">
                                <span>L</span>
                            </label>
                            <label for="size-xl">
                                <input type="radio" name="sizes" id="size-xl">
                                <span>XL</span>
                            </label>
                        </fieldset>
                        <fieldset class="picker">
                            <legend class="h6 fs-16 text-body mb-3">Choose a color</legend>
                            <label for="color-1" style="--color:#fab758">
                                <input type="radio" name="colors" id="color-1" checked="">
                                <span>Yellow</span>
                            </label>
                            <label for="color-2" style="--color:#e2626b">
                                <input type="radio" name="colors" id="color-2">
                                <span>Red</span>
                            </label>
                            <label for="color-3" style="--color:#7cb798">
                                <input type="radio" name="colors" id="color-3">
                                <span>Green</span>
                            </label>
                            <label for="color-4" style="--color:#3f78e0">
                                <input type="radio" name="colors" id="color-4">
                                <span>Blue</span>
                            </label>
                            <label for="color-5" style="--color:#a07cc5">
                                <input type="radio" name="colors" id="color-5">
                                <span>Purple</span>
                            </label>
                        </fieldset>
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
            <ul class="nav nav-tabs nav-tabs-basic mt-12" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1" aria-selected="true"
                        role="tab">Product Details</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab1-2" aria-selected="false" tabindex="-1"
                        role="tab">Additional Info</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab1-3" aria-selected="false" tabindex="-1"
                        role="tab">Delivery</a>
                </li>
            </ul>
            <!-- /.nav-tabs -->
            <div class="tab-content mt-0 mt-md-5">
                <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                        venenatis vestibulum. Sed posuere consectetur est at lobortis. Sed posuere consectetur est at
                        lobortis. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem
                        lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas
                        sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus
                        posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula
                        porta felis euismod semper.</p>
                    <p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id
                        elit. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab1-2" role="tabpanel">
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue
                        laoreet rutrum faucibus dolor auctor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.</p>
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab1-3" role="tabpanel">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                        amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis
                        consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non
                        magna. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Aenean lacinia
                        bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac
                        consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                        et.</p>
                </div>
                <!--/.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-gray">
        <div class="container py-14 py-md-16">
            <h3 class="h2 mb-6 text-center">You Might Also Like</h3>
            <div class="swiper-container blog grid-view shop mb-6 swiper-container-1" data-margin="30" data-dots="true"
                data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-a67b10b9078bc4c9a" aria-live="off"
                        style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide project item swiper-slide-active" role="group" aria-label="1 / 5"
                            style="width: 350px; margin-right: 30px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/sh1.jpg" srcset="./assets/img/photos/sh1@2x.jpg 2x"
                                    alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i
                                        class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Quick view" data-bs-original-title="Quick view"><i
                                        class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13"
                                    style="top: 1rem; left: 1rem;"><span>Sale!</span></span>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Shoes</div>
                                    <span class="ratings five"></span>
                                </div>
                                <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Nike Air
                                        Sneakers</a></h2>
                                <p class="price"><del><span class="amount">$55.00</span></del> <ins><span
                                            class="amount">$45.00</span></ins></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide project item swiper-slide-next" role="group" aria-label="2 / 5"
                            style="width: 350px; margin-right: 30px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/sh2.jpg" srcset="./assets/img/photos/sh2@2x.jpg 2x"
                                    alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i
                                        class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Quick view" data-bs-original-title="Quick view"><i
                                        class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Electronics</div>
                                    <span class="ratings four"></span>
                                </div>
                                <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Apple
                                        Watch</a></h2>
                                <p class="price"><span class="amount">$55.00</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide project item" role="group" aria-label="3 / 5"
                            style="width: 350px; margin-right: 30px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/sh3.jpg" srcset="./assets/img/photos/sh3@2x.jpg 2x"
                                    alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i
                                        class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Quick view" data-bs-original-title="Quick view"><i
                                        class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                                <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13"
                                    style="top: 1rem; left: 1rem;"><span>New!</span></span>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Electronics</div>
                                </div>
                                <h2 class="post-title h3 fs-22"><a href="./shop-product.html"
                                        class="link-dark">Headphones</a></h2>
                                <p class="price"><span class="amount">$55.00</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide project item" role="group" aria-label="4 / 5"
                            style="width: 350px; margin-right: 30px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/sh4.jpg" srcset="./assets/img/photos/sh4@2x.jpg 2x"
                                    alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i
                                        class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Quick view" data-bs-original-title="Quick view"><i
                                        class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Shoes</div>
                                    <span class="ratings three"></span>
                                </div>
                                <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Colorful
                                        Sneakers</a></h2>
                                <p class="price"><span class="amount">$55.00</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide project item" role="group" aria-label="5 / 5"
                            style="width: 350px; margin-right: 30px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/sh5.jpg" srcset="./assets/img/photos/sh5@2x.jpg 2x"
                                    alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"><i
                                        class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip"
                                    aria-label="Quick view" data-bs-original-title="Quick view"><i
                                        class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i> Add to Cart</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Electronics</div>
                                    <span class="ratings one"></span>
                                </div>
                                <h2 class="post-title h3 fs-22"><a href="./shop-product.html" class="link-dark">Polaroid
                                        Camera</a></h2>
                                <p class="price"><span class="amount">$55.00</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!--/.swiper-slide -->
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
                            role="button" aria-label="Go to slide 3"></span></div>
                </div>
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-10">
                <aside class="col-lg-4 sidebar">
                    <div class="widget mt-1">
                        <h4 class="widget-title mb-3">Ratings Distribution</h4>
                        <div class="mb-5"><span class="ratings four"></span><span>4.2 out of 5</span></div>
                        <ul class="progress-list">
                            <li>
                                <p>5 Stars</p>
                                <div class="progressbar line blue" data-value="82"><svg viewBox="0 0 100 6"
                                        preserveAspectRatio="none" style="display: block; width: 100%;">
                                        <path d="M 0,3 L 100,3" stroke="#eee" stroke-width="6" fill-opacity="0"></path>
                                        <path d="M 0,3 L 100,3" stroke="#555" stroke-width="6" fill-opacity="0"
                                            style="stroke-dasharray: 100, 100; stroke-dashoffset: 18;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="color: inherit; position: absolute; right: 0px; top: -30px; padding: 0px; margin: 0px;">
                                        82 %</div>
                                </div>
                            </li>
                            <li>
                                <p>4 Stars</p>
                                <div class="progressbar line blue" data-value="8"><svg viewBox="0 0 100 6"
                                        preserveAspectRatio="none" style="display: block; width: 100%;">
                                        <path d="M 0,3 L 100,3" stroke="#eee" stroke-width="6" fill-opacity="0"></path>
                                        <path d="M 0,3 L 100,3" stroke="#555" stroke-width="6" fill-opacity="0"
                                            style="stroke-dasharray: 100, 100; stroke-dashoffset: 92;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="color: inherit; position: absolute; right: 0px; top: -30px; padding: 0px; margin: 0px;">
                                        8 %</div>
                                </div>
                            </li>
                            <li>
                                <p>3 Stars</p>
                                <div class="progressbar line blue" data-value="5"><svg viewBox="0 0 100 6"
                                        preserveAspectRatio="none" style="display: block; width: 100%;">
                                        <path d="M 0,3 L 100,3" stroke="#eee" stroke-width="6" fill-opacity="0"></path>
                                        <path d="M 0,3 L 100,3" stroke="#555" stroke-width="6" fill-opacity="0"
                                            style="stroke-dasharray: 100, 100; stroke-dashoffset: 95;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="color: inherit; position: absolute; right: 0px; top: -30px; padding: 0px; margin: 0px;">
                                        5 %</div>
                                </div>
                            </li>
                            <li>
                                <p>2 Stars</p>
                                <div class="progressbar line blue" data-value="3"><svg viewBox="0 0 100 6"
                                        preserveAspectRatio="none" style="display: block; width: 100%;">
                                        <path d="M 0,3 L 100,3" stroke="#eee" stroke-width="6" fill-opacity="0"></path>
                                        <path d="M 0,3 L 100,3" stroke="#555" stroke-width="6" fill-opacity="0"
                                            style="stroke-dasharray: 100, 100; stroke-dashoffset: 97;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="color: inherit; position: absolute; right: 0px; top: -30px; padding: 0px; margin: 0px;">
                                        3 %</div>
                                </div>
                            </li>
                            <li>
                                <p>1 Star</p>
                                <div class="progressbar line blue" data-value="2"><svg viewBox="0 0 100 6"
                                        preserveAspectRatio="none" style="display: block; width: 100%;">
                                        <path d="M 0,3 L 100,3" stroke="#eee" stroke-width="6" fill-opacity="0"></path>
                                        <path d="M 0,3 L 100,3" stroke="#555" stroke-width="6" fill-opacity="0"
                                            style="stroke-dasharray: 100, 100; stroke-dashoffset: 98;"></path>
                                    </svg>
                                    <div class="progressbar-text"
                                        style="color: inherit; position: absolute; right: 0px; top: -30px; padding: 0px; margin: 0px;">
                                        2 %</div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.progress-list -->
                    </div>
                    <!-- /.widget -->
                    <div class="widget mt-10">
                        <h4 class="widget-title mb-3">Review this product</h4>
                        <p class="mb-5">Aenean eu leo quam ornare sem lacinia quam.</p>
                        <a href="#" class="btn btn-primary rounded w-100">Write a Review</a>
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /column .sidebar -->
                <div class="col-lg-8">
                    <div class="row align-items-center mb-10 position-relative zindex-1">
                        <div class="col-md-7 col-xl-8 pe-xl-20">
                            <h2 class="display-6 mb-0">Ratings &amp; Reviews</h2>
                        </div>
                        <!--/column -->
                        <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
                            <div class="form-select-wrapper">
                                <select class="form-select">
                                    <option value="newest">Sort by newest</option>
                                    <option value="oldest">Sort by oldest</option>
                                    <option value="popular">Sort by popularity</option>
                                    <option value="high-rating">Sort by high rating</option>
                                    <option value="low-rating">Sort by low rating</option>
                                </select>
                            </div>
                            <!--/.form-select-wrapper -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div id="comments">
                        <ol id="singlecomments" class="commentlist">
                            <li class="comment">
                                <div class="comment-header d-md-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt=""
                                            src="./assets/img/avatars/u1.jpg"></figure>
                                    <div>
                                        <h6 class="comment-author"><a href="#" class="link-dark">Connor Gibson</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li><i class="uil uil-calendar-alt"></i>14 Jan 2022</li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /div -->
                                </div>
                                <!-- /.comment-header -->
                                <div class="d-flex flex-row align-items-center mt-5 mb-2">
                                    <span class="ratings five"></span>
                                    <h6 class="mb-0">Highly recommended!</h6>
                                </div>
                                <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis
                                    mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                                    elit. Sed posuere consectetur est at lobortis integer posuere erat ante.</p>
                                <div class="d-flex flex-row align-items-center pb-3">
                                    <p class="text-muted fs-15 mb-0 me-5">Was this review helpful?</p>
                                    <div>
                                        <a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> 5</a>
                                        <a href="#" class="link-dark"><i class="uil uil-thumbs-down"></i> 5</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="comment-header d-md-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt=""
                                            src="./assets/img/avatars/u2.jpg"></figure>
                                    <div>
                                        <h6 class="comment-author"><a href="#" class="link-dark">Nikolas
                                                Brooten</a></h6>
                                        <ul class="post-meta">
                                            <li><i class="uil uil-calendar-alt"></i>21 Feb 2022</li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /div -->
                                </div>
                                <!-- /.comment-header -->
                                <div class="d-flex flex-row align-items-center mt-5 mb-2">
                                    <span class="ratings four"></span>
                                    <h6 class="mb-0">Great product</h6>
                                </div>
                                <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam
                                    sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare
                                    et, blandit a tellus. Pellentesque dignissim ornare faucibus mollis.</p>
                                <div class="d-flex flex-row align-items-center pb-3">
                                    <p class="text-muted fs-15 mb-0 me-5">Was this review helpful?</p>
                                    <div>
                                        <a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> 5</a>
                                        <a href="#" class="link-dark"><i class="uil uil-thumbs-down"></i> 5</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="d-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt=""
                                            src="./assets/img/avatars/u3.jpg"></figure>
                                    <div>
                                        <h6 class="comment-author"><a href="#" class="link-dark">Pearce Frye</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li><i class="uil uil-calendar-alt"></i>22 Feb 2022</li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /div -->
                                </div>
                                <!-- /.comment-header -->
                                <div class="d-flex flex-row align-items-center mt-5 mb-2">
                                    <span class="ratings three"></span>
                                    <h6 class="mb-0">Could be better</h6>
                                </div>
                                <p>Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis
                                    dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis.</p>
                                <div class="d-flex flex-row align-items-center pb-3">
                                    <p class="text-muted fs-15 mb-0 me-5">Was this review helpful?</p>
                                    <div>
                                        <a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> 5</a>
                                        <a href="#" class="link-dark"><i class="uil uil-thumbs-down"></i> 5</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="d-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt=""
                                            src="./assets/img/avatars/u2.jpg"></figure>
                                    <div>
                                        <h6 class="comment-author"><a href="#" class="link-dark">Nikolas
                                                Brooten</a></h6>
                                        <ul class="post-meta">
                                            <li><i class="uil uil-calendar-alt"></i>4 Apr 2022</li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /div -->
                                </div>
                                <!-- /.comment-header -->
                                <div class="d-flex flex-row align-items-center mt-5 mb-2">
                                    <span class="ratings one"></span>
                                    <h6 class="mb-0">I'm going to return it</h6>
                                </div>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id. Cras mattis consectetur purus sit amet
                                    fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia aenean bibendum nulla
                                    consectetur.</p>
                                <div class="d-flex flex-row align-items-center pb-3">
                                    <p class="text-muted fs-15 mb-0 me-5">Was this review helpful?</p>
                                    <div class="d-flex flex-row align-items-end">
                                        <a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> 5</a>
                                        <a href="#" class="link-dark"><i class="uil uil-thumbs-down"></i> 5</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="comment-header d-md-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt=""
                                            src="./assets/img/avatars/u4.jpg"></figure>
                                    <div>
                                        <h6 class="comment-author"><a href="#" class="link-dark">Lou Bloxham</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li><i class="uil uil-calendar-alt"></i>3 May 2022</li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /div -->
                                </div>
                                <!-- /.comment-header -->
                                <div class="d-flex flex-row align-items-center mt-5 mb-2">
                                    <span class="ratings three"></span>
                                </div>
                                <p>Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod semper.
                                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                </p>
                                <div class="d-flex flex-row align-items-center pb-3">
                                    <p class="text-muted fs-15 mb-0 me-5">Was this review helpful?</p>
                                    <div>
                                        <a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> 5</a>
                                        <a href="#" class="link-dark"><i class="uil uil-thumbs-down"></i> 5</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <!-- /#comments -->
                    <nav class="d-flex mt-10" aria-label="pagination">
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
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
