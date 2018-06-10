<div class="product-section section pb-100">
    <div class="container">
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-70">
                <h2>Sản phẩm liên quan</h2>
            </div>
        </div>
        <div class="row">
            <div class="product-slider product-slider-4">
            	<?php foreach ($productRelateList as $productRelate): ?>
                <!-- product-item start -->
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="product-img">
                                <a class="image" href="<?php echo base_url().'product/info/'.$productRelate->product_id; ?>"><img src="<?php echo base_url().$productRelate->image_small_path; ?>" alt=""/></a>
                                <div class="action-btn fix">
                                </div>
                            </div>
                        <div class="product-info">
                            <h5 class="title"><a href="<?php echo base_url().'product/info/'.$productRelate->product_id; ?>"><?php echo $productRelate->name; ?></a></h5>
                            <span class="price"><span class="new"><?php echo number_format($productRelate->price); ?> đồng</span></span>
                        </div>
                    </div>
                </div>
                <!-- product-item end -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>