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
	
<!-- 载入公共头部文件结束 -->
	<link href="/meituan/Index/Home/View/Public/css/detail.css" type="text/css" rel="stylesheet" >
	<script type="text/javascript" src="/meituan/Index/Home/View/Public/js/detail.js"></script>
	<script type="text/javascript">
		var CartURL = '/meituan/index.php/Member/Cart/add';
	</script>
	<div id="map" class='position'>
		<a href="/meituan/index.php/Home /Index/index/"><?php echo ($detail["lname"]); ?></a><span>»</span><a href="电影团购"><?php echo ($detail["cname"]); ?></a><span>»</span><a href="网票网"><?php echo ($detail["shopname"]); ?></a>
	</div>
	<div id="content" class='position' style="height:3000px;">
		<div class='content-left'>
			<div class="goods-intro">
				<div class='goods-title'>
					<h1><?php echo ($detail["main_title"]); ?>
					</h1>
					<h3><?php echo ($detail["sub_title"]); ?></h3>
				</div>
				<div class='deal-intro'>
					<div class='buy-intro'>
						<div class='price'>
							<div class='discount-price'>
								<span>¥</span><?php echo ($detail["price"]); ?>
							</div>
							<div class='cost-price'>
								<span class='discount'><?php echo ($detail["discount"]); ?>折</span>
								门店价<b>¥<?php echo ($detail["old_price"]); ?></b>
							</div>
						</div>
						<div class='deal-buy-cart'>
							<a href="/meituan/index.php/Member/Buy/index/gid/<?php echo ($detail["gid"]); ?>" class='buy'></a>
							<a href='javascript:void(0);' url="/meituan/index.php/Member/Cart/add/gid/<?php echo ($detail["gid"]); ?>"  class='cart' id='addCart'></a>
						</div>
						<div class='purchased'>
							<p class='people'>
								<span><?php echo ($detail["buy"]); ?></span>人已团购
							</p>
							<p class='time'>
								剩余<span>3</span>天以上
							</p>
						</div>
						<ul class='refund-intro'>
						<?php if(is_array($detail['server'])): foreach($detail['server'] as $key=>$v): ?><li>
								<?php echo ($v["image"]); ?>
								<span class='text'>
									<?php echo ($v["name"]); ?>
								</span>
							</li><?php endforeach; endif; ?>
						</ul>
					</div>
					<div class='image-intro'>
						<img src="/meituan<?php echo ($detail["max_img"]); ?>"/>
					</div>
				</div>
				<div class='collect'>
					<a class='collect-link' href=''><i></i>收藏本单</a>
					
					<div class='share'>
						
					</div>
					
				</div>
			</div>
			<div class='detail'>
				<ul class='plot-points'>
					<li class='active'><a href="#shop-site">商家位置</a></li>
					<li><a href="#details">本单详情</a></li>
					<li><a href="#comment">消费评价</a></li>
				</ul>
				<div id="shop-site" class='shop-site'>
					<p class='site-title'>商家位置</p>
					<div class='box'>
						<div class='map' id="allmap">
							
						</div>
						<div class='info'>
							<h3><?php echo ($detail["shopname"]); ?></h3>
							<dl>
								<dt>地址:</dt>
								<dd><?php echo ($detail["shopaddress"]); ?></dd>
							</dl>
							<dl>
								<dt>地铁:</dt>
								<dd><?php echo ($detail["metroaddress"]); ?></dd>
							</dl>
							<dl>
								<dt>电话:</dt>
								<dd><?php echo ($detail["shoptel"]); ?></dd>
							</dl>
						</div>
					</div>
				</div>
				<div id="details"  class='details'>
					<img src="/meituan/Public/images/goods.png">
					<?php echo ($detail["detail"]); ?>
				</div>
				<div id="comment" class='comment'>
					<div class='comment-list-title'>
						<span>全部评价</span>
						<a class='order-time' href="">按时间<i></i></a>
					</div>
					<div class='comment-list'>
						<div class='list-con'>
							<div class='con-top'>
								<span class='username'>sdas</span>
								<span class='time'>评价于:<em>2013-08-04</em></span>
							</div>
							<p>
								说是香草拿铁不是很苦，结果根本不是想象中的味道！像速溶冲调！还要另加五元？有此一说吗？银座店环境一般！
							</p>
						</div>
						
					</div>
					<div class='comment-page'>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
						<a href="">1</a>
					</div>
				</div>
			</div>
		
		</div>
		<div class='content-right'>
			<div class='recommend'>
				<h3 class='recommend-title'>
					看过本团购的用户还看了
				</h3>
				<div class='recommend-goods'>
					<a class='goods-image' href="">
						<img alt="图像加载失败.." src="http://p0.meituan.net/200.121/deal/__5738304__3391447.jpg">
					</a>
					<h4>
						<a href="">【五道口】上岛咖啡：双人下午茶套餐，美味齐分享</a>
					</h4>
					<p>
						<strong>¥39.8</strong>
						<span class='cost-price'>门店价<del>144</del></span>
						<span class='num'>
							<span>173</span>
							 人已团购
						</span>
					</p>
				</div>
			</div>
		</div>
	<div class="c"></div>
	<div id="cover"></div>
	<div id="infoWindow"></div>
		
		
	</div>		

<!-- Ad Muncher content start --><script type="text/javascript" src="http://interceptedby.admuncher.com/88DB1EF111E047B3/helper.js#0.94128.0" id="zZxw_MainScript"></script><link rel="stylesheet" href="http://interceptedby.admuncher.com/88DB1EF111E047B3/helper.css" type="text/css" media="all" /><!-- Ad Muncher content end -->
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=neorXwKoXrDCSQBkB0MwRyLuIOdLowtv"></script>
<script>
		var cartSucc = "<div class='colse'><a href='javascript:hideInfoWindow();'></a></div>\
			<ul class='status'>\
			<li class='ico'></li>\
			<li class='msg'>\
				<h3>添加成功!</h3>\
				<p>购物车内共有<span id='total'></span>种商品</p>\
			</li>\
		</ul>\
		<div class='goBtn'>\
			<a href='javascript:hideInfoWindow();'>继续浏览</a>\
			<a href='{|U('Member/Cart/index')}'>查看购物车</a>\
		</div>";
		var collectSucc = "<div class='colse'><a href='javascript:hideInfoWindow();'></a></div>\
			<ul class='status'>\
			<li class='ico'></li>\
			<li class='msg'>\
				<h3>收藏成功!</h3>\
			</li>\
		</ul>\
		<div class='goBtn'>\
			<a href='javascript:hideInfoWindow();'>继续浏览</a>\
			<a href='{|U('Member/Index/collect')}'>查看我的收藏</a>\
		</div>";
		var isLogin = false;
		<?php if($isLogin == 1): ?>isLogin = true;<?php endif; ?>
</script>
<script type="text/javascript">
	// 百度地图API功能
	 var coordinate = "<?php echo ($detail["coordinate"]); ?>";
	  var a = coordinate.replace(/&quot;/g,'"');
	  var obj = JSON.parse(a);
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(obj.lng, obj.lat), 11);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

	var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
	var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
	/*缩放控件type有四种类型:
	BMAP_NAVIGATION_CONTROL_SMALL：仅包含平移和缩放按钮；BMAP_NAVIGATION_CONTROL_PAN:仅包含平移按钮；BMAP_NAVIGATION_CONTROL_ZOOM：仅包含缩放按钮*/
	
	//添加控件和比例尺
		map.addControl(top_left_control);        
		map.addControl(top_left_navigation);        

	var point = new BMap.Point(obj.lng, obj.lat);
	map.centerAndZoom(point, 15);
	var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);               // 将标注添加到地图中
	marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
</script>











<!-- 载入公共头部文件开始 --> 
	
	<div id="footer">
		<p>copyright : mariocisco</p>
	</div>
	</body>
</html>
<!-- 载入公共头部文件结束 -->