<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>@yield('title', $page_title ?? '') - {{ coba()->app_name }}</title>
    <link rel="shortcut icon" href="{{ url('') }}/assets/img/{{ coba()->favicon }}">
    {!! Html::style('assets_front/css/plugins.css') !!}
    {!! Html::style('assets_front/css/style.css') !!}
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ url('') }}">
                            <img src="{{ url('') }}/assets/img/{{ coba()->logo }}"
                                srcset="{{ url('') }}/assets/img/{{ coba()->logo }} 2x" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Services</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./services.html">Services I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./services2.html">Services II</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">About</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="./about.html">About
                                                        I</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./about2.html">About
                                                        II</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Shop</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="./shop.html">Shop
                                                        I</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="./shop2.html">Shop
                                                        II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./shop-product">Product Page</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./shop-cart.html">Shopping Cart</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./shop-checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Contact</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./contact.html">Contact I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./contact2.html">Contact II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./contact3.html">Contact III</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Career</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="./career.html">Job
                                                        Listing I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./career2.html">Job Listing II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./career-job.html">Job Description</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Utility</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="./404.html">404
                                                        Not Found</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./page-loader.html">Page Loader</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signin.html">Sign In I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signin2.html">Sign In II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signup.html">Sign Up I</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./signup2.html">Sign Up II</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="./terms.html">Terms</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="./pricing.html">Pricing</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One
                                                Page</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Documentation</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="mega-menu-content">
                                            <div class="row gx-0 gx-lg-3">
                                                <div class="col-lg-4">
                                                    <h6 class="dropdown-header">Usage</h6>
                                                    <ul class="list-unstyled cc-2 pb-lg-1">
                                                        <li><a class="dropdown-item" href="./docs/index.html">Get
                                                                Started</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/forms.html">Forms</a></li>
                                                        <li><a class="dropdown-item" href="./docs/faq.html">FAQ</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/changelog.html">Changelog</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/credits.html">Credits</a></li>
                                                    </ul>
                                                    <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                                                    <ul class="list-unstyled cc-2">
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/colors.html">Colors</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/fonts.html">Fonts</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/icons-svg.html">SVG Icons</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/icons-font.html">Font Icons</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/illustrations.html">Illustrations</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/backgrounds.html">Backgrounds</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/styleguide/misc.html">Misc</a></li>
                                                    </ul>
                                                </div>
                                                <!--/column -->
                                                <div class="col-lg-8">
                                                    <h6 class="dropdown-header">Elements</h6>
                                                    <ul class="list-unstyled cc-3">
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/accordion.html">Accordion</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/alerts.html">Alerts</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/animations.html">Animations</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/avatars.html">Avatars</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/background.html">Background</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/badges.html">Badges</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/buttons.html">Buttons</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/card.html">Card</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/carousel.html">Carousel</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/dividers.html">Dividers</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/form-elements.html">Form
                                                                Elements</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/image-hover.html">Image Hover</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/image-mask.html">Image Mask</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/lightbox.html">Lightbox</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/player.html">Media Player</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/modal.html">Modal</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/pagination.html">Pagination</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/progressbar.html">Progressbar</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/shadows.html">Shadows</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/shapes.html">Shapes</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tables.html">Tables</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tabs.html">Tabs</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/text-animations.html">Text
                                                                Animations</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/text-highlight.html">Text
                                                                Highlight</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tiles.html">Tiles</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/tooltips-popovers.html">Tooltips
                                                                & Popovers</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="./docs/elements/typography.html">Typography</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--/column -->
                                            </div>
                                            <!--/.row -->
                                        </li>
                                        <!--/.mega-menu-content-->
                                    </ul>
                                    <!--/.dropdown-menu -->
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br /> 00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                            <li class="nav-item">
                                <a class="nav-link position-relative d-flex flex-row align-items-center"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                                    <i class="uil uil-shopping-cart"></i>
                                    <span class="badge badge-cart bg-primary">3</span>
                                </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
            <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
                <div class="offcanvas-header">
                    <h3 class="mb-0">Your Cart</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column">
                    <div class="shopping-cart">
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product"><img
                                            src="./assets_front/img/photos/sth1.jpg"
                                            srcset="./assets_front/img/photos/sth1@2x.jpg 2x" alt="" /></a>
                                </figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product"
                                            class="link-dark">Nike Air Sneakers</a></h3>
                                    <p class="price fs-sm"><del><span class="amount">$55.00</span></del> <ins><span
                                                class="amount">$45.99</span></ins></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product"><img
                                            src="./assets_front/img/photos/sth1.jpg"
                                            srcset="./assets_front/img/photos/sth1@2x.jpg 2x" alt="" /></a>
                                </figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product"
                                            class="link-dark">Colorful Sneakers</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product"><img
                                            src="./assets_front/img/photos/sth1.jpg"
                                            srcset="./assets_front/img/photos/sth1@2x.jpg 2x" alt="" /></a>
                                </figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product"
                                            class="link-dark">Colorful Sneakers</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product"><img
                                            src="./assets_front/img/photos/sth1.jpg"
                                            srcset="./assets_front/img/photos/sth1@2x.jpg 2x" alt="" /></a>
                                </figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product"
                                            class="link-dark">Colorful Sneakers</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product"><img
                                            src="./assets_front/img/photos/sth1.jpg"
                                            srcset="./assets_front/img/photos/sth1@2x.jpg 2x" alt="" /></a>
                                </figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product"
                                            class="link-dark">Colorful Sneakers</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row">
                                <figure class="rounded w-17"><a href="./shop-product"><img
                                            src="./assets_front/img/photos/sth1.jpg"
                                            srcset="./assets_front/img/photos/sth1@2x.jpg 2x" alt="" /></a>
                                </figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product"
                                            class="link-dark">Polaroid Camera</a></h3>
                                    <p class="price fs-sm"><span class="amount">$45.00</span></p>
                                    <div class="form-select-wrapper">
                                        <select class="form-select form-select-sm">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                            </div>
                            <div class="ms-2"><a href="#" class="link-dark"><i
                                        class="uil uil-trash-alt"></i></a></div>
                        </div>
                        <!--/.shopping-cart-item -->
                    </div>
                    <!-- /.shopping-cart-->
                    <div class="offcanvas-footer flex-column text-center">
                        <div class="d-flex w-100 justify-content-between mb-4">
                            <span>Subtotal:</span>
                            <span class="h6 mb-0">$135.99</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4"><i
                                class="uil uil-credit-card fs-18"></i> Checkout</a>
                        <p class="fs-14 mb-0">Free shipping on all orders over $50</p>
                    </div>
                    <!-- /.offcanvas-footer-->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.offcanvas -->
            <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
                <div class="container d-flex flex-row py-6">
                    <form class="search-form w-100">
                        <input id="search-form" type="text" class="form-control"
                            placeholder="Type keyword and hit enter">
                    </form>
                    <!-- /.search-form -->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.offcanvas -->
        </header>
        <!-- /header -->

        @yield('content')

        <section class="wrapper bg-gray">
            <div class="container py-12 py-md-14">
                <div class="row gx-lg-8 gx-xl-12 gy-8">
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets_front/img/icons/solid/shipment.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Free Shipping</h4>
                                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                    lacinia odio sem.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets_front/img/icons/solid/push-cart.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">30 Days Return</h4>
                                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                    lacinia odio sem.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="{{ asset('assets_front/img/icons/solid/verify.svg') }}"
                                    class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4"
                                    alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">2-Years Warranty</h4>
                                <p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget
                                    lacinia odio sem.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('assets_front/img/logo-light.png') }}"
                            srcset="{{ asset('assets_front/img/logo-light@2x.png') }} 2x" alt="" />
                        <p class="mb-4">© 2023 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom
                        </address>
                        <a href="mailto:#">info@email.com</a><br /> 00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
                        <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form
                                    action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                    method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                    class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL"
                                                class="required email form-control" placeholder="Email Address"
                                                id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe"
                                                id="mc-embedded-subscribe2" class="btn btn-primary ">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none">
                                            </div>
                                            <div class="response" id="mce-success-response2" style="display:none">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    {!! Html::script('assets_front/js/plugins.js') !!}
    {!! Html::script('assets_front/js/theme.js') !!}
</body>

</html>
