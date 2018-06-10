<!-- PAGE BANNER SECTION -->
<div class="page-banner-section section">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col-xs-12">
                <h2>Thông tin sản phẩm</h2>
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                    <li class="active">Thông tin sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BANNER SECTION -->
    
<!-- PAGE SECTION START -->
<div class="page-section section pt-100 pb-60">
    <div class="container">
        <div class="row mb-40">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-40">	
                <!-- Tab panes -->
                <div class="tab-content mb-10">
                	<?php foreach ($product->product_image_array as $index => $product_image): ?>
                		<div class="pro-large-img tab-pane <?php if ($product_image->main_flg == '1') { echo 'active'; } ?>" id="pro-large-img<?php echo $index; ?>">
                        	<img src="<?php echo base_url() . $product_image->image_full_path; ?>" alt="" />
                    	</div>
                	<?php endforeach; ?>
                </div>
                <!-- Nav tabs -->
                <div class="pro-thumb-img-slider">
                	<?php foreach ($product->product_image_array as $index => $product_image): ?>
                        	<div><a href="#pro-large-img-<?php echo $index + 1; ?>" data-toggle="tab"><img src="<?php echo base_url() . $product_image->image_small_path; ?>" alt="" /></a></div>
                	<?php endforeach; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 mb-40">
                <div class="product-details">
                    <h2 class="title"><?php echo $product->name; ?></h2>
                    <span class="price section">
                    	<span class="new">
                    		<?php 
                    		  echo number_format($product->price) . " đồng";
                    		?>
                    	</span>
                    	<?php if ($product->price_discount != null): ?>
                    	<span class="old">
                    		<?php 
                    		  echo number_format($product->price_discount) . " đồng";
                    		?>
                    	</span>
                    	<?php endif; ?>
                    	
                    </span>
                    <span class="availability section">
                    	<strong>Tình trạng:</strong> 
                    	<?php if ($product->available_flg == '1'): ?>
                    		<span class="in"><i class="fa fa-check"></i> Còn hàng</span>
                    	<?php else: ?>
                    		<span class="out"><i class="fa fa-times"></i> Tạm hết hàng</span>	
                    	<?php endif; ?>
                    </span>
                    <div class="short-desc section">
                    	<p>
                    	<?php
                    	   echo $product->short_description;
                    	?>
                        </p>
                    </div>
                    <div class="color-list section">
                    <!--
                        <button class="active" style="background-color: #855439;"><i class="fa fa-check"></i></button>
                        <button style="background-color: #FF6801;"><i class="fa fa-check"></i></button>
                        <button style="background-color: #DCDCDA;"><i class="fa fa-check"></i></button>
                        -->
                    </div>
                    <ul class="usefull-link section">
                    </ul>
                   
                    <div class="share-icons section">
                        <a class="twitter" href="#"><i class="fa fa-facebook"></i>  facebook</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Nav tabs -->
            <div class="col-xs-12">
                <ul class="pro-info-tab-list section">
                    <li class="active"><a href="#more-info" data-toggle="tab">Thông tin chi tiết</a></li>
                    <!-- 
                    <li><a href="#data-sheet" data-toggle="tab">Data sheet</a></li>
                    <li><a href="#reviews" data-toggle="tab">Reviews</a></li> -->
                </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content col-xs-12">
                <div class="pro-info-tab tab-pane active" id="more-info">
                    <p>
                    	<?php
                    	   echo $product->full_description;
                    	?>
                    </p>
                </div>
                <!-- 
                <div class="pro-info-tab tab-pane" id="data-sheet">
                    <table class="table-data-sheet">
                        <tbody>
                            <tr class="odd">
                                <td>Compositions</td>
                                <td>Cotton</td>
                            </tr>
                            <tr class="even">
                                <td>Styles</td>
                                <td>Casual</td>
                            </tr>
                            <tr class="odd">
                                <td>Properties</td>
                                <td>Short Sleeve</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pro-info-tab tab-pane" id="reviews">
                    <a href="#">Be the first to write your review!</a>
                </div> -->
            </div>		
        </div>
    </div>
</div>
<!-- PAGE SECTION END -->
    
<!-- PRODUCT SECTION START -->
<?php $this->load->view($relate_product_view); ?>
<!-- PRODUCT SECTION END --> 