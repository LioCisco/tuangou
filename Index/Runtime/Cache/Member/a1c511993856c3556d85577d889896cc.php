<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/meituan/Public/css/reset.css" type="text/css" rel="stylesheet" >
<link href="/meituan/Public/css/common.css" type="text/css" rel="stylesheet" >
<script type="text/javascript" src="/meituan/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/meituan/Public/js/common.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php echo ($webInfo["title"]); ?></title>

</head>
<body>
	<!-- 顶部开始 -->
	<div id="top">
		<div class='position'>
			<div class='left'>
				COPYRIGHT：MARIO CISCO
			</div>
			<div class='right'>
				<a href="javascript:addFavorite2();">收藏</a>
			</div>
		</div>
	</div>
	<!-- 顶部结束 -->
	<!-- 头部开始 -->
	<div id="header">
		<div class='position'>
			<div class='logo'>
				<a style="line-height:60px;" href="/meituan">MARIO团购</a>
				<a style="font-size:16px;" href="/meituan">www.github/mariocisco.com</a>
			</div>
			<div class='search'>
				<div class='item'>
					<a href="">小时代</a>
					<a href="">KTV</a>
					<a href="">电影</a>
					<a href="">全聚德</a>
				</div>
				<div class='search-bar'>
					<input class='s-text' type="text" name="keywords" value="请输入商品名称，地址等">
					<input class='s-submit' type="submit" value='搜索'>
				</div>
			</div>
			<div class='commitment'>
				
			</div>
		</div>
	</div>
	<!-- 头部结束 -->
	<!-- 导航开始-->
	<div id="nav">
		<div class='position'>
			<!-- 分类相关 -->
			<div class='category'>
				<a class='active' href="/meituan">首页</a>
				<a href="http://localhost/hdtg/index.php/Index/Index/category/cid/11">美食</a>
				<a href="http://localhost/hdtg/index.php/Index/Index/category/cid/13">电影</a>
				<a href="http://localhost/hdtg/index.php/Index/Index/category/cid/14">KTV</a>
				<a href="http://localhost/hdtg/index.php/Index/Index/category/cid/15">酒店</a>
				<a href="http://localhost/hdtg/index.php/Index/Index/category/cid/16">休闲娱乐</a>
			</div>
			<!-- 用户相关 -->
			<div id="user-relevance" class='user-relevance'>
				
				<?php if($isLogin == 0): ?><div class='user-nav login-reg'>
						<a class='title' href="<?php echo U('Member/Reg/index');?>">注册</a>
					</div>
					<div class='user-nav login-reg'>	
						<a class='title' href="<?php echo U('Member/Login/index');?>">登录</a>
					</div>
				<?php else: ?>
					<div class='user-nav login-reg'>
						<a class='title' href="<?php echo U('Member/Login/logout');?>">注销</a>
					</div>
					<!--我的团购 -->	
					<div class='user-nav my-hdtg '>
						<a class='title' href="">我的团购</a>
						<ul class="menu">
							<li><a href="">我的订单</a></li>	
							<li><a href="">我的评价</a></li>
							<li><a href="">我的收藏</a></li>
							<li><a href="">我的成长</a></li>
							<li><a href="">账户余额</a></li>
							<li><a href="">账户充值</a></li>
							<li><a href="">账户设置</a></li>
						</ul>
					</div><?php endif; ?>
				<!-- 最近浏览 -->	
					<div  class='user-nav recent-view '>
						<a class='title' href="">最近浏览</a>
						<ul class="menu">
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><del>36</del></span>
								</div>					
							</li>
							<p class='clear'><a href="">清空最近浏览记录</a></p>
						</ul>
					</div>
					<div  class='user-nav my-cart '>
						<a class='title' href=""><i>&nbsp;</i>购物车</a>
						<ul class="menu">
							<li>
								<a class='image' href="">
									<img src="http://p1.meituan.net/80.50/deal/__10119572__2038276.jpg" />
								</a>
								<div>
									<h4>
										<a href="">上岛咖啡双人下午茶套餐，五道口</a>
									</h4>
									<span><strong>¥25</strong><a href="">删除</a></span>
								</div>					
							</li>
							<p class='clear'><a href="">查看我的购物车</a></p>
						</ul>
					</div>
			</div>
		</div>
	</div> 
	<!-- 导航结束 -->
	
	<!-- 载入公共头部文件-->
	<link href="/meituan/Index/Member/View/Public/css/buy.css" type="text/css" rel="stylesheet" >
	<div class='position'>
		<form method="post" action="<?php echo U('Member/Buy/payment');?>">
			<input type="hidden" name="gid" value="<?php echo ($goods["gid"]); ?>">
			<input type="hidden" name="goods_name" value="<?php echo ($goods["main_title"]); ?>">
			<input type="hidden" name="price" value="<?php echo ($goods["price"]); ?>">
			<div id="main">
				<div class='step'>
					<ul>
						<li class='current'>1.查看订单 </li>
						<li>2.选择支付方式 </li>
						<li>3.购买成功 </li>
					</ul>	
				</div>
				
				<table class='buy-table' border=0>
				<thead>
					<tr>
						<th>项目</th>
						<th width='20%' style="text-align:left;">数量</th>
						<th width='20%'>单价</th>
						<th width='10%'>总价</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="/meituan/index.php/Home/Detail/index/gid/<?php echo ($goods["gid"]); ?>"><?php echo ($goods["main_title"]); ?></a>
						</td>
						<td class='goods-num'>
							<a href="javascript:void(0);" class='reduce' id="reduce"></a>
							<input id="goods_num" name="goods_num" type="text" value=1> 
							<a href="javascript:void(0);" class='add' id="add"></a>
						</td>
						<td><?php echo ($goods["price"]); ?></td>
						<td><?php echo ($goods["price"]); ?></td>
					</tr>
				</tbody>
				</table>
				<div class='address-list'>
				<table>
					<thead>
						<tr>
							<th>选择</th>
							<th width="20%">收货人</th>
							<th>地址/邮编</th>
							<th width="20%">电话/手机</th>
							<th width="20%">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($address)): foreach($address as $key=>$v): ?><tr>
							<td>
								<input type="radio" checked=true name="addressid" value="<?php echo ($v["addressid"]); ?>">
							</td>
							<td>
								<?php echo ($v["consignee"]); ?>
							</td>
							<td>
							<?php echo ($v["province"]); ?>-<?php echo ($v["city"]); ?>-<?php echo ($v["county"]); ?>-<?php echo ($v["street"]); ?>
							</td>
							<td>
								<?php echo ($v["tel"]); ?>
							</td>
							<td>
								<a href="/meituan/index.php/Member/Account/delAddress/addressid/<?php echo ($v["addressid"]); ?>">删除</a>
							</td>
						</tr><?php endforeach; endif; ?>
					</tbody>
				</table>	
				</div>
				
				<!-- 订单提交 -->
				<div class='bottom'>
					<input type="submit" class='submit' value="提交订单">
				</div>
			</div>
		</form>
	</div>
	<script>
		$('#reduce').click(function(){
			var num = Number($('#goods_num').val());
			if(num<=1){
				return false;
			}
			$('#goods_num').val(num-1)
		})
		$('#add').click(function(){
			var num = Number($('#goods_num').val());
			$('#goods_num').val(num+1)
		})
	</script>
</body>
</html>