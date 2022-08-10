@include('layouts.header2')
<style>
.sitemap_categories_area{margin: 60px 0;}

.sitemap_stores_area{margin: 60px;}

.sitemap_cat_list_div{margin-bottom: 30px; max-width: 360px; width: 100%;}
.sitemap_cat_list_div ul{padding: 0; }
.sitemap_cat_list_div ul li{margin-bottom: 10px; position: relative; padding-left: 30px; font-size: 15px; font-weight: 400;}
.sitemap_cat_list_div ul li::before{position: absolute; left: 0; top: 11px; content: ''; width: 12px; height: 2px; background: #214f90; border-radius: 6px; transition: all, 0.3s;}
.sitemap_cat_list_div ul li a{color: #000000;}
.sitemap_cat_list_div ul li a:hover{text-decoration: none;
    background-color: #0755c4c9;
    color: white;
    padding: 4px;
    padding-right: 12px;
    padding-left: 9px;
    border-radius: 10px;}
.sitemap_cat_list_div ul li:hover::before{width: 20px;}
.sitemap_cat_list_div ul li{list-style-type: none;}


.title {margin-bottom: 40px; font-size: 24px; position: relative; display: block;font-weight:bold;text-decoration: underline;} 
</style>
    <!-- About section start -->
    <section class="sitemap_categories_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title">Browse by Category</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row" style="margin-left:6%;">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">Accessories (1)</a></li>
                            <li><a href="#">Automotive (0)</a></li>
                            <li><a href="#">Baby (68)</a></li>
                            <li><a href="#">Beauty (2)</a></li>
                            <li><a href="#">Books (0)</a></li>
                            <li><a href="#">Clothing (7)</a></li>
                            <li><a href="#">Computers & Electronics (14)</a></li>
                            <li><a href="#">Education(28)</a></li>
                            <li><a href="#">Beauty (2)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">Entertainment (12)</a></li>
                            <li><a href="#">Events (20)</a></li>
                            <li><a href="#">Flowers (0)</a></li>
                            <li><a href="#">Food (18)</a></li>
                            <li><a href="#">Furniture (0)</a></li>
                            <li><a href="#">Gifts (0)</a></li>
                            <li><a href="#">Health (177)</a></li>
                            <li><a href="#">Home & Garden (1)</a></li>
                            <li><a href="#">Furniture (0)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">Jewellery (6)</a></li>
                            <li><a href="#">Musical (1)</a></li>
                            <li><a href="#">Instruments (0)</a></li>
                            <li><a href="#">Office Supplies (10)</a></li>
                            <li><a href="#">Party Supplies (1)</a></li>
                            <li><a href="#">Photography (19)</a></li>
                            <li><a href="#">Party Supplies (1)</a></li>
                            <li><a href="#">Pet (0)</a></li>
                            <li><a href="#">Photography (19)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">Instruments (0)</a></li>
                            <li><a href="#">Office Supplies (10)</a></li>
                            <li><a href="#">Party Supplies (1)</a></li>
                            <li><a href="#">Photography (19)</a></li>
                            <li><a href="#">Office Supplies (10)</a></li>
                            <li><a href="#">Party Supplies (1)</a></li>
                            <li><a href="#">Pet (0)</a></li>
                            <li><a href="#">Photography (19)</a></li>
                            <li><a href="#">Office Supplies (10)</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section class="sitemap_stores_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title">Popular Stores</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row" style="margin-left:6%;">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">Amazon</a></li>
                            <li><a href="#">American Eagle Outfitters</a></li>
                            <li><a href="#">AT&T</a></li>
                            <li><a href="#">Best Buy</a></li>
                            <li><a href="#">buybuy BABY</a></li>
                            <li><a href="#">Carter's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">Dick's Sporting Goods</a></li>
                            <li><a href="#">eBay</a></li>
                            <li><a href="#">Forever 21</a></li>
                            <li><a href="#">Great Clips</a></li>
                            <li><a href="#">Groupon</a></li>
                            <li><a href="#">Grubhub</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">H&M</a></li>
                            <li><a href="#">Kids Foot Locker</a></li>
                            <li><a href="#">Office Depot</a></li>
                            <li><a href="#">Olive Garden</a></li>
                            <li><a href="#">Papa Murphy's</a></li>
                            <li><a href="#">Party City</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="sitemap_cat_list_div">
                        <ul>
                            <li><a href="#">Staples</a></li>
                            <li><a href="#">The Children's Place</a></li>
                            <li><a href="#">The Home Depot</a></li>
                            <li><a href="#">Wayfair</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </section>
    <!-- About section end -->

    


    @include('layouts.footer')
