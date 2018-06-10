<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>shopdangphong - đá tự nhiên</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
    
    <!-- All CSS Files -->
    <!-- Bootstrap css -->
    <?php echo link_tag('assets/css/bootstrap.min.css')?>
    <!-- Icon Font -->
    <?php echo link_tag('assets/css/font-awesome.min.css')?>
    <?php echo link_tag('assets/css/pe-icon-7-stroke.css')?>
    <!-- Plugins css file -->
    <!--<link rel="stylesheet" href="css/plugins.css">-->
    <?php echo link_tag('assets/css/plugins.css')?>
    <!-- Theme main style -->
    <?php echo link_tag('assets/style.css')?>
    <!-- Responsive css -->
    <?php echo link_tag('assets/css/responsive.css')?>
    <!-- Magnific css -->
    <?php echo link_tag('assets/js/vendor/magnific/magnific-popup.css')?>
    
    
</head>

<body>

<!-- Body main wrapper start -->
<div class="wrapper">

<!-- START HEADER SECTION -->
<header class="header-section section sticker header-transparent">
    <div class="container-fluid">
    	<div class="row">
            <!-- logo -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="header-logo">
                    <!--<a href="index.html"><img src="img/logo.png" alt="main logo"></a>-->
                    <a href="<?php echo base_url(); ?>">Shop Đăng Phong.com</a>
                </div>
            </div>
            <!-- header-search & total-cart -->
            <!-- 
            <div class="col-md-2 col-sm-6 col-xs-6 float-right">
                <div class="header-option-btns float-right">
                    
                
                    <div class="header-search float-left">
                        <button class="search-toggle" data-toggle="modal" data-target="#myModal" ><i class="pe-7s-search"></i></button>
                    </div> 
                    
                    
                </div>
            </div> -->
            <!-- primary-menu -->
            <div class="col-md-8 col-xs-12">
                <nav class="main-menu text-center">
                    <ul>
                        <li class="active">
							<a href="<?php echo base_url(); ?>">Trang chủ</a>
                        </li>
                        <li><a href="shop.html">Sản phẩm</a>
                            <ul class="mega-menu">
                            <?php foreach($categoryList as $category): ?>
                                <li><a href="shop-list-right-sidebar.html"><?php echo $category->name;?></a>
                                    <ul>
                                        <?php foreach($category->category_child_list as $categoryChild): ?>
                                        <li><a href="#"><?php echo $categoryChild->name; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="blog.html">Bài viết</a></li>
                        <li><a href="contact.html">Liên hệ</a></li>
                    </ul>
                </nav>
                <div class="mobile-menu"></div>
            </div>
        </div>
        
    </div>
</header>
<!-- END HEADER SECTION -->

<!-- Search Modal -->
<div class="search-modal modal fade text-center" id="myModal">
    <div class="header-search-form">
        <form action="#">
            <input type="text" placeholder="Search">
            <button><i class="pe-7s-search"></i></button>
        </form>
    </div>
</div>

<!-- MAIN CONTENT START -->
<?php $this->load->view($main_view); ?>
<!-- MAIN CONTENT END -->
    
<!-- FOOTER TOP SECTION START -->
<div class="footer-top-section section pb-60 pt-100">
	<div class="container">
		<div class="row">
            <!-- Footer Widget -->
			<div class="footer-widget col-md-6 col-sm-6 col-xs-12 mb-40">
				<h4 class="widget-title">Thông tin liên lạc</h4>
				<p><strong>Địa chỉ :</strong> <span>32/36/6 Ông Ích Khiêm, Phường 14, Quận 11</span></p>
				<p><strong>Điện thoại :</strong> <span>0932.078.580 - 0935.502.977</span></p>
				<!-- Footer Social -->
				<div class="footer-social fix">
					<a href="https://www.facebook.com/shopdangphonggem/"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
			<!-- Footer Widget -->
			<div class="footer-widget col-md-6 col-sm-6 col-xs-12 mb-40">
				<!-- 
				<h4 class="widget-title">tags</h4>
				<div class="tag-cloud fix">
				    <a href="#">Vòng đá</a>
				    <a href="#">Charm</a>
				    <a href="#">Đá mặt trăng</a>
				    <a href="#">Đá mắt hổ</a>
				    <a href="#">Đá thạch anh</a>
				    <a href="#">Dây chuyền</a>
				</div>
				 -->
			</div>
		</div>
	</div>
</div>
<!-- FOOTER TOP SECTION END -->  

<!-- FOOTER BOTTOM SECTION START -->
<div class="footer-bottom-section section pb-20 pt-20">
	<div class="container">
		<div class="row">
            <!-- Copyright -->
			<div class="copyright text-left col-sm-6 col-xs-12">
				<p>Copyright &copy; 2018 <a href="#">shopdangphong.com</a>. All Right Reserved.</p>
			</div>
			<!-- Payment Method -->
            <!--
			<div class="payment-method text-right col-sm-6 col-xs-12">
				<img src="img/payment/1.png" alt="payment" />
				<img src="img/payment/2.png" alt="payment" />
				<img src="img/payment/3.png" alt="payment" />
				<img src="img/payment/4.png" alt="payment" />
			</div>
            -->
		</div>
	</div>
</div>
<!-- FOOTER BOTTOM SECTION END -->  
   
   
  
</div>
<!-- Body main wrapper end -->

    <!-- Modernizr JS -->
    <script src="<?php echo base_url().'assets/js/vendor/modernizr-2.8.3.min.js' ?>"></script>
    <!-- jQuery latest version -->
    <script src="<?php echo base_url().'assets/js/vendor/jquery-3.3.1.min.js' ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url().'assets/js/plugins.js' ?>"></script>
    <!-- Main js -->
    <script src="<?php echo base_url().'assets/js/main.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/vendor/magnific/jquery.magnific-popup.min.js' ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // $('.product_image').magnificPopup({
            //     type: 'image'
            // });
        });
    </script>   

</body>

</html>
