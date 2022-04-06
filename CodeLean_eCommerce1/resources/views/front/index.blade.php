@extends('front.layout.master')
@section('title','Home')
@section('body')
    <!--hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,Kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat fuga aliquam ad corrupti voluptas voluptate ea modi delectus quo necessitatibus accusamus laborum reprehenderit doloremque qui ut,
                                 ab accusantium tempora minus.</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,Kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat fuga aliquam ad corrupti voluptas voluptate ea modi delectus quo necessitatibus accusamus laborum reprehenderit doloremque qui ut,
                                 ab accusantium tempora minus.</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero Section End-->
    <!-- Banner Section Begin-->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <front/img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <front/img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <front/img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Banner Section End-->
     <!--Women Banner Section Begin-->
     <section class="women-banner spad">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href="#">Discover More</a>
                    </div>
                 </div>
                 <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active">All</li>
                            <li class="item">Clothings</li>
                            <li class="item">HandBag</li>
                            <li  class="item">Shoes</li>
                            <li  class="item">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($womenProducts as $womenProduct)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$womenProduct->productImages[0]->path}}" alt="">
                                @if($womenProduct->discount !=null)
                                <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="cartegory-name">{{$womenProduct->tag}}</div>
                                <a href="">
                                    <h5>{{$womenProduct->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($womenProduct->discount !=null)
                                    ${{$womenProduct->discount}}

                                    <span>${{$womenProduct->price}}</span>
                                    @else

                                    {{$womenProduct->price}}

                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
             </div>
         </div>
     </section>
      <!--Women Banner Section End-->
      <!--Deal Of the weak Section Begin-->
      <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
          <div class="container">
              <div class="col-lg-6 text-center">
                  <div class="section-title">
                      <h2>Deal Of The Week</h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In vel eos quae excepturi, eius ad maxime quia assumenda labore facere dolorum ullam saepe consequuntur officiis adipisci architecto reprehenderit similique veniam.</p>
                      <div class="product-price">
                          $35.00
                          <span>/Han Bag</span>
                      </div>
                  </div>
                  <div class="countdown-timer" id="countdown">
                      <div class="cd-item">
                          <span>56</span>
                          <p>Days</p>
                      </div>
                      <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                  </div>
                  <a href="" class="primary-btn">Shop Now</a>
              </div>
          </div>
      </section>
      <!--Deal Of the weak Section End-->
      <!--Man Banner Section Begin-->
      <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                   <div class="filter-control">
                       <ul>
                            <li class="item active">All</li>
                            <li class="item">Clothings</li>
                            <li class="item">HandBag</li>
                            <li  class="item">Shoes</li>
                            <li  class="item">Accessories</li>
                       </ul>
                   </div>
                   <div class="product-slider owl-carousel">
                   @foreach($menProducts as $menProduct)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/{{$menProduct->productImages[0]->path}}" alt="">
                                @if($menProduct->discount !=null)
                                <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="cartegory-name">{{$menProduct->tag}}</div>
                                <a href="">
                                    <h5>{{$menProduct->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($menProduct->discount !=null)
                                    ${{$menProduct->discount}}

                                    <span>${{$menProduct->price}}</span>
                                    @else

                                    {{$womenProduct->price}}

                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                   </div>
               </div>
               <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                    <h2>Women's</h2>
                    <a href="#">Discover More</a>
                </div>
             </div>
            </div>
        </div>
    </section>
      <!--Man Banner Section End-->
     <!--Instagram section Begin-->
     <div class="instagram-photo">
         <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Conlection</a></h5>
            </div>
         </div>
         <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Conlection</a></h5>
            </div>
         </div>
         <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Conlection</a></h5>
            </div>
         </div>
         <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Conlection</a></h5>
            </div>
         </div>
         <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Conlection</a></h5>
            </div>
         </div>
         <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">CodeLean_Conlection</a></h5>
            </div>
         </div>
     </div>
     <!--Instagram section End-->
     <!--Lastest Blog section Begin-->
     <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Form The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach( $blogs as $blog )
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="front/img/blog/{{ $blog->image}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                   {{ date('M d,Y',strtotime($blog->created_at))}}
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    {{ count($blog->blogComments) }}
                                </div>
                            </div>
                            <a href="">
                                <h4>{{ $blog->title }}</h4>
                            </a>
                            <p>{{ $blog->subtitle }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>DELIVERY ON TIME </h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <front/img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>SECURE PAYMENT</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
      <!--Lastest Blog section end-->
 @endsection