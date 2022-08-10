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
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{URL::to('/')}}/category/{{$ct->category_slug}}">{{$ct->category_name}}</a></li>
                                @endforeach
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mb-8">
                    <!-- Recommended Products -->
                   
                    <!-- End Recommended Products -->
                    <!-- Shop-control-bar Title -->
                    <div class="flex-center-between mb-3">
                        <h3 class="font-size-25 mb-0">{{$specificcat[0]->category_name}}</h3>
                        <p class="font-size-14 text-gray-90 mb-0">    @if($productsbycat->currentPage()==1)

                            Showing 1 –

                            @if($productsbycat->currentPage()==$productsbycat->lastPage())

                            {{$productsbycat->total()}} of {{$productsbycat->total()}}

                            @else


                            {{$productsbycat->perPage()*$productsbycat->currentPage()}} of {{$productsbycat->total()}}

                            @endif

                            @else


                            Showing {{$productsbycat->perPage()*$productsbycat->currentPage()-$productsbycat->perPage()}} –


                                     @if($productsbycat->currentPage()==$productsbycat->lastPage())

                            {{$productsbycat->total()}} of {{$productsbycat->total()}}

                            @else


                            {{$productsbycat->perPage()*$productsbycat->currentPage()}} of {{$productsbycat->total()}}

                            @endif




                        @endif results</p>
                    </div>
                    <!-- End shop-control-bar Title -->
                    <!-- Shop-control-bar -->
                    
                    <!-- End Shop-control-bar -->
                    <!-- Shop Body -->
                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                            <ul class="row list-unstyled products-group no-gutters">
                                @foreach($productsbycat as $pro)
                                <li class="col-6 col-md-3 col-xl-2 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                              <div class="mb-2"><a href="{{URL::to('/')}}/category/{{$pro->category_slug}}" class="font-size-12 text-gray-5">{{$pro->category_name}}</a></div>
                                                            

                                                                                                 @if(strlen($pro->product_title) > 40)

   @php $str = substr($pro->product_title, 0, 40) . '...';

   $str2 = substr($pro->product_title, 0, 30) . '...';

   @endphp

   @else @php $str=$pro->product_title;
   $str2 = substr($pro->product_title, 0, 30) . '...'; @endphp

@endif




<h5 class="mb-1 product-item__title d-none d-sm-block"><a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="text-blue font-weight-bold">{{$str}}</a></h5>
<h5 class="mb-1 product-item__title d-block d-sm-none"><a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="text-blue font-weight-bold">{{$str2}}</a></h5>


                                                            <div class="mb-2 d-none d-sm-block" style="width: 160px;height: 190px;margin-top: 25px;">
                                                                <a href="{{URL::to('/')}}/product/{{$pro->product_slug}}" class="text-center"><img class="img-fluid" src="{{$pro->image_large}}" alt="Image Description" style="max-height: 100%;"></a>
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
                                @endforeach
                                
                            </ul>
                        </div>
                      
                    </div>
                    <!-- End Tab Content -->
                    <!-- End Shop Body -->
                    <!-- Shop Pagination -->
                    <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example" style="padding-top: 2rem !important;">
                        <div class="text-center text-md-left mb-3 mb-md-0">

                            @if($productsbycat->currentPage()==1)

                            Showing 1 –

                            @if($productsbycat->currentPage()==$productsbycat->lastPage())

                            {{$productsbycat->total()}} of {{$productsbycat->total()}}

                            @else


                            {{$productsbycat->perPage()*$productsbycat->currentPage()}} of {{$productsbycat->total()}}

                            @endif

                            @else


                            Showing {{$productsbycat->perPage()*$productsbycat->currentPage()-$productsbycat->perPage()}} –


                                     @if($productsbycat->currentPage()==$productsbycat->lastPage())

                            {{$productsbycat->total()}} of {{$productsbycat->total()}}

                            @else


                            {{$productsbycat->perPage()*$productsbycat->currentPage()}} of {{$productsbycat->total()}}

                            @endif




                        @endif results</div>
                        <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                            {{$productsbycat->links()}}
                            
                        </ul>
                    </nav>
                    <!-- End Shop Pagination -->
                </div>
                <!-- Brand Carousel -->

                <!-- End Brand Carousel -->
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

   @include('layouts.footer')
