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

	<!-- wishlist -->
	<div class="wishlist section">
		<div class="container">
			<div class="pages-head">
				<h3>WISHLIST</h3>
			</div>
			<div class="content">
				<div class="divider"></div>
				@if($res)
				@foreach($res as $v)
				<input type="hidden" name="id" value="{{$v->id}}">
				<div class="cart-2">
					<div class="row">
						<div class="col s5">
							<h5>Image</h5>
						</div>
						<div class="col s7">
							<img src="{{$v->file}}" >
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>Name</h5>
						</div>
						<div class="col s7">
							<h5><a href="">{{$v->username}}</a></h5>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>Stock Status</h5>
						</div>
						<div class="col s7">
						<input type="hidden" name="id" value="{{$v->id}}" id="id">
						<input type="hidden" name="num" value="{{$v->num}}" id="num">
						<input type="button" value="-" class="car_btn_1" style="width:40px;" id="less" />
						<input type="text" value="1" class="car_ipt" style='padding:0 20px;width:100px;' id="buy_num" />  
						<input type="button" value="+"  class="car_btn_2" style="width:40px;" id="add"/>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>Price</h5>
						</div>
						<div class="col s7">
							<h5>￥{{$v->price}}</h5>
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col s5">
							<h5>Total price</h5>
						</div>
						<div class="col s7">
					￥<b style="font-size:22px; color:#ff4e00;" id="price">{{$v->price}}</b>
						</div>
				</div>
					<div class="row">
						<div class="col 12">
							<button class="btn button-default" id="sub">SEND TO CART</button>
						</div>
					</div>
				</div>
				</div>
				@endforeach
				@endif
			</div>
		</div>
	</div>
	<!-- end wishlist -->

	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script>
		$(function(){
			//加号
			$('#add').click(function(){
				var buy_num=parseInt($('#buy_num').val());
				var num=$('#num').val();
				if(buy_num>=num){
					$(this).prop('disabled',true);
				}else{
					buy_num += 1;
					 $('#buy_num').val(buy_num);
					$('#less').prop('disabled',false);
				}
				total();
			})

			//减号
			$('#less').click(function(){
				var buy_num=parseInt($('#buy_num').val());
				var num=$('#num').val();
				if(buy_num<=1){
					$(this).prop('disabled',true);
				}else{
					buy_num -=1;
					$('#buy_num').val(buy_num);	
					$('#add').prop('disabled',false);
				}
				total();
			})
			//失去焦点
			$('#buy_num').blur(function(){
				var _this=$(this);
				var num=$('#num').val();
				var buy_num=_this.val();
				var reg=/^\d{1,}$/;
				//不是数字|| 为空|| 不能<=1
				if(!reg.test(buy_num)||buy_num==''||buy_num<=1)
				{
					_this.val(1);
				}else if(parseInt(num)<=parseInt(buy_num)){
					_this.val(num);
				}else{
					buy_num=parseInt(buy_num);
					_this.val(buy_num);
				}
				total();
			})
			//获取总价
			 function total(){
				var id=$('input[name=id]').val();
				var buy_num=$('#buy_num').val();
				$.get(
					"price",
					{id:id,buy_num:buy_num},
					function(res){
						$('#price').text(res);
					}
				)
			 }
			 //添加到数据库
			$('#sub').click(function(){
				var id=$('input[name=id]').val();
				var buy_num=$('#buy_num').val();

				$.get(
					"cartSave",
					{id:id,buy_num:buy_num,total:total},
					function(res){
						if(res.code==1){
							alert('购物成功');
							location.href="{{url('cart')}}";
						}else{
							return false;
						}
					}
				)
				return false;
			})
		})
	
	</script>
	
	@include('public/footer')