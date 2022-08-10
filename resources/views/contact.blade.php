@include('layouts.header2')


<style>
.sitemap_categories_area{margin: 60px 0;}

.title {margin-bottom: 40px; font-size: 24px; position: relative; display: block;font-weight:bold;}

/* Contact */
.contact_area{margin: 160px 0 60px 0;}

.contact_form_wrpr{width: 78%; margin-left: 12%;}
.form-message{font-size: 16px; color: #e60800; padding: 10px 0px;}
.contact_form{margin-bottom: 30px; position: relative; animation-name: fadeInUpBig;}
.contact_form input, .contact_form textarea {width: 100%; border-radius: 4px; background: #fff; padding: 11px 14px; font-size: 14px; border: 1px solid darkgrey; color: #888888; }
.contact_form label{font-weight:700;}
.contact_form textarea {min-height: 116px; resize: none; }
.primary_btn{border-radius: 4px;border: 0;padding: 10px 30px;font-weight: bold;line-height: 26px;color: white;background-color: #214f90;}
.primary_btn:hover, .primary_btn:focus{ background: #123669;}
</style>



    <!-- About section start -->
    <section class="sitemap_categories_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="title">Send us a Message</h2>
                    </div> <!-- section title -->
                    <div class="contact_form_wrpr wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.9s">
                        <form id="contact_form" action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact_form">
                                        <label for="">Name*</label>
                                        <input type="text" name="name" placeholder="Enter here" required>
                                    </div> <!-- contact_form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="contact_form">
                                        <label for="">Email Address*</label>
                                        <input type="email" name="email" placeholder="Enter here" required>
                                    </div> <!-- contact_form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact_form">
                                        <label for="">Phone Number</label>
                                        <input type="tel" name="phone" placeholder="Enter here">
                                    </div> <!-- contact_form -->
                                    <div class="contact_form">
                                        <label for="">Message</label>
                                        <textarea name="message" rows="6" placeholder="Enter here"></textarea>
                                    </div> <!-- contact_form -->
                                </div>
                                <!-- <div class="col-sm-12">
                                    <p class="form-message">Please type a valid email address.</p>
                                </div> -->
                                <div class="col-md-12">
                                    <div class="contact_form">
                                        <button type="submit" class="primary_btn">Send Message</button>
                                    </div> <!-- contact_form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!-- About section end -->

    


    @include('layouts.footer')
