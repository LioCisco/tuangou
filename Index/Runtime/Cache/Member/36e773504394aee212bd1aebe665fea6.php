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
	<link href="/meituan/Index/Member/View/Public/css/reg.css" type="text/css" rel="stylesheet" >
	<script src="/meituan/Index/Member/View/Public/js/regCheck.js"></script> 
	<script>
		function changeCode(){
			var src = '/meituan/index.php/Member/Reg/showCode/mt/'+Math.random();
			$(this).attr('src',src);
		}
		var __JSCONTROL__ = '/meituan/index.php/Member/Reg';
	</script>
	
	<div id="regBox">
		<div class='header'>
			已有本站账号?<a href="">登录</a>
		</div>
		<div class='form'>
		<form action="<?php echo U('Member/Reg/addUser');?>" method="post" id="regForm">
			<dl class='focus'>
				<dt>邮箱</dt>
				<dd class='text'><input class='must' type="text" ajax=1   name="email" /></dd>
				<dd class='prompt'>用于登录和找回密码，不会公开</dd>
			</dl>
			<dl>
				<dt>用户名</dt>
				<dd class='text'><input class='must' type="text"  ajax=1   name="username" /></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>创建密码</dt>
				<dd class='text'><input class='must' id="password" type="password" name="password"/></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>确认密码</dt>
				<dd class='text'><input class='must' type="password" name="password_d"/></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>验证码</dt>
				<dd class='text code' style="width:200px;"><input ajax=1  style="float:left;" class='must' type="text"  name="code"/><img onclick="changeCode.call(this);" style="float:left;margin:0px 10px; width:80px;height:28px;" src="<?php echo U('Member/Reg/showCode');?>"></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt></dt>
				<dd class='submit'><input type="submit" value="注册"></dd>
			</dl>
		</form>
		</div>
	</div>
</body>
</html>