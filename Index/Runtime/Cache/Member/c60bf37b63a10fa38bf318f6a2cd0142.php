<?php if (!defined('THINK_PATH')) exit();?>	
	<!-- 载入公共头部文件-->
	<link href="/meituan/Index/Member/View/Public/css/buy.css" type="text/css" rel="stylesheet" >
	<div class='position'>
		<div id="main">
			<div class='step'>
				<ul>
					<li>1.查看购物车 </li>
					<li>2.选择支付方式 </li>
					<li class='current'>3.购买成功 </li>
				</ul>	
			</div>
			<div class="buysuccess">
				购买成功 <a href="{|U('Member/Order/index')}">查看订单</a>				
			</div>
		</div>
	</div>	
</body>
</html>