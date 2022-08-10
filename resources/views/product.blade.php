@include('layouts.header2')

   <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">

                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{URL::to('/')}}">Home</a></li>
                                @foreach($categorytree as $ct)
                                  <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/category/{{$ct->category_slug}}">{{$ct->category_name}}</a></li>
                                @endforeach
                               
                                
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->
            <div class="container">
                <!-- Single Product Body -->
                <div class="mb-xl-14 mb-6">
                    <div class="row">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                                data-infinite="true"
                                data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                                data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                                data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                                data-nav-for="#sliderSyncingThumb">
                                <div class="js-slide">
                                    <img class="img-fluid" src="{{$product_details[0]->image_large}}" alt="Image Description">
                                </div>
                             
                            </div>

                            <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                                data-infinite="true"
                                data-slides-show="5"
                                data-is-thumbs="true"
                                data-nav-for="#sliderSyncingNav">
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid" src="{{$product_details[0]->image_large}}" alt="Image Description">
                                </div>
                           
                            </div>
                        </div>
                        <div class="col-md-7 mb-md-6 mb-lg-0">
                            <div class="mb-2">
                                <div class="border-bottom mb-3 pb-md-1 pb-3">
                                    <a href="/category/{{$product_details[0]->category_slug}}" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$product_details[0]->category_name}}</a>
                                    <h2 class="font-size-25 text-lh-1dot2">{{$product_details[0]->product_title}}</h2>
                              

                                                                                              <div class="mb-4">
                                    <div class="d-flex align-items-baseline">
                                        @if($product_details[0]->product_savings==0)
                                        <ins class="font-size-36 text-decoration-none">${{$product_details[0]->product_price}}</ins>
                                        
                                        @else
                                        <ins class="font-size-36 text-decoration-none">${{$product_details[0]->product_price}}</ins>
                                        <del class="font-size-20 ml-2 text-gray-6">${{$product_details[0]->product_price+$product_details[0]->product_savings}}</del>
                                        @endif
                                    </div>

                          <div class="mb-3 d-none d-sm-block" style="
    margin-top: 10px;
">
                                        <a href="{{$product_details[0]->product_url}}" class="btn btn-block btn-dark" target="_blank" style="
    width: 22%;background-color: #214f90;
">See Deal</a>
                                    </div>


                                    <div class="mb-3 d-block d-sm-none" style="
    margin-top: 10px;
">
                                        <a href="{{$product_details[0]->product_url}}" class="btn btn-block btn-dark" target="_blank" style="
    width: 50%;background-color: #214f90;
">See Deal</a>
                                    </div>





                                </div>
                        



                               
                                </div>



                             
                                <div class="mb-2">
                                    <ul class="font-size-14 pl-3 ml-1 text-gray-110">

                                        @php $desc=json_decode(stripcslashes($product_details[0]->product_description));

                                        //print_r($desc);

                                      @endphp

                                        @foreach($desc as $d)

                                        <li>{{$d}}</li>

                                        @endforeach

                                        
                                        
                                    </ul>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Product Body -->
 
           
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

   @include('layouts.footer')
