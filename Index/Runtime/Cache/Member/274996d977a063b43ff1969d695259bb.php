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
		<form action="<?php echo U('Member/Buy/checkBuy');?>" method="post">
		<div id="main">
			<div class='step'>
				<ul>
					<li>1.查看购物车 </li>
					<li class='current'>2.选择支付方式 </li>
					<li>3.购买成功 </li>
				</ul>
			</div>
			<ul class='buy-detail'>
				<?php if(is_array($order)): foreach($order as $key=>$v): ?><input type="hidden" name='orderid[]' value="<?php echo ($v["orderid"]); ?>" >
				<li>
 					<p>
						<span>项目名称：</span>
						<?php echo ($goods_name); ?>
					</p>
					
				
					<p>
						<span>商品数量：</span> <?php echo ($v["goods_num"]); ?>
					</p>

				</li><?php endforeach; endif; ?>
			</ul>
			<div class='total'>
				<p>支付方式：<strong>支付宝</strong></p>
				<p>总价：<strong>100</strong></p>
			</div>	
			<!-- 订单提交 -->
			<div class='bottom'>
				<input type="submit" class='submit' value="确认支付">
			</div>
		</div>
		</form>
	</div>	
</body>
</html>