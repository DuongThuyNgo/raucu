<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('/')}}assets/img/favicon.png">

		<!-- all css here -->
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/animate.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/chosen.min.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/ionicons.min.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/bundle.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/style.css">
        <link rel="stylesheet" href="{{URL::asset('/')}}assets/css/responsive.css">
        <script src="{{URL::asset('/')}}assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
            <!-- Add your site or application content here -->

            <!--organicfood wrapper start-->
            <div class="organic_food_wrapper">
                <!--Header start-->
                <header class="header sticky-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header_wrapper_inner">

                                    <div class="logo col-xs-12">
                                        <a href="index.html">
                                            <img src="{{URL::asset('/')}}assets/img/logo/logo.png" alt="">
                                        </a>
                                    </div>


                                    <div class="main_menu_inner">

                                        <div class="menu">
                                            <nav>
                                                <ul>
                                                    <li class="active"><a href="{{route('get.home')}}">Trang chủ </a>

                                                    </li>

                                                    <li><a href="about.html">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                                        <ul class="sub_menu">
                                                            @foreach($loaisanphamGlobal as $item1)
                                                            <li><a href="{{route('get.san_pham_theo_loai',$item1->slug)}}">{{$item1->tenloai}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                     </li>

                                                    @foreach(config('nav.home.top') as $item)
                                                    <li><a href="{{route($item['route'])}}" class="{{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}">{{$item['name']}}</a>  </li>
                                                    @endforeach


                                                 </ul>
                                            </nav>
                                        </div>

                                        <div class="mobile-menu d-lg-none">
                                            <nav>
                                                <ul>
                                                    <li class="active"><a href="{{route('get.home')}}">Trang chủ </a>

                                                    </li>

                                                    <li><a href="about.html">Sản phẩm<i class="fa fa-angle-down"></i> </a>

                                                        <ul class="sub_menu">
                                                            @foreach($loaisanphamGlobal as $item1)
                                                            <li><a href="{{route('get.san_pham_theo_loai',$item1->slug)}}">{{$item1->tenloai}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                     </li>

                                                    @foreach(config('nav.home.top') as $item)
                                                    <li><a href="{{route($item['route'])}}" class="{{ \Request::route()->getName() == $item['route'] ? 'active' : '' }}">{{$item['name']}}</a>  </li>
                                                    @endforeach


                                                 </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="header_right_info d-flex">
                                        <div class="search_box">
                                            <div class="search_inner">
                                                <form action="">
                                                    <input type="text" id="tukhoas" name="tim_kiem" value="{{\Request::get('tim_kiem')}}" placeholder="Tìm kiếm sản phẩm">
                                                    <button type="submit"><i class="ion-ios-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="mini__cart">
                                            <div class="mini_cart_inner">
                                                <div class="cart_icon">
                                                    <a href="#">
                                                        <span class="cart_icon_inner">
                                                            <i class="ion-android-cart"></i>
                                                            <span class="cart_count">{{\Cart::count()}}</span>
                                                        </span>
                                                        <span class="item_total">$65.00</span>
                                                    </a>
                                                </div>
                                                <!--Mini Cart Box-->
                                                <div class="mini_cart_box cart_box_one">
                                                    <div class="mini_cart_item">
                                                        <div class="mini_cart_img">
                                                            <a href="#">
                                                                <img src="assets/img/cart/1.jpg" alt="">
                                                                <span class="cart_count">1</span>
                                                            </a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <h5><a href="product-details.html">Mushroom Burger</a></h5>
                                                            <span class="cart_price">$75.99</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="mini_cart_item">
                                                        <div class="mini_cart_img">
                                                            <a href="#">
                                                                <img src="assets/img/cart/2.jpg" alt="">
                                                                <span class="cart_count">1</span>
                                                            </a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <h5><a href="#">Country Burger</a></h5>
                                                            <span class="cart_price">$48.99</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="price_content">
                                                        <div class="cart_subtotals">
															<div class="price_inline">
																<span class="label">Subtotal </span>
																<span class="value">$143.49 </span>
															</div>
															<div class="price_inline">
																<span class="label">Shipping </span>
																<span class="value">$7.00</span>
															</div>
                                                            <div class="price_inline">
																<span class="label">Taxes </span>
																<span class="value">$0.00</span>
															</div>
                                                        </div>
                                                        <div class="cart-total-price">
															<span class="label">Total </span>
															<span class="value">$85.99</span>
														</div>
                                                    </div>
													<div class="min_cart_checkout">
                                                        <a href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                                <!--Mini Cart Box End -->
                                            </div>
                                        </div>
                                        <div class="header_account">
                                            <div class="account_inner">
                                                <a href="#"><i class="ion-gear-b"></i></a>
                                            </div>
                                            <div class="content-setting-dropdown">
												<div class="language-selector-wrapper">
													<div class="language-selector">
														<ul>
															<li><a href="#"><img src="assets/img/1.jpg" alt="English"><span class="expand-more">English</span></a></li>

															<li><a href="#"><img src="assets/img/banner/frances2.jpg" alt="Language"><span class="expand-more">Français</span> </a></li>

														</ul>

													</div>
													<div class="currency-selector-wrapper">
														<ul>
															<li><a href="#">EUR $</a></li>
															<li><a href="#">USD $</a></li>
														</ul>
													</div>
													<div class="user_info_top">
														<ul>
															<li><a href="my-account.html">my account</a></li>
															<li><a href="checkout.html">Checkout</a></li>
															<li><a href="login.html">Sign in</a></li>
														</ul>
													</div>
												</div>
											</div>
                                        </div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!--Header end-->
                @if(\Request::route()->getName()=='get.home' && !\Request::get('tim_kiem') )
                <!--Slider start-->
                <div class="slider_area">
                    <div class="slider_list  owl-carousel">
                        <div class="single_slide" style="background-image: url(assets/img/slider/1.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider__content">
                                            <p>Exclusive Offer -10% Off This Week</p>
                                            <h2>Live <strong>healthy</strong> with a glass</h2>
                                            <h3>of <strong>fruit juice</strong> every day</h3>
                                            <h6>Starting at<span>$42.99</span></h6>
                                            <div class="slider_btn">
                                                <a href="shop.html">Shopping now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_slide" style="background-image: url(assets/img/slider/2.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider__content">
                                            <p>Exclusive Offer -10% Off This Week</p>
                                            <h2>We <strong>provide</strong> the best</h2>
                                            <h3> product <strong> for you </strong></h3>
                                            <h6>Starting at <span>$42.99</span></h6>
                                            <div class="slider_btn">
                                                <a href="shop.html">Shopping now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Slider end-->

                <!--Banner area start-->
                <div class="banner_area home1_banner mt-30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="assets/img/banner/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="assets/img/banner/2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner banner_three">
                                    <a href="#">
                                        <img src="assets/img/banner/3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Banner area end-->
                @endif

                @yield('content')

                <!--Brand logo start-->
                <div class="brand_logo">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="brand_list_carousel owl-carousel">
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/1.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/2.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/3.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/4.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/5.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/1.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/2.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/3.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/4.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="assets/img/brand/5.png" alt="brand logo">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Brand logo end-->

                <!-- footer start -->
                <footer class="footer pt-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <!--Single Footer-->
                                <div class="single_footer widget">
                                    <div class="single_footer_widget_inner">
                                        <div class="footer_logo">
                                            <a href="#"><img src="assets/img/logo/logo_footer.png" alt=""></a>
                                        </div>
                                        <div class="footer_content">
                                            <p>Address: 123 Main Street, Anytown, CA 12345 - USA.</p>
                                            <p>Phone: +(000) 800 456 789</p>
                                            <p>Email: Contact@posthemes.com</p>
                                        </div>
                                        <div class="footer_social">
                                            <h4>Get in Touch:</h4>
                                            <div class="footer_social_icon">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Footer-->
                            </div>
                            <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="footer_menu_list d-flex justify-content-between">
                                    <!--Single Footer-->
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">
                                            <div class="footer_title">
                                                <h2>Products</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Prices drop</a></li>
                                                    <li><a href="#"> New products</a></li>
                                                    <li><a href="#"> Best sales</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single footer end-->
                                    <!--Single footer start-->
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">
                                            <div class="footer_title">
                                                <h2>Login</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Sitemap</a></li>
                                                    <li><a href="#"> Stores</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                    <!--Single footer start-->
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">
                                            <div class="footer_title">
                                                <h2> Your account </h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Personal info</a></li>
                                                    <li><a href="#"> Orders</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Credit slips</a></li>
                                                    <li><a href="#"> Addresses</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <div class="footer_title">
                                    <h2> Join Our Newsletter Now </h2>
                                </div>
                                <div class="footer_news_letter">
                                    <p>Get E-mail updates about our latest shop and special offers.</p>
                                    <div class="newsletter_form">
                                        <form action="#">
                                            <input type="email" required placeholder="Your Email Address">
                                            <input type="submit" value="Subscribe">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="copyright">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="copyright_text">
                                        <p>Copyright 2018 <a href="#">Organicfood</a>. All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="footer_mastercard text-right">
                                        <a href="#"><img src="assets/img/brand/payment.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </footer>

                <!-- footer end -->



            </div>














		<!-- all js here -->
        <script src="{{URL::asset('/')}}assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/popper.js"></script>
        <script src="{{URL::asset('/')}}assets/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/jquery.meanmenu.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/isotope.pkgd.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/jquery.counterup.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/waypoints.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/ajax-mail.js"></script>
        <script src="{{URL::asset('/')}}assets/js/owl.carousel.min.js"></script>
        <script src="{{URL::asset('/')}}assets/js/plugins.js"></script>
        <script src="{{URL::asset('/')}}assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>

        <script>
            var path="{{route('get.autocomplete')}}";

                $('input.typeahead').typeahead({
                    source: function(tim_kiem,process){
                        return $.get(path,{tim_kiem:tim_kiem},function(data){
                            return process(data);

    console.log(data)
                        });
                    }
                });





                var substringMatcher = function(strs) {
      return function findMatches(q, cb) {
        var matches, substringRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substrRegex = new RegExp(q, 'i');

        // iterate through the pool of strings and for any string that
        // contains the substring `q`, add it to the `matches` array
        $.each(strs, function(i, str) {
          if (substrRegex.test(str)) {
            matches.push(str);
          }
        });

        cb(matches);
      };
    };
                var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
      'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
      'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
      'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
      'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
      'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
      'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
      'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
      'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
    ];

    $('#the-basics .typeahead').typeahead({
      hint: true,
      highlight: true,
      minLength: 1
    },
    {
      name: 'states',
      source: substringMatcher(states)
    });


         $(".js-add-cart").click(function(event){
             event.preventDefault()//k reload trang
             let $this=$(this)
             let URL=$this.attr('href')
             console.log(URL);

             $.ajax({
                 url: URL,
             }).done(function(results){
                console.log(results);
             });
         });



        </script>
    </body>

</html>
