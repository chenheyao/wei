    @include('public/header')


	<!-- navbar bottom -->
	<div class="navbar-bottom">
		<div class="row">
			<div class="col s2">
				<a href="index.html"><i class="fa fa-home"></i></a>
			</div>
			<div class="col s2">
				<a href="wishlist.html"><i class="fa fa-heart"></i></a>
			</div>
			<div class="col s4">
				<div class="bar-center">
					<a href="#animatedModal" id="cart-menu"><i class="fa fa-shopping-basket"></i></a>
					<span>2</span>
				</div>
			</div>
			<div class="col s2">
				<a href="contact.html"><i class="fa fa-envelope-o"></i></a>
			</div>
			<div class="col s2">
				<a href="#animatedModal2" id="nav-menu"><i class="fa fa-bars"></i></a>
			</div>
		</div>
	</div>
	<!-- end navbar bottom -->

	<!-- menu -->
	<div class="menus" id="animatedModal2">
		<div class="close-animatedModal2 close-icon">
			<i class="fa fa-close"></i>
		</div>
		<div class="modal-content">
			<div class="container">
				<div class="row">
					<div class="col s4">
						<a href="index.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-home"></i>
								</div>
								Home
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="product-list.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bars"></i>
								</div>
								Product List
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="shop-single.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-eye"></i>
								</div>
								Single Shop
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="wishlist.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-heart"></i>
								</div>
								Wishlist
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="cart.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-shopping-cart"></i>
								</div>
								Cart
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="checkout.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-credit-card"></i>
								</div>
								Checkout
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="blog.html" class="button-link">	
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bold"></i>
								</div>
								Blog
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="blog-single.html" class="button-link">	
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-file-text-o"></i>
								</div>
								Blog Single
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="error404.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-hourglass-half"></i>
								</div>
								404
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="testimonial.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-support"></i>
								</div>
								Testimonial
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="about-us.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								About Us
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="contact.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								Contact
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="setting.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-cog"></i>
								</div>
								Settings
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="login.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-sign-in"></i>
								</div>
								Login
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="register.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user-plus"></i>
								</div>
								Register
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end menu -->

	<!-- cart menu -->
	<div class="menus" id="animatedModal">
		<div class="close-animatedModal close-icon">
			<i class="fa fa-close"></i>
		</div>
		<div class="modal-content">
			<div class="cart-menu">
				<div class="container">
					<div class="content">
						<div class="cart-1">
							<div class="row">
								<div class="col s5">
									<img src="index/img/cart-menu1.png" alt="">
								</div>
								<div class="col s7">
									<h5><a href="">Fashion Men's</a></h5>
								</div>
							</div>
							<div class="row quantity">
								<div class="col s5">
									<h5>Quantity</h5>
								</div>
								<div class="col s7">
									<input value="1" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Price</h5>
								</div>
								<div class="col s7">
									<h5>$20</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Action</h5>
								</div>
								<div class="col s7">
									<div class="action"><i class="fa fa-trash"></i></div>
								</div>
							</div>
						</div>
						<div class="divider"></div>
						<div class="cart-2">
							<div class="row">
								<div class="col s5">
									<img src="index/img/cart-menu2.png" alt="">
								</div>
								<div class="col s7">
									<h5><a href="">Fashion Men's</a></h5>
								</div>
							</div>
							<div class="row quantity">
								<div class="col s5">
									<h5>Quantity</h5>
								</div>
								<div class="col s7">
									<input value="1" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Price</h5>
								</div>
								<div class="col s7">
									<h5>$20</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Action</h5>
								</div>
								<div class="col s7">
									<div class="action"><i class="fa fa-trash"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="total">
						<div class="row">
							<div class="col s7">
								<h5>Fashion Men's</h5>
							</div>
							<div class="col s5">
								<h5>$21.00</h5>
							</div>
						</div>
						<div class="row">
							<div class="col s7">
								<h5>Fashion Men's</h5>
							</div>
							<div class="col s5">
								<h5>$21.00</h5>
							</div>
						</div>
						<div class="row">
							<div class="col s7">
								<h6>Total</h6>
							</div>
							<div class="col s5">
								<h6>$41.00</h6>
							</div>
						</div>
					</div>
					<button class="btn button-default">Process to Checkout</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart menu -->
	
	<!-- slider -->
	<div class="slider">
		
		<ul class="slides">
			<li>
				<img src="index/img/slide1.jpg" alt="">
				<div class="caption slider-content  center-align">
					<h2>WELCOME TO MSTORE</h2>
					<h4>Lorem ipsum dolor sit amet.</h4>
					<a href="" class="btn button-default">SHOP NOW</a>
				</div>
			</li>
			<li>
				<img src="index/img/slide2.jpg" alt="">
				<div class="caption slider-content center-align">
					<h2>JACKETS BUSINESS</h2>
					<h4>Lorem ipsum dolor sit amet.</h4>
					<a href="" class="btn button-default">SHOP NOW</a>
				</div>
			</li>
			<li>
				<img src="index/img/slide3.jpg" alt="">
				<div class="caption slider-content center-align">
					<h2>FASHION SHOP</h2>
					<h4>Lorem ipsum dolor sit amet.</h4>
					<a href="" class="btn button-default">SHOP NOW</a>
				</div>
			</li>
		</ul>

	</div>
	<!-- end slider -->

	<!-- features -->
	<div class="features section">
		<div class="container">
			<div class="row">
				<div class="col s6">
					<div class="content">
						<div class="icon">
							<i class="fa fa-car"></i>
						</div>
						<h6>Free Shipping</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<div class="icon">
							<i class="fa fa-dollar"></i>
						</div>
						<h6>Money Back</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>
			</div>
			<div class="row margin-bottom-0">
				<div class="col s6">
					<div class="content">
						<div class="icon">
							<i class="fa fa-lock"></i>
						</div>
						<h6>Secure Payment</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<div class="icon">
							<i class="fa fa-support"></i>
						</div>
						<h6>24/7 Support</h6>
						<p>Lorem ipsum dolor sit amet consectetur</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->

	<!-- quote -->
	<div class="section quote">
		<div class="container">
			<h4>FASHION UP TO 50% OFF</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid ducimus illo hic iure eveniet</p>
		</div>
	</div>
	<!-- end quote -->


	<!-- product -->
	<div class="section product">
		<div class="container">
			<div class="section-head">
				<h4>TOP PRODUCT</h4>
				<div class="divider-top"></div>
				<div class="divider-bottom"></div>
			</div>
			@if($data)
			<div class="row">
			@foreach($data as $k=>$v)
			<input type="hidden" name="id" value="{{$v->id}}">
				<div class="col s6">
					<div class="content">
						<img src="{{$v->file}}" >
						<h6><a href="">{{$v->num}}</a></h6>
						<div class="price">
							{{$v->price}} <span></span>
						</div>
						<button class="btn button-default"><a href="{{url('indexSave?id=')}}{{$v->id}}" style="color:red;">ADD TO CART</a></button>
					</div>
				</div>
			
			@endforeach
			</div>
			@endif
			<div class="pagination-product">
				<ul>
					<li class="active">1</li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end product -->
	
	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->
	
	
@include('public/footer')