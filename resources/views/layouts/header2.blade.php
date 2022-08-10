<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>GetDealsUSA-Great deals in USA</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
       <link rel="shortcut icon" href="{{URL::to('/')}}/fv4.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/font-electro.css">
        
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/vendor/animate.css/animate.min.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/vendor/hs-megamenu/src/hs.megamenu.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/vendor/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/website/css/theme.css">


<style>
.cookies a {
    text-decoration: none;
    color: #000;
    margin-top: 8px
}
.cookies a:hover {  
    text-decoration: none;
    color: blue;
    margin-top: 8px
}
.cookies .btn:hover{
    color:white;
}
button.close{
    float: right !important;
    margin-left:93% !important;
}
div.cookies{
    font-size: 13px;
    margin-bottom: 10px;
    
}
.popup.custom .cookies {
    width:50%;
    position:fixed;
    bottom:1%;
    left:1%;
    margin:0;
}
.popup
{
    overflow-y: auto !important;
}
.modal-backdrop {
  display: none !important;
}
.modal-open .popup{
   width:0;
    margin: 0 auto;
}
.modal-open
{
   overflow:auto !important;
   overflow-x:hidden !important;
   padding-right: 0 !important;
}
.cookie-btn{
    color:white;
    font-size: small;
    font-weight:400;
    padding: 5px;
    border-radius: 5px;
     width: 64px;
     background-color: #214f90;
    border: none;
}
    </style>
</head>

    <body>

        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to GetDealsUSA</a>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <!-- Account Sidebar Toggle Button -->
                                        <a id="sidebarNavToggler" href="#" role="button" class="u-header-topbar__nav-link"
                                           >
                                            <i class="ec ec-user mr-1"></i> Register  </a> <span class="text-gray-50">or</span><a id="sidebarNavToggler" href="#" role="button" class="u-header-topbar__nav-link"
                                           > Sign in</a>
                                      
                                        <!-- End Account Sidebar Toggle Button -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Logo and Menu -->
                <div class="py-2 py-xl-4 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center" style="
    /* margin-bottom: -10px; */
    margin-top: -20px;
    margin-bottom: -10px;
">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{URL::to('/')}}" aria-label="Electro">
                                   <img class="d-block d-sm-none" src="{{URL::to('/logowhite.png')}}" style="
    /* padding: 0px 98px 0px 40px; */
    width: 80px;
    margin-left: 75px;
    margin-top: 9px;
">

                                   <img class="d-none d-sm-block" src="{{URL::to('/logo.png')}}" style="
    /* padding: 0px 98px 0px 40px; */
    width: 140px;
    margin-left: 20px;
">
                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0 d-sm-none"
                                        aria-controls="sidebarHeader"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft"
                                        data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                                    </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                                <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                                    <div class="u-sidebar__scroller">
                                        <div class="u-sidebar__container">
                                            <div class="u-header-sidebar__footer-offset pb-0">
                                                <!-- Toggle Button -->
                                                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                                    <button type="button" class="close ml-auto"
                                                        aria-controls="sidebarHeader"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        data-unfold-event="click"
                                                        data-unfold-hide-on-scroll="false"
                                                        data-unfold-target="#sidebarHeader1"
                                                        data-unfold-type="css-animation"
                                                        data-unfold-animation-in="fadeInLeft"
                                                        data-unfold-animation-out="fadeOutLeft"
                                                        data-unfold-duration="500">
                                                        <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                    </button>
                                                </div>
                                                <!-- End Toggle Button -->

                                                <!-- Content -->
                                                <div class="js-scrollbar u-sidebar__body">
                                                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                        <!-- Logo -->
                                                        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="{{URL::to('/')}}" aria-label="Electro">                                  
                                                            <img src="{{URL::to('/logo.png')}}">
                                                        
                                                        </a>
                                                        <!-- End Logo -->

                                                        <!-- List -->
                                                        <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                            <!-- Home Section -->

                                                            @foreach($allcategories as $ac)
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;"  role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse{{$ac['category_slug']}}" data-target="#headerSidebarHomeCollapse{{$ac['category_slug']}}">
                                                                    {{$ac['category_name']}}
                                                                </a>

                                                                <div id="headerSidebarHomeCollapse{{$ac['category_slug']}}" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">

                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="{{URL::to('/')}}/category/{{$ac['category_slug']}}">{{$ac['category_name']}}</a></li>

                                                                        @foreach($ac['children'] as $ch)
                                                                        <!-- Home - v1 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="{{URL::to('/')}}/category/{{$ch['category_slug']}}">{{$ch['category_name']}}</a></li>
                                                                        <!-- End Home - v1 -->
                                                                        <!-- Home - v2 -->
                                                                  @endforeach
                                                                        <!-- End Home - v3-full-color-bg -->
                                                                        <!-- Home - v4 -->
                                                                
                                                                        <!-- End 404 -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Home Section --> @endforeach

                                                       
                                                        </ul>
                                                        <!-- End List -->
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->

                             <!-- Search Bar -->
                            <div class="col d-none d-xl-block" style="max-width: 70%">
                                <form id="searchform" class="js-focus-state">
                                    <label class="sr-only" for="searchproduct">Search</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="searchproduct-item" id="searchproduct-item" value="{{$text ?? ''}}" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                        <div class="input-group-append">
                                            <!-- Select -->
                                            <select id="catsearch" name="catsearch" class="js-select selectpicker dropdown-select custom-search-categories-select"
                                                data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                                <option value="All" selected>All Categories</option>

                                        @foreach($allcategories as $ac)

                                        <option value="{{$ac['category_id']}}">{{$ac['category_name']}}</option>
                                       
                                       

                                         

                                        @endforeach
                                              
                                            </select>
                                            <!-- End Select -->
                                            <button type="submit" class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                                <span class="ec ec-search font-size-24"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Bar -->


                      
                            <!-- Header Icons -->
                            <div class="d-xl-none col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Search"
                                                aria-controls="searchClassic"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-target="#searchClassic"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-search"></span>
                                            </a>

                                                      <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form id="searchform1" class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="text" name="searchproduct-item1" id="searchproduct-item1" placeholder="Search for Products" required>
                                                                                 <!-- Select -->
                                            <select id="catsearch1" name="catsearch1" style="
    width: 41px;
    border-color: #d5d2d2;
">
                                                <option value="All" selected>All Categories</option>

                                        @foreach($allcategories as $ac)

                                        <option value="{{$ac['category_id']}}">{{$ac['category_name']}}</option>
                                       
                                       

                                         

                                        @endforeach
                                              
                                            </select>
                                            <!-- End Select -->
                                                    <div class="input-group-append">
                                     
                                                        <button class="btn btn-primary px-3" type="submit"><i class="font-size-18 ec ec-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Input -->
                                        </li>
                                        <!-- End Search -->
                                    
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo and Menu -->

                <!-- Vertical-and-Search-Bar -->
                <div class="d-none d-xl-block bg-primary" style="
    background-color: #214f90 !important;
">
                    <div class="container">
                        <div class="row align-items-stretch min-height-50" style="flex-wrap:nowrap;">
                            <!-- Vertical Menu -->
                            <div class="col-md-auto d-none d-xl-flex align-items-end">
                                <div style="min-width: 12.875rem;">
                                    <!-- Basics Accordion -->
                                    <div id="basicsAccordion">
                                        <!-- Card -->
                                        <div class="card border-0 rounded-0">
                                            <div class="card-header bg-primary rounded-0 card-collapse border-0" id="basicsHeadingOne" style="
    background-color: #214f90!important;
">
                                                <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    data-toggle="collapse"
                                                    data-target="#basicsCollapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="basicsCollapseOne">
                                                    <span class="pl-1 text-gray-90" style="color: white;">All Categories</span>
                                                    <span class="text-gray-90 ml-3">
                                                        <span class="ec ec-arrow-down-search" style="color: white;"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div id="basicsCollapseOne" class="collapse vertical-menu v1"
                                                aria-labelledby="basicsHeadingOne"
                                                data-parent="#basicsAccordion">
                                                <div class="card-body p-0">
                                                    <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                            <ul class=" navbar-nav u-header__navbar-nav border-primary border-top-0 menu1">


                                                                     <!-- Nav Item MegaMenu -->
                                                            @foreach($allcategories as $ac)
                                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                                data-event="hover"
                                                                data-animation-in="slideInUp"
                                                                data-animation-out="fadeOut"
                                                                data-position="left">
                                                                <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{URL::to('/')}}/category/{{$ac['category_slug']}}" aria-haspopup="true" aria-expanded="false">{{$ac['category_name']}}</a>

                                                                <!-- Nav Item - Mega Menu -->
                                                                <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                                                                   
                                                                    <div class="row u-header__mega-menu-wrapper">
                                                                        @php $ccount=0; @endphp
                                                                        @foreach($ac['children'] as $ch)
                                                                        
                                                                        @if($ccount==0)
                                                                        <div class="col mb-3 mb-sm-0">

                                                                            
                                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                                @endif
                                                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="{{URL::to('/')}}/category/{{$ch['category_slug']}}">{{$ch['category_name']}}</a></li>
                                                                              @php $ccount++; @endphp

                                                                              @if($ccount==5)
                                                                              @php $ccount=0; @endphp

                                                                            
                                                                            </ul>
                                                                        </div>
                                                                        @endif
                                                                        @endforeach

                                                                      
                                                                    </div>
                                                                </div>
                                                                <!-- End Nav Item - Mega Menu -->
                                                            </li>
                                                            <!-- End Nav Item MegaMenu-->
                                                            @endforeach
                                                            
                                                    
                                                            </ul>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Basics Accordion -->
                                </div>
                            </div>
                            <!-- End Vertical Menu -->

                           

                                <div class="col-md-auto d-none d-xl-flex align-items-end">
                                   <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    >
                                                    <a href="{{URL::to('/')}}/category/Computers-and-Accessories"><span class="pl-1 text-gray-90" style="color: white;">COMPUTERS</span></a>
                                                    
                                                </button>

                                </div>


                                <div class="col-md-auto d-none d-xl-flex align-items-end">
                                   <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    >
                                                     <a href="{{URL::to('/')}}/category/Camera-and-Photo"><span class="pl-1 text-gray-90" style="color: white;">CAMERAS</span></a>
                                                    
                                                </button>

                                </div>


                                <div class="col-md-auto d-none d-xl-flex align-items-end">
                                   <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    >
                                                      <a href="{{URL::to('/')}}/category/Headphones"><span class="pl-1 text-gray-90" style="color: white;">HEADPHONES</span></a>
                                                    
                                                </button>

                                </div>


                                <div class="col-md-auto d-none d-xl-flex align-items-end">
                                   <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    >
                                                    <a href="{{URL::to('/')}}/category/Computer-Accessories-and-Peripherals"><span class="pl-1 text-gray-90" style="color: white;">ACCESSORIES</span></a>
                                                    
                                                </button>

                                </div>


                                <div class="col-md-auto d-none d-xl-flex align-items-end">
                                   <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    >
                                                    <a href="{{URL::to('/')}}/category/Home-Theater-Systems"><span class="pl-1 text-gray-90" style="color: white;">ENTERTAINMENT</span></a>
                                                    
                                                </button>

                                </div>


                                <div class="col-md-auto d-none d-xl-flex align-items-end">
                                   <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    >
                                                    <a href="{{URL::to('/')}}/blog"><span class="pl-1 text-gray-90" style="color: white;">BLOG</span></a>
                                                    
                                                </button>

                                </div>


                     
                        
                        </div>
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
            </div>
        </header>
        <!-- ========== END HEADER ========== -->

           <!-- Cookie popup -->
<div class="modal custom  popup" id="myModal" tabindex="-1" aria-labelledby="cookie" aria-hidden="true" data-keyboard="false" data-backdrop="static;" >
    <div class="align-items-center align-self-center modal-dialog  text-center cookies" >
        <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"> &times;</span>
                </button>
            <img src="https://previews.123rf.com/images/zodchiy/zodchiy1904/zodchiy190400004/121420088-the-cookie-illustration-flat-vector-design-illustration-useful-for-web-design-pop-ups-and-other-elem.jpg" style="width:37px; margin-top:-4%; margin:auto;">
            <span class="mt-2" style="margin:auto;">We use third party cookies to personalize content, ads and analyze site traffic.</span>
            <a class="d-flex align-items-center" style="margin:auto;" href="{{URL::to('/')}}/cookie-policy"><span style="text-decoration:underline;">Learn more</span><i class="fa fa-angle-right ml-2"></i></a>
            <div class="p-3" style="border-bottom:1px solid lightgrey;">
              <button class="btn cookie-btn mt-2" data-dismiss="modal" type="button"> Accept </button>
              <button class="btn cookie-btn  mt-2" data-dismiss="modal" type="button">Decline</button>
            </div> 
        </div>
    </div>
</div>
<!-- Cookie popup -->