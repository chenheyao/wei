	@include('public/body')
	<body>
		<div class="left">
			<div class="bigTitle">商圈后台管理系统</div>
			<div class="lines">
				<div onclick="pageClick(this)" class="active"><img src="img/icon-1.png" />业务人员管理</div>
				<div onclick="pageClick(this)"><img src="img/icon-2.png" />代理商品管理</div>
				<div onclick="pageClick(this)"><img src="img/icon-3.png" /> 
					<a href="{{url('admin/add')}}">个人信息管理</a>
				</div>
				<div onclick="pageClick(this)"><img src="img/icon-4.png" />收货地址管理</div>
				<div onclick="pageClick(this)"><img src="img/icon-5.png" />在售门店管理</div>
			</div>
		</div>
		<div class="top">
			<div class="leftTiyle" id="flTitle">业务人员管理</div>
			<div class="thisUser">当前用户：小UU</div>
		</div>
		<div class="content">HELLO WORD</div>
		
		<div style="text-align:center;">
<p>更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
		
	</body>

</html>