<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VIETPRO STORE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Animate.css -->
	<link href="{{ asset('/frontend/css/animate.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="css/animate.css"> --}}
	<!-- Icomoon Icon Fonts-->
	<link href="{{ asset('/frontend/css/icomoon.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="css/icomoon.css"> --}}
	<!-- Bootstrap  -->
	<link href="{{ asset('/frontend/css/bootstrap.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}

	<!-- Magnific Popup -->
	<link href="{{ asset('/frontend/css/magnific-popup.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}

	<!-- Flexslider  -->
	<link href="{{ asset('/frontend/css/flexslider.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="css/flexslider.css"> --}}

	<!-- Theme style  -->
	<link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="css/style.css"> --}}
	<link href="{{ asset('/frontend/css/custome.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="css/custome.css"> --}}

</head>

<body>
	<!--header -->
	<div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html"><img src="images/logo.png" alt="" style="width: 300px;height: 50px;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Trang chủ</a></li>
								<li class="has-dropdown">
									<a href="shop.html">Cửa hàng</a>
									<ul class="dropdown">
										<li><a href="cart.html">Giỏ hàng</a></li>
										<li><a href="checkout.html">Thanh toán</a></li>

									</ul>
								</li>
								<li><a href="about.html">Giới thiệu</a></li>
								<li><a href="contact.html">Liên hệ</a></li>
								<li><a href="cart.html"><i class="icon-shopping-cart"></i> Giỏ hàng [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/bg-03.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg-01.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg-02.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
		<!-- End header -->
		<!-- main -->
		<div id="colorlib-featured-product">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="shop.html" class="f-product-1" style="background-image: url(images/i1.jpg);">
							<div class="desc">
								<h2>Mẫu <br>cho <br>Nam</h2>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<a href="" class="f-product-2" style="background-image: url(images/i2.jpg);">
									<div class="desc">
										<h2> <br>Váy <br> Mới</h2>
									</div>
								</a>
							</div>
							<div class="col-md-6">
								<a href="" class="f-product-2" style="background-image: url(images/i3.jpg);">
									<div class="desc">
										<h2>Sale <br>20% <br>off</h2>
									</div>
								</a>
							</div>
							<div class="col-md-12">
								<a href="" class="f-product-2" style="background-image: url(images/i4.jpg);">
									<div class="desc">
										<h2>Giầy <br>cho <br>Nam</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/banner-1.jpg);"
			data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">Dặt hàng hôm nay,nhận ngay khuyến mãi!</h3>
									<p>Đã có hơn 1000 đơn hàng được gửi đi ở khắp quốc gia.</p>
									<p><a href="shop.html" class="btn btn-primary">Mua ngay</a> <a href="#"
											class="btn btn-primary btn-outline">Đọc
											thêm</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Sản phẩm Nổi bật</span></h2>
						<p>Đây là những sản phẩm được ưa chuộng nhất năm 2019</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/quan-kaki-xanh-den-qk171-9771.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Quần kaki xanh đen</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-so-mi-trang-kem-asm836-8193.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo trắng kẻ vằn</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/6ds19c007.jpg);">

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo nữ trắng bạch</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-nu-so-mi-co-co-duc.jpg);">

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo sơ mi có cổ kẻ ô xám</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Sản phẩm mới</span></h2>
						<p>Đây là những sản phẩm mới của năm năm 2019</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-so-mi-trang-kem-asm836-8193.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo trắng kẻ vằn</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/6ds19c007.jpg);">
								<p class="tag"><span class="new">New</span></p>

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo nữ trắng bạch</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-nu-so-mi-co-co-duc.jpg);">
								<p class="tag"><span class="new">New</span></p>

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo sơ mi có cổ kẻ ô xám</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/dam_nu_xoe_dep.jpg);">
								<p class="tag"><span class="new">New</span></p>

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Váy đầm xoè hoa nổi</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/Ao_nu_so_mi_cham_bi.jpg);">
								<p class="tag"><span class="new">New</span></p>

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo nữ chấm bi</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-nu-phoi-vien.jpg);">
								<p class="tag"><span class="new">New</span></p>

								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo nữ nổi viền</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-so-mi-ca-ro-xam-xanh-asm1228-10199.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo sơ mi ca rô xám xanh</a></h3>
								<p class="price"><span>3.000.000 đ</span> </p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ao-so-mi-hoa-tiet-den-asm1223-10191.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="detail.html"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="detail.html">Áo hoạ tiết đen</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end main -->

		<!-- subscribe -->
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Đăng ký nhận bản tin</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email"
												placeholder="Nhập email của bạn">
											<button type="submit" class="btn btn-primary">Đăng ký</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end  subscribe -->
		<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Giới thiệu</h4>
						<p>VIETPRO STORE cửa hàng kinh doanh quần áo luôn mang tới sự hài lòng cho khách hàng về chất
							lượng sản phẩm, quần
							áo đều mang thương hiệu made in Việt Nam đẹp cả về kiểu cách lẫn chất lượng, nên sẽ giúp cho
							bạn trở nên xinh
							đẹp hơn..</p>
						<p>
							<ul class="colorlib-social-icons">
							
								<li><a href="https://www.facebook.com/vietpro.edu/"><i class="icon-facebook"></i></a></li>
								
								<li><a href="https://www.youtube.com/channel/UCLjRjXUSy3g9iKRWTyw75Nw"><i class="icon-youtube"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Chăm sóc khách hàng</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Liên hệ </a></li>
								<li><a href="#">Giao hàng/ Đổi hàng</a></li>
								<li><a href="#">Mã giảm giá</a></li>
								<li><a href="#">Sản phẩm yêu thích</a></li>
								<li><a href="#">Đặc biệt</a></li>
							
							
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Thông tin</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Về chúng tôi</a></li>
								<li><a href="#">Thông tin vận chuyển</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Hỗ trợ</a></li>

							</ul>
						</p>
					</div>
					<div class="col-md-4">
						<h4>Thông tin liên hệ</h4>
						<ul class="colorlib-footer-links">
							<li>Số nhà B8A ngõ 18 đường Võ Văn Dũng - Hoàng Cầu - Đống Đa - Hà Nội</li>
							<li><a href="tel://1234567920">0988 550 553</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">http://vietpro.edu.vn</a></li>
						</ul>
					</div>
				</div>
			</div>

		</footer>
		<!--end  footer -->
	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>