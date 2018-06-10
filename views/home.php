<!-- Search Modal -->
<div class="search-modal modal fade text-center" id="myModal">
    <div class="header-search-form">
        <form action="#">
            <input type="text" placeholder="Search">
            <button><i class="pe-7s-search"></i></button>
        </form>
    </div>
</div>

<!-- START SLIDER SECTION -->
<div class="home-slider-section section">
    <!-- Home Slider -->
    <div id="home-slider" class="slides">   
        <img src="<?php echo base_url().'assets/img/slider/1.jpg' ?>" alt="" title="#slider-caption-1"  />
        <img src="<?php echo base_url().'assets/img/slider/2.jpg' ?>" alt="" title="#slider-caption-2"  />
    </div>
    <!-- Caption 1 -->
    <div id="slider-caption-1" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12">
                    <h4 class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">Chào mừng quý khách đến với</h4>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Shopdangphong.com</h1>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">Shop chúng tôi chuyên cung cấp các mặt hàng đá tự nhiên đảm bảo chất lượng.</p>
                    <a href="product-details.html" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Caption 2 -->
    <div id="slider-caption-2" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12">
                    <h4 class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">Chào mừng quý khách đến với</h4>
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Shopdangphong.com</h1>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">Shop chúng tôi chuyên cung cấp các mặt hàng đá tự nhiên đảm bảo chất lượng.</p>
                    <a href="product-details.html" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER SECTION -->

<!-- PRODUCT SECTION START -->
<div class="product-section section pb-60">
    <div class="container">
        <?php if (count($productList) > 0) { ?>
            <div class="row">
                <div class="section-title text-center col-xs-12 mb-70">
                    <h2>Sản phẩm mới</h2>
                </div>
            </div>
            <div class="row">
                <!-- product-item start -->
                <?php foreach ($productList as $product): ?>
                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-wide mb-40">
                        <div class="product-item text-center">
                            <div class="product-img">
                                <a class="image" href="<?php echo base_url().'product/info/'.$product->product_id; ?>"><img src="<?php echo base_url().$product->image_small_path; ?>" alt=""/></a>
                            </div>
                            <div class="product-info">
                                <h5 class="title"><a href="<?php echo base_url().'product/info/'.$product->product_id; ?>"><?php echo $product->name; ?></a></h5>
                                <span class="price"><span class="new"><?php echo number_format($product->price); ?> đồng</span></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <!-- product-item end -->
            </div>
        <?php } ?>
        <?php if (count($productFeatList) > 0) { ?>
            <div class="row">
                <div class="section-title text-center col-xs-12 mb-70">
                    <h2>Nổi bật</h2>
                </div>
            </div>
            <div class="row">
                <!-- product-item start -->
                <?php foreach ($productFeatList as $productFeat): ?>
                    <div class="col-md-3 col-sm-4 col-xs-6 col-xs-wide mb-40">
                        <div class="product-item text-center">
                            <div class="product-img">
                                <a class="image" href="<?php echo base_url().'product/info/'.$productFeat->product_id; ?>"><img src="<?php echo base_url().$productFeat->image_small_path; ?>" alt=""/></a>
                                <div class="action-btn fix">
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="title"><a href="<?php echo base_url().'product/info/'.$productFeat->product_id; ?>"><?php echo $productFeat->name; ?></a></h5>
                                <span class="price"><span class="new"><?php echo number_format($productFeat->price); ?> đồng</span></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <!-- product-item end -->
            </div>
        <?php } ?>
    </div>
</div>
<!-- PRODUCT SECTION END -->

<!-- TESTIMONIAL SECTION START -->
<div class="testimonial-section section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <!-- Testimonial Slider -->
                <div class="testimonial-slider text-center">
                    <?php foreach($pageReviewList as $pageReview): ?>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                        <img src="<?php echo base_url().$pageReview->avatar_url; ?>" alt="">
                        <p>“ <?php echo $pageReview->content; ?> ”</p>
                        <i class="pe-7s-way"></i>
                        <h5><?php echo $pageReview->reviewer_name; ?></h5>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL SECTION END -->

<!-- BLOG SECTION START -->
<div class="blog-section section pt-100 pb-60">
    <div class="container">
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-70">
				<h2>Bài viết mới</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach($lastNewsList as $lastNews): ?>
                <!-- blog-item start -->
                <div class="col-md-4 col-sm-6 col-xs-12 mb-40">
                    <div class="blog-item">
                        <a class="image" href="<?php echo base_url().'news/detail/1';?>"><img src="<?php echo $lastNews->image_url; ?>" alt=""></a>
                        <div class="blog-dsc">
                            <span class="date"><?php echo date_format($lastNews->reg_date(), "d/m/Y"); ?></span>
                            <h4 class="title"><a href="#"><?php echo $lastNews->title; ?></a></h4>
                        </div>
                    </div>
                </div>
                <!-- blog-item end -->
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- BLOG SECTION END --> 
    
<!-- SERVICE SECTION START -->
<div class="service-section section pt-70 pb-40">
    <div class="container">
        
    </div>
</div>
<!-- SERVICE SECTION END -->  
