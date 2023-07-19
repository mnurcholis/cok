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
    @stack('style-css')
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ url('') }}">
                            <img class="logo-dark" src="{{ url('') }}/assets/img/{{ coba()->logo }}" srcset="{{ url('') }}/assets/img/{{ coba()->logo }} 2x"
                                alt="">
                            <img class="logo-light" src="{{ url('') }}/assets/img/{{ coba()->logo }}"
                                srcset="{{ url('') }}/assets/img/{{ coba()->logo }} 2x" alt="">
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
                                @foreach (get_menu_web() as $row)
                                    <li class="nav-item {{ count($row->childs) ? 'dropdown' : '' }}">
                                        <a class="nav-link {{ count($row->childs) ? 'dropdown-toggle' : '' }}"
                                            {{ count($row->childs) ? 'data-bs-toggle="dropdown"' : '' }}
                                            @if (substr($row->slug, 0, 4) == 'http') href="{{ $row->slug }}"    
                                            @else
                                                href="{{ url('/' . $row->slug) }}" @endif>{{ $row->title }}</a>
                                        @if (count($row->childs))
                                            <ul class="dropdown-menu">
                                                @include('web.layouts.submenu', ['childs' => $row->childs])
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br> 00 (123) 456 78 90 <br>
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

        @yield('content')


    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-6">
                    <div class="widget">
                        <img class="mb-4" src="{{ url('') }}/assets/img/{{ coba()->logo }}"
                            srcset="{{ url('') }}/assets/img/{{ coba()->logo }} 2x" alt="" />
                        <p class="mb-4">© 2023 CCTV ONLINE KLATEN <br class="d-none d-lg-block" />All rights reserved.</p>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-6">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom
                        </address>
                        <a href="mailto:#">info@email.com</a><br /> 00 (123) 456 78 90
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
