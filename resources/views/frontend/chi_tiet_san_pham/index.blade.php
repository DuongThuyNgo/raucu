@extends('layouts.app_frontend')
@section('title','OrganicFood Shop')
@section('content')

<!--breadcrumb area start-->
                <div class="breadcrumb_container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">     
                                <nav>
                            <ul>
                                <li>
                                    <a href="index.html">Home ></a>
                                </li>
                                <li>{{$sanphamchitiet->tensanpham}} </li>
                            </ul>
                        </nav>
                            </div>
                        </div> 
                    </div>        
                </div>
                 <!--breadcrumb area end-->
 <!-- primary block area -->
                <div class="table_primary_block pt-100">
                    <div class="container">   
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="product-flags">  
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabone" role="tabpanel" >
                                            <div class="product_tab_img">
                                                <a href="#"><img src="{{pare_url_file($sanphamchitiet->hinhanh)}}" alt=""></a>    
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>  
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="product__details_content">
                                    <div class="demo_product">
                                        <h2>{{$sanphamchitiet->tensanpham}}</h2> 
                                       
                                    </div>
                                 
                                    <div class="current_price">
                                        <span>{{number_format($sanphamchitiet->gia ?? 0,0,',',',')}} đ</span>    
                                    </div>
                                    <div class="product_information">
                                        
												
                                          
                                            <div class="quickview_plus_minus">
                                                <span class="control_label">Quantity</span>
                                                <div class="quickview_plus_minus_inner">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                    <div class="add_button">
                                                        <button type="submit"> Add to cart</button> 
                                                    </div>
                                                </div>    
                                            </div> 
                                            <div class="product-availability">
                                                <span id="availability">
                                                    <i class="zmdi zmdi-check"></i>
                                                     In stock    
                                                </span>    
                                            </div> 
                                            <div class="social-sharing">
                                               <span>Share</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                </ul>    
                                            </div> 
                                            <div class="block-reassurance">
                                                <ul>
                                                    <li>
                                                        <img src="assets/img/cart/cart1.png" alt="">
                                                        <span>Security policy (edit with Customer reassurance module)</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/cart/cart2.png" alt="">
                                                        <span>Delivery policy (edit with Customer reassurance module)</span>
                                                    </li>
                                                    <li>
                                                        <img src="assets/img/cart/cart3.png" alt="">
                                                        <span>Return policy (edit with Customer reassurance module)</span>
                                                    </li>
                                                </ul>    
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>   
                        </div>
                    </div>       
                </div>
                <!-- primary block end -->
                
                <!-- product page tab -->
                
                <div class="product_page_tab ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="product_tab_button">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li>
                                            <a class=" tav_past active" id="home-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                        </li>
                                        <li>
                                            <a class=" tav_past"  id="profile-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Information</a>
                                        </li>
                                       <li>
                                            <a class=" tav_past"  id="contact-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews</a>
                                       </li>
                                    </ul>
                                </div>    
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Description" role="tabpanel" >
                                        <div class="product-description">
                                         <?php
                                $str = "{$sanphamchitiet->mota}"; //Tạo chuỗi
                              

                                echo $str;
                            ?>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="details" role="tabpanel">
                                        <div class="product-details">
                                            <div class="product-manufacturer">
                                                <a href="#"><img src="assets/img/cart/11.jpg" alt=""></a>   
                                            </div> 
                                            <div class="product-reference">
                                                <label class="label">Reference </label> 
                                                <span>demo_10</span>   
                                            </div> 
                                            <div class="product-quantities">
                                                <label class="label">In stock</label> 
                                                <span>321 Items</span>   
                                            </div> 
                                            <div class="product-out-of-stock">
                                                <section class="product-features">
                                                    <h3>Data sheet</h3>
                                                    <dl class="data-sheet">
                                                        <dt class="name">Compositions</dt>    
                                                        <dd class="value">Viscose</dd>
                                                        <dt class="name">Styles</dt>
                                                        <dd class="value">Dressy</dd>
                                                        <dt class="name">Properties</dt> 
                                                        <dd class="value">Short Dress</dd>     
                                                    </dl>
                                                </section>    
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews" role="tabpanel">
                                        <div class="product_comments_block_tab">
                                            <div class="comment_clearfix">
                                                <div class="comment_author">
                                                    <span>Grade </span> 
                                                    <div class="star_content clearfix">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>    
                                                    </div> 
                                                    
                                                </div> 
                                                 <div class="comment_author_infos">
                                                     <strong>posthemes </strong>
                                                     <br>
                                                    <em>05/08/2018</em>    
                                                </div>
                                                <div class="comment_details">
                                                    <h4>Demo</h4>
                                                    <p>themes</p>    
                                                </div>
                                                <div class="review">
                                                    <p><a href="#">Write your review !</a></p>   
                                                </div>    
                                            </div>    
                                        </div>  
                                   </div>
                                </div>
                            </div>    
                         </div>    
                    </div>        
                </div>
                <!-- product page tab end -->
                   @include('frontend.chi_tiet_san_pham.san_pham_tuong_tu')

<div class="organic_food_wrapper">
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

@stop
