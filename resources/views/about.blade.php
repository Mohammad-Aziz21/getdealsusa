@include('layouts.header2')

<style>

.sitemap_categories_area{margin: 60px 0;}

.title {margin-bottom: 40px; font-size: 24px; position: relative; display: block;font-weight:bold; text-decoration: underline;}
.list li{line-height:2; }
.about_txt_div h4{font-size: 18px;font-weight: 700;color: #214f90}
p{color: black;}
</style>
    <!-- About section start -->
    <section class="sitemap_categories_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title" style="font-size: 29px;">About Us</h2>
                    </div> <!-- section title -->
                    <div class="about_txt_div">

                    <h4>WHO ARE WE?</h4>
                    <p> 
                    We at GETDEALSUSA.COM target to offer you the best deals, discounts and promotional offers while also keeping you aware of all (especially the best ones) the sale deals in your area to keep you on top of your retail game, all in one place.                    
                    </p>
                    <p> 
                    While you surf our website for exemplary saving opportunities, our team is zooming around the inter-webs to scour, assess and update the latest discounts and deals for you to benefit from.                    
                    </p>

                    <h4>WHAT DO I GET WITH GETDEALSUSA.COM?</h4>
                    <p>
                    Apart from saving a ton of money on the fantastic deals you find with us? Our team is dedicated, intuitive to the demand of the consumers and super-efficient in digging out and quickly bringing to you the deals your wallets deserve to counter the inflated retail market.                    
                    </p>
                    <p>We also send your way our newsletters, fresh & frequent, to keep you updated on the go from the finest brands in the business that you crave. Look no further if you’d like to see discounts and deals from:
                       <ul class="list">
                          <li>Amazon</li>
                          <li>Walmart</li>
                          <li>Target</li>
                          <li>Costco</li>
                          <li>Best buy and many more.</li>
                    
                        </ul>  
                    </p>
                    <p>
                        But hey, you can’t find all of the great discounts and deals on goods and services on GETDEALSUSA.COM, right? WRONG!! </br>
                        We deal in a large selection of categories too from Electronics, Clothing, Household, Sports and Outdoors to Collectibles, Beauty & Health and Other Supplies.                    </p>
                
                    <h4>MORE ABOUT GETDEALSUSA.COM</h4>
                    <p>Want to know more about Terms and conditions and policies?<br/>
                    Make sure to visit:
                    
                    <ul class="list">
                        <li>Our <a href="{{URL::to('/')}}/terms-condition">Terms and Conditions</a> page for more information about our procedures.</li>
                        <li>Our <a href="{{URL::to('/')}}/privacy_policy">Privacy Policy</a> page for our policies on safeguarding the information you share with us.</li>
                        <li>Our <a href="{{URL::to('/')}}/faq">FAQ</a> page to search for answers to frequently asked questions.</li>
                    </ul>
                    </p>

                </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- About section end -->

    


    @include('layouts.footer')
