 <!--Features product area-->
                <div class="features_product">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section_title text-left">
                                    <h3> Sản phẩm tương tự </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="related_product_active owl-carousel">
                                @foreach ($sanphamtt as $item)
                                <div class="col-lg-2">
                                    <div class="single__product">
                                        <div class="single_product__inner">
                                            
                                            <a href="#">
                                                <img src="{{pare_url_file($item->hinhanh)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content text-center">
                                                <div class="produc_desc_info">
                                                    <div class="product_title">
                                                        <h4><a href="product-details.html">{{$item->tensanpham}}</a></h4>
                                                    </div>
                                                    <div class="product_price">
                                                        <p>{{number_format($item->gia,0,',',',')}} đ</p>
                                                    </div>
                                                </div>
                                                <div class="product__hover">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-cart"></i></a></li>
                                                          <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                        <li><a href="product-details.html"><i class="ion-clipboard"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               

                            </div>
                        </div>
                    </div>
                </div>
                <!--Features product end-->





