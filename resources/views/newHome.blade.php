<!DOCTYPE html>
<html lang="en">
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classimax</title>

    <!-- FAVICON -->
    <link href="{{asset('templates/home/img/favicon.png')}}" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('templates/home/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('templates/home/plugins/bootstrap/css/bootstrap-slider.css')}}">
    <!-- Font Awesome -->
    <link href="{{asset('templates/home/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('templates/home/plugins/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('templates/home/plugins/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="{{asset('templates/home/plugins/fancybox/jquery.fancybox.pack.css')}}" rel="stylesheet">
    <link href="{{asset('templates/home/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{asset('templates/home/css/style.css')}} " rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body class="body-wrapper">
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('templates/home/images/logo.png')}} " alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('home.index')}}">Trang chủ</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('login.index')}}">Đăng tin tuyển dụng</a>
                            </li>

                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about-us.html">About Us</a>
                                    <a class="dropdown-item" href="contact-us.html">Contact Us</a>
                                    <a class="dropdown-item" href="user-profile.html">User Profile</a>
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                    <a class="dropdown-item" href="package.html">Package</a>
                                    <a class="dropdown-item" href="single.html">Single Page</a>
                                    <a class="dropdown-item" href="store.html">Store Single</a>
                                    <a class="dropdown-item" href="single-blog.html">Single Post</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Listing <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="category.html">Ad-Gird View</a>
                                    <a class="dropdown-item" href="ad-listing-list.html">Ad-List View</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">
                            <li class="nav-item">
                                <a class="nav-link text-white add-button" href="{{route('login.index')}}">Đăng nhập ngay</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header Contetnt -->
                <div class="content-block">
                    <h1>THỰC TẬP Ở ĐÂU - Ở FIND JOB</h1>
                    <p><br> Website tìm việc và tuyển dụng thực tập sinh hiệu quả nhất hiện nay! Find Job</p>
                    <div class="short-popular-category-list text-center">
                        <h2>Ngôn ngữ phổ biến</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="category.html"><i class="fa fa-bed"></i> Java</a></li>
                            <li class="list-inline-item">
                                <a href="category.html"><i class="fa fa-grav"></i> Python</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="category.html"><i class="fa fa-car"></i> C#</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="category.html"><i class="fa fa-cutlery"></i> Android studio</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="category.html"><i class="fa fa-coffee"></i> Ngôn ngữ khác</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Advance Search -->
                <div class="advance-search">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12 align-content-center">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="Tên công việc bạn muốn ứng tuyển">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                <option>Địa điểm</option>
                                                <option value="1">Top rated</option>
                                                <option value="2">Lowest Price</option>
                                                <option value="4">Highest Price</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                <option>Công việc</option>
                                                <option value="1">Top rated</option>
                                                <option value="2">Lowest Price</option>
                                                <option value="4">Highest Price</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-2 align-self-center">
                                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->





<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section title -->

                <div class="row">
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-laptop icon-bg-1"></i>
                                <h4>Java</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-apple icon-bg-2"></i>
                                <h4>IOS</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-home icon-bg-3"></i>
                                <h4>C#</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-shopping-basket icon-bg-4"></i>
                                <h4>Python</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-briefcase icon-bg-5"></i>
                                <h4>Android Studio</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-car icon-bg-6"></i>
                                <h4>PHP</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">
                            <div class="header">
                                <i class="fa fa-paw icon-bg-7"></i>
                                <h4>C++</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->
                    <!-- Category list -->
                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                        <div class="category-block">

                            <div class="header">
                                <i class="fa fa-laptop icon-bg-8"></i>
                                <h4>Note Js</h4>
                            </div>
                            <ul class="category-list" >
                                <li><a href="category.html">Tổng tin <span>93</span></a></li>
                                <li><a href="category.html">Người  cần tuyển <span>233</span></a></li>

                            </ul>
                        </div>
                    </div> <!-- /Category List -->


                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>


<!--====================================
=            Call to Action            =
=====================================-->


<!--============================
=            Footer            =
=============================-->
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-12">
                <!-- Copyright -->
                <div class="copyright">
                    <p>Copyright © <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <!-- Social Icons -->
                <ul class="social-media-icons text-right">
                    <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
                    <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
                    <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
                    <li><a class="fa fa-vimeo" href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
        <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
</footer>
<!
<!-- JAVASCRIPTS -->
<script src="{{asset('templates/home/plugins/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('templates/home/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('templates/home/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('templates/home/plugins/bootstrap/js/bootstrap-slider.js')}}"></script>
<!-- tether js -->
<script src="{{asset('templates/home/plugins/tether/js/tether.min.js')}}"></script>
<script src="{{asset('templates/home/plugins/raty/jquery.raty-fa.js')}}"></script>
<script src="{{asset('templates/home/plugins/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset('templates/home/plugins/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('templates/home/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('templates/home/plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
<!-- google map -->
<script src="{{asset('templates/home/plugins/google-map/gmap.js')}} "></script>
<script src="{{asset('templates/home/js/script.js')}}"></script>

</body>

</html>



