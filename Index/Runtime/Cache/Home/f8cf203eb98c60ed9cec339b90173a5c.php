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
<script type="text/javascript">
	var root = "/meituan";
</script>
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
						<a class='title' href="<?php echo U('Member/Account/index');?>">我的团购</a>
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
				<!--登录注册-->
					
				
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
					<!-- 购物车 -->
					<div  class='user-nav my-cart ' url="<?php echo U('Member/Cart/index');?>" id="my-cart" goodsUrl="<?php echo U('Home/Detail/index');?>" delCartUrl="<?php echo U('Member/Cart/del');?>">
						<a class='title' href="<?php echo U('Member/Cart/index');?>"><i>&nbsp;</i>购物车</a>
						<ul class="menu">
						</ul>
					</div>
			</div>
		</div>
	</div> 
	<!-- 导航结束 -->
	
	<!-- 载入公共头部文件-->
	<!-- 载入商品筛选-->
	<!-- 商品过滤开始 -->
	<div id="filter">
		<div class='hots'>
			<span>热门团购：</span>
			<div class='box'>
				
					<a href="<?php echo U('Index/Index/index');?>/cid/<?php echo ($v["cid"]); ?>"><?php echo ($v["cname"]); ?></a>
				
			</div>	
		</div>
		
		<div class='filter-box'>
			<div class='category filter-label'>
				<div class='filter-label-level-1'>
					<span><b></b>分类：</span>
					<div class='box'>
						<?php if(is_array($topCategory)): foreach($topCategory as $key=>$v): echo ($v); endforeach; endif; ?>
					</div>
				</div>
				
				<div class='filter-label-level-2'>
					<div class='box'>
						<?php if(is_array($soncid)): foreach($soncid as $key=>$v): echo ($v); endforeach; endif; ?>
					</div>
				</div>
				
			</div>
			<div class='locality filter-label'>
				<div class='filter-label-level-1'>
					<span><b></b>区域：</span>
					<div class='box'>
						<?php if(is_array($topLocality)): foreach($topLocality as $key=>$v): echo ($v); endforeach; endif; ?>
					</div>
				</div>
				
					<div class='filter-label-level-2'>
						<div class='box'>
							<?php if(is_array($sonlid)): foreach($sonlid as $key=>$v): echo ($v); endforeach; endif; ?>
						</div>
					</div>
				
			</div>
			<div class='price filter-label'>
				<div class='filter-label-level-1'>
					<span><b></b>价格：</span>
					<div class='box'>
						<?php if(is_array($price)): foreach($price as $key=>$v): echo ($v); endforeach; endif; ?>
					</div>
				</div>
			</div>	
			<div class='screen'>
				<div>
					<a class='active' href="<?php echo ($orderUrl['d']); ?>">默认排序</a>
					<a href="<?php echo ($orderUrl['b']); ?>">销量<b></b></a>
					<a href="<?php echo ($orderUrl['p_d']); ?>">价格<b></b></a>
					<a href="<?php echo ($orderUrl['p_u']); ?>">价格<b style="background-position:-45px -16px;"></b></a>
					<a style="border:0;" href="<?php echo ($orderUrl['t']); ?>">发布时间<b></b></a>
				</div>
			</div>
		</div>	
	</div>
	<!-- 商品过滤结束 -->
	<link href="/meituan/Index/Home/View/Public/css/index.css" type="text/css" rel="stylesheet" >
	<!-- 页面主体开始 -->
	<div id="main">
		<div class='content'>
			<?php if(is_array($goods)): foreach($goods as $key=>$v): ?><div class='item'>
				<div class='cover'>
					<a href="/meituan/index.php/Home/detail/index/gid/<?php echo ($v["gid"]); ?>"><img src=/meituan<?php echo ($v["big_img"]); ?>></a>
				</div>
				<a class='link' href="">
					<h3><?php echo ($v["main_title"]); ?></h3>
					<p class='describe'><?php echo ($v["sub_title"]); ?> </p>
				</a>
				<p class='detail'>
					<strong>¥<?php echo ($v["price"]); ?></strong>
					<span>门店价<span>-</span><del><?php echo ($v["old_price"]); ?></del></span>
					<a href=""></a>
				</p>
				<p class='total'>
					<strong><?php echo ($v["buy"]); ?></strong>
					人已参与
				</p>
			</div><?php endforeach; endif; ?>
			<div class='c'></div>
			<div class="page">
				<?php echo ($Page); ?>
			</div>
		</div>
		<div class='sidebar'>
			<div class='hot-products'>
				<h3>热卖商品</h3>
				<ul>
					<li>
						<h6><span>1</span><a href="">【2店通用】CGV星星国际影城电影</a></h6>
						<a href=""><img src="http://p1.meituan.net/deal/201301/04/173144_2860489.jpg"/></a>
						<div class='info'>
							<em>¥30</em>
							<p>每天<span>231</span>人团购</p>
						</div>
					</li>
					<li>
						<h6><span>1</span><a href="">【2店通用】CGV星星国际影城电影</a></h6>
						<a href=""><img src="http://p1.meituan.net/deal/201301/04/173144_2860489.jpg"/></a>
						<div class='info'>
							<em>¥30</em>
							<p>每天<span>231</span>人团购</p>
						</div>
					</li>
					<li>
						<h6><span>1</span><a href="">【2店通用】CGV星星国际影城电影</a></h6>
						<a href=""><img src="http://p1.meituan.net/deal/201301/04/173144_2860489.jpg"/></a>
						<div class='info'>
							<em>¥30</em>
							<p>每天<span>231</span>人团购</p>
						</div>
					</li>
					<li>
						<h6><span>1</span><a href="">【2店通用】CGV星星国际影城电影</a></h6>
						<a href=""><img src="http://p1.meituan.net/deal/201301/04/173144_2860489.jpg"/></a>
						<div class='info'>
							<em>¥30</em>
							<p>每天<span>231</span>人团购</p>
						</div>
					</li>
					<li>
						<h6><span>1</span><a href="">【2店通用】CGV星星国际影城电影</a></h6>
						<a href=""><img src="http://p1.meituan.net/deal/201301/04/173144_2860489.jpg"/></a>
						<div class='info'>
							<em>¥30</em>
							<p>每天<span>231</span>人团购</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class='c'></div>
	
	<div id="footer">
		<p>copyright : mariocisco</p>
	</div>
	</body>
</html>
</body>
</html>