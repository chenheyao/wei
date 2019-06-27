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
	<!-- cart -->
	<div class="cart section">
		<div class="container">
			<div class="pages-head">
				<h3>订单列表</h3>
			</div>
			<div class="content">
				<div class="cart-1">
					<div class="row">
						<div class="col s5">
							<h5>订单编号</h5>
						</div>
						<div class="col s7">
							<h5>{{$data->num}}</h5>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>订单状态</h5>
						</div>
						<div class="col s7">
							<h5>@if($data->sta == 1)未支付@else已支付</a>@endif</h5>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>倒计时</h5>
						</div>
						<div class="col s7">
						<span class="f1">
						<span class="times" oid="{{$data->num}}"  order-state="{{$data->sta}}"  end-time="{{date('Y/m/d H:i:s',$data->time+29500)}}"></span>后过期
						</span>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>订单金额</h5>
						</div>
						<div class="col s7">
							<h5>{{$total}}</h5>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>操作</h5>
						</div>
						<div class="col s7">
						<h5><i class="fa fa-trash del"><a href="{{url('delete',$data->d_id)}}">删除</a></i></h5>
						</div>
					</div>
				</div>
			</div>
			<div class="total">
			<button class="btn button-default"><a href="{{url('pay?=')}}{{$data->d_id}}" style="color:red;">Process to Checkout</a></button>
			</div>
	</div>

	<!-- end cart -->
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script>
	
    $(function(){
		$.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
  getTime();//调用函数
  function getTime(){
	  $(".times").each(function(){
	  var _this = $(this);
	  var end_time = _this.attr('end-time'); //结束时间
	  var state = _this.attr('order-state'); //订单状态
	  var oid = parseInt(_this.attr('oid'));//订单号
	  var endDate = new Date(end_time);
	   endDate = endDate.getTime();//1970-截止时间  从1970年到截止时间有多少毫秒

	//获取一个现在的时间
	var nowdate = new Date;
	// alert(endDate)
	nowdate = nowdate.getTime(); //现在时间-截止时间  从现在到截止时间有多少毫秒

	//获取时间差 把毫秒转换为秒
	var diff = parseInt((endDate - nowdate) / 1000);
	if(diff <= 0 ){
		//window.location.reload();	
		// alert(oid)	
		$.ajax({
				url:"{{url('home/orderdate')}}",
				type:"get",
				dataType:"json",
				data:{oid:oid},
				success:function(msg){
					// alert(msg);
				}
			});
		_this.parent('.f1').html('已过期');
	}

		h = parseInt(diff / 3600);//获取还有小时
		m = parseInt(diff / 60 % 60);//获取还有分钟
		s = diff % 60;//获取多少秒数

		//将时分秒转化为双位数
		h = setNum(h);
		m = setNum(m);
		s = setNum(s);
		//输出时分秒
		_this.html(m + "分" + s + "秒");
	});
	window.setTimeout(function() {
		getTime();
	}, 1000);
}
	//window.setTimeout(getTime, 1000);
	//设置函数 把小于10的数字转换为两位数
	function setNum(num) {
		if (num < 10) {
			num = "0" + num;
		}
		return num;
	}
	});
	</script>
	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->
	@extends('public/footer')