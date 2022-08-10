@include('layouts.header2')

<style>
.buy-btn{
    position:absolute;
    top: 78%;
    left: 45%;
}
.carousel-control-prev , .carousel-control-next{
    width:3% !important;
}
}
</style>
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- Slider Section -->
            <div class="mb-5">
                <!-- <div class="bg-img-hero" style="background-image: url(https://transvelo.github.io/electro-html/2.0/assets/img/1920X422/img1.jpg);">
                    <div class="container min-height-420 overflow-hidden">
                        <div class="js-slick-carousel u-slick"
                            data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
                            <div class="js-slide bg-img-hero-center">
                                <div class="row min-height-420 py-7 py-md-0">
                                    <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                       
                                        <a href="https://www.amazon.com/dp/B07VZL1W7K?tag=fexan89-20&linkCode=osi&th=1&psc=1" target="_blank" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="400"
                                            style="margin-top:56%;">
                                            Buy Now
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-6  d-flex align-items-center"
                                        data-scs-animation-in="zoomIn"
                                        data-scs-animation-delay="500">
                                        <img class="img-fluid" src="1.png" alt="Image Description" style="width: 65%;">
                                    </div>
                                </div>
                            </div>
                
                          
                        </div> 

                       
                    </div>
                </div> -->
                <div id="carouselExampleIndicators" class="carousel slide d-lg-block d-md-block d-sm-block d-none" data-ride="carousel">
                     <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>

                <div class="carousel-inner">
                <div class="carousel-item">
                <img class="d-block w-100" src="{{URL::to('/')}}/assets/images/banners/1.jpg" alt="First slide" style="height:470px;">
                <a href="{{URL::to('/')}}/product/Beats-Solo3-Wireless-On-Ear-Headphones-Apple-W1-Headphone-Chip-Class-1-Bluetooth-40-Hours-of-Listening-Time-Built-in-Microphone-Rose-Gold-Latest-Model" target="_blank" class="buy-btn btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400">Buy Now</a>
                </div>
   
                <div class="carousel-item">
                 <img class="d-block w-100" src="{{URL::to('/')}}/assets/images/banners/2.jpg" alt="Second slide" style="height:470px;">
                <a href="{{URL::to('/')}}/product/Acer-Nitro-5-Gaming-Laptop-10th-Gen-Intel-Core-i5-10300HNVIDIA-GeForce-GTX-1650-Ti-15-6-Full-HD-IPS-144Hz-Display-8GB-DDR4256GB-NVMe-SSDWiFi-6-DTS-X-UltraBacklit-KeyboardAN515-55-59KS" target="_blank" class="buy-btn btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400">Buy Now</a>
                </div>
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{URL::to('/')}}/assets/images/banners/3.jpg" alt="Third slide" style="height:470px;">
                <a href="{{URL::to('/')}}/product/Garmin-010-02173-11-Venu-GPS-Smartwatch-with-Bright-Touchscreen-Display-Features-Music-Body-Energy-Monitoring-Animated-Workouts-Pulse-Ox-Sensor-and-More-Black" target="_blank" class="buy-btn btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400">Buy Now</a>
                </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
                </div>
            </div>

            <!-- End Slider Section -->
            <div class="container">
                <!-- Banner -->
                <div class="mb-5">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="{{URL::to('/')}}/category/Digital-Cameras" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="https://transvelo.github.io/electro-html/2.0/assets/img/190X150/img1.png" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="{{URL::to('/')}}/category/Laptop-Accessories" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="https://transvelo.github.io/electro-html/2.0/assets/img/190X150/img2.jpg" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON LAPTOP ACCESSORIES
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="{{URL::to('/')}}/category/Monitors" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="https://transvelo.github.io/electro-html/2.0/assets/img/190X150/img3.jpg" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE MONITORS
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="{{URL::to('/')}}/category/Headphones" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{URL::to('/headphones.jpg')}}" alt="Image Description" style="width: 70%;">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                            CATCH BIG <strong>DEALS</strong> ON THE HEADPHONES
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Shop now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Banner -->
                <!-- Deals-and-tabs -->
                <div class="mb-5">
                    <div class="row">
                        <!-- Deal -->
                   
                        <!-- End Deal -->
                        <!-- Tab Prodcut -->
                        <div class="col">
                            <!-- Features Section -->
                            <div class="">
                                <!-- Nav Classic -->
                                <div class="position-relative text-center z-index-2 mb-3">
                                    <ul class="nav nav-classic nav-tab nav-tab-sm px-md-3 justify-content-start justify-content-lg-center flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble border-md-down-bottom-0 pb-1 pb-lg-0 mb-n1 mb-lg-0" id="pills-tab-1" role="tablist">
                                           <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                                            <a class="nav-link active " id="pills-topdeals-example1-tab" data-toggle="pill" href="#pills-topdeals-example1" role="tab" aria-controls="pills-topdeals-example1" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Top Deals
                                                </div>
                                            </a>
                                        </li>
                                        @php $cp=1; @endphp
                                        @foreach($homepagecatproducts as $fc)
                                        
                                    
                                        <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                                            <a class="nav-link " id="pills-{{$cp}}-example1-tab" data-toggle="pill" href="#pills-{{$cp}}-example1" role="tab" aria-controls="pills-{{$cp}}-example1" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    {{$fc['category_name']}}
                                                </div>
                                            </a>
                                        </li>
                                      
                                        @php $cp++; @endphp
                                      @endforeach
                                    </ul>
                                </div>
                                <!-- End Nav Classic -->

                                <!-- Tab Content -->
                                <div class="tab-content" id="pills-tabContent">

                                     <div class="tab-pane fade pt-2 active show" id="pills-topdeals-example1" role="tabpanel" aria-labelledby="pills-topdeals-example1-tab">
                                                                                        
                                        <ul class="row list-unstyled products-group no-gutters">

                                                  @php $pc=1; @endphp @foreach($topdeals as $pro)
                                            @if($pc==3)
                                            <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            @elseif($pc==4)
                                            @php $pc=1; @endphp
                                            <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
                                            @else
                                            <li class="col-6 col-wd-3 col-md-4 product-item">
                                            @endif
                                                <div class="product-item__outer h-100">
                                                    <div class="product-item__inner px-xl-4 p-3">
                                                        <div class="product-item__body pb-xl-2">
                                                            <div class="mb-2"><a href="{{URL::to('/')}}/category/{{$pro->category_slug}}" class="font-size-12 text-gray-5">{{$pro->category_name}}</a></div>

                                                                                                 @if(strlen($pro->product_title) > 40)

   @php
    $str = substr($pro->product_title, 0, 75) . '...';
   $str2 = substr($pro->product_title, 0, 40) . '...';
   @endphp

   @else @php $str=$pro->product_title;$str2 = substr($pro->product_title, 0, 40) . '...'; @endphp

@endif
                                                            <h5 class="mb-1 product-item__title d-none d-sm-block"><a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="text-blue font-weight-bold">


{{$str}}

</a></h5>


                                                 <h5 class="mb-1 product-item__title d-block d-sm-none"><a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="text-blue font-weight-bold">


{{$str2}}

</a></h5>
                                                            <div class="mb-2 d-none d-sm-block" style="width: 180px;height: 200px;margin-top: 25px;">
                                                                <a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="text-center"><img class="img-fluid" src="{{$pro->image_large}}" alt="Image Description" style="margin-left: 47px;max-height: 100%;"></a>
                                                            </div>

                                                              <div class="mb-2 d-block d-sm-none" style="width: 130px;height: 140px;margin-top: 25px;">
                                                                <a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="text-center"><img class="img-fluid" src="{{$pro->image_large}}" alt="Image Description" style="max-height: 100%;"></a>
                                                            </div>
                                                            <div class="flex-center-between mb-1">
                                                                @if($pro->product_savings==0)
                                                                <div class="prodcut-price">
                                                                    <div class="text-gray-100">${{$pro->product_price}}</div>
                                                                </div>
                                                                @else
                                                                <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                                    <ins class="font-size-20 text-red text-decoration-none mr-2">${{$pro->product_price}}</ins>
                                                                    <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{$pro->product_savings+$pro->product_price}}</del>
                                                                </div>
                                                                @endif
                                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                                    <a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   
                                                    </div>
                                                </div>
                                            </li>
                                            @php $pc++; @endphp
                                             @endforeach

                                         </ul>

                                     </div>
                                    
                                            @php $catc=1; @endphp

                                            @foreach($homepagecatproducts as $fc)
                                           
                                            <div class="tab-pane fade pt-2" id="pills-{{$catc}}-example1" role="tabpanel" aria-labelledby="pills-{{$catc}}-example1-tab">
                                         
                                            
                                        <ul class="row list-unstyled products-group no-gutters">
                                            @php $catc++; @endphp
                                            @php $pc=1; @endphp
                                            @foreach($fc['products'] as $pro)
                                            @if($pc==3)
                                            <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            @elseif($pc==4)
                                            @php $pc=1; @endphp
                                            <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
                                            @else
                                            <li class="col-6 col-wd-3 col-md-4 product-item">
                                            @endif
                                                <div class="product-item__outer h-100">
                                                    <div class="product-item__inner px-xl-4 p-3">
                                                        <div class="product-item__body pb-xl-2">
                                                            <div class="mb-2"><a href="{{URL::to('/')}}/category/{{$pro['category_slug']}}" class="font-size-12 text-gray-5">{{$pro['category_name']}}</a></div>

                                                                                                 @if(strlen($pro['product_title']) > 40)

   @php
    $str = substr($pro['product_title'], 0, 75) . '...';
   $str2 = substr($pro['product_title'], 0, 40) . '...';
   @endphp

   @else @php $str=$pro['product_title'];$str2 = substr($pro['product_title'], 0, 40) . '...'; @endphp

@endif
                                                            <h5 class="mb-1 product-item__title d-none d-sm-block"><a href="{{URL::to('/')}}/product/{{$pro['product_slug']}}" class="text-blue font-weight-bold">


{{$str}}

</a></h5>


                                                 <h5 class="mb-1 product-item__title d-block d-sm-none"><a href="{{URL::to('/')}}/product/{{$pro['product_slug']}}" class="text-blue font-weight-bold">


{{$str2}}

</a></h5>
                                                            <div class="mb-2 d-none d-sm-block" style="width: 180px;height: 200px;margin-top: 25px;">
                                                                <a href="{{URL::to('/')}}/product/{{$pro['product_slug']}}" class="text-center"><img class="img-fluid" src="{{$pro['image_large']}}" alt="Image Description" style="margin-left: 47px;max-height: 100%;"></a>
                                                            </div>

                                                              <div class="mb-2 d-block d-sm-none" style="width: 130px;height: 140px;margin-top: 25px;">
                                                                <a href="{{URL::to('/')}}/product/{{$pro['product_slug']}}" class="text-center"><img class="img-fluid" src="{{$pro['image_large']}}" alt="Image Description" style="max-height: 100%;"></a>
                                                            </div>
                                                            <div class="flex-center-between mb-1">
                                                                @if($pro['product_savings']==0)
                                                                <div class="prodcut-price">
                                                                    <div class="text-gray-100">${{$pro['product_price']}}</div>
                                                                </div>
                                                                @else
                                                                <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                                    <ins class="font-size-20 text-red text-decoration-none mr-2">${{$pro['product_price']}}</ins>
                                                                    <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{$pro['product_savings']+$pro['product_price']}}</del>
                                                                </div>
                                                                @endif
                                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                                    <a href="{{URL::to('/')}}/product/{{$pro['product_slug']}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   
                                                    </div>
                                                </div>
                                            </li>
                                            @php $pc++; @endphp
                                             @endforeach
                                                 </ul>
                                    </div>
                                              @endforeach
                                        
                                        
                                    
                               
                                </div>
                                <!-- End Tab Content -->
                            </div>
                            <!-- End Features Section -->
                        </div>
                        <!-- End Tab Prodcut -->
                    </div>
                </div>
                <!-- End Deals-and-tabs -->
            </div>
       
            <div class="container">
         

             <!-- Recently viewed -->
                <div class="mb-6">
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="section-title mb-0 pb-2 font-size-22">Featured Products</h3>
                        </div>
                        <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="7"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                              "breakpoint": 1400,
                              "settings": {
                                "slidesToShow": 6
                              }
                            }, {
                                "breakpoint": 1200,
                                "settings": {
                                  "slidesToShow": 4
                                }
                            }, {
                              "breakpoint": 992,
                              "settings": {
                                "slidesToShow": 3
                              }
                            }, {
                              "breakpoint": 768,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }, {
                              "breakpoint": 554,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }]'>
                            

                             @foreach($featuredproducts as $fp)
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{URL::to('/')}}/category/{{$fp->category_slug}}" class="font-size-12 text-gray-5">

                                                    @if(strlen($fp->category_name) > 20)

   @php $str = substr($fp->category_name, 0, 20) . '...';@endphp

   @else @php $str=$fp->category_name; @endphp

@endif

{{$str}}</a></div>
                                                            

                                                             @if(strlen($fp->product_title) > 40)

   @php
    $str = substr($fp->product_title, 0, 40) . '...';
   $str2 = substr($fp->product_title, 0, 30) . '...';
   @endphp

   @else @php $str=$fp->product_title; @endphp

@endif

<h5 class="mb-1 product-item__title d-none d-sm-block"><a href="{{URL::to('/')}}/product/{{$fp->product_slug}}" class="text-blue font-weight-bold">{{$str}}</a></h5>
<h5 class="mb-1 product-item__title d-block d-sm-none"><a href="{{URL::to('/')}}/product/{{$fp->product_slug}}" class="text-blue font-weight-bold">{{$str2}}</a></h5>
                                                <div class="mb-2 d-none d-sm-block" style="
    width: 140px;
    height: 150px;
">
                                                    <a href="{{URL::to('/')}}/product/{{$fp->product_slug}}" class="text-center"><img class="img-fluid" src="{{$fp->image_large}}" alt="Image Description" style="max-height: 100%;"></a>
                                                </div>
                                                    <div class="mb-2 d-block d-sm-none" style="
    width: 120px;
    height: 150px;
">
                                                    <a href="{{URL::to('/')}}/product/{{$fp->product_slug}}" class="text-center"><img class="img-fluid" src="{{$fp->image_large}}" alt="Image Description" style="max-height: 100%;"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                        @if($fp->product_savings==0)
                                                                <div class="prodcut-price">
                                                                    <div class="text-gray-100">${{$fp->product_price}}</div>
                                                                </div>
                                                                @else
                                                                <div class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                                    <ins class="font-size-20 text-red text-decoration-none mr-2">${{$fp->product_price}}</ins>
                                                                    <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{$fp->product_savings+$fp->product_price}}</del>
                                                                </div>
                                                                @endif
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{URL::to('/')}}/product/{{$fp->product_slug}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                      
                       
                         
                        </div>
                    </div>
                </div>
                <!-- End Recently viewed -->
                <!-- Full banner -->
          
                <!-- End Full banner -->
               
                <!-- Brand Carousel -->
             
                <!-- End Brand Carousel -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

   @include('layouts.footer')
