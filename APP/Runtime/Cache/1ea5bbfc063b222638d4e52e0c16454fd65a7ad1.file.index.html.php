<?php /* Smarty version Smarty-3.1.6, created on 2015-06-26 09:50:37
         compiled from "./APP/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19063557be41928cd85-39923315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ea5bbfc063b222638d4e52e0c16454fd65a7ad1' => 
    array (
      0 => './APP/Home/View\\Index\\index.html',
      1 => 1435283420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19063557be41928cd85-39923315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_557be41993411',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557be41993411')) {function content_557be41993411($_smarty_tpl) {?><!doctype html>
<html>
    <head>
    	<meta charset='utf-8'>
    	<title>一号店</title>
        <link rel="stylesheet" type='text/css' href='<?php echo @__ROOT__;?>
/Public/css/font-awesome.min.css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo @__ROOT__;?>
/Public/css/home.css"/>
    </head>
    <body>
    <header>
		<div class="w">
			<div class="topFl fl">
				<div class="hdLogin fl">
					<span>Hi,请</span>
					<a href=''>登录</a>
					<small>/</small>
					<a href=''>注册</a>
					<em><i class='icon-angle-down'></i></em>
				</div>
				<div class="hd"></div>
			</div>
			<div class="topFr fr">
				<span>hi</span> 
				<span style="color:#f00;font-size:16px;font-weight:bold;">
				</span> welcome to here  <small>|</small>
				<a href="">安全退出</a>
				<a href="">个人中心</a>
			</div>
		</div>
	</header>

	<div class="hdNav w mt20">
	<a class='logo' href=''>
	    <img src='<?php echo @__ROOT__;?>
/Public/images/loginlogo.jpg'/>
	</a>
	<div class='fl hdNavFl'>
	    <form class="search" action='/home/goods/all.php#all' method="get">
	    	<i class='icon-search'></i>
	    	<input type="text" placeholder='5.1水果世界纪录日' name='search'/>
	    	<button id='searchBtn'>搜&nbsp;索</button>
	    </form>
	    <div class="keyword">
	        <a href=''>趣多多</a>
	        <a href=''>软抽</a>
	        <a href=''>日本</a>
	        <a href=''>费列罗</a>
	        <a href=''>手帕纸</a>
	        <a href=''>丰胸</a>
	        <a href=''>玉米片</a>
	        <a href=''>休闲食品</a>
	        <a href=''>手机存储卡</a>
	        <a href=''>开心果</a>
	    </div>
	</div>
	<div class="fr hdNavFr">
		<span>福利</span>
		<span><a href='act=order#userc'>订单查询</a></span>
		<span><i class='icon-shopping-cart'></i>&nbsp;<a href='
		'>购物车</a></span>
	</div>
	</div>
	<div class="clear"></div>

	<div class="navHead w mt20">
	<div class="all-product">
		<a href=''>所有商品分类<i class='icon-angle-down fr'></i></a>
	</div>
	<ul class="hd-nav">
	    <li><a href='' style="color:#ff3c3c;">首页</a></li>
	    <li><a href='' style="color:#ff3c3c;">自营超市</a></li>
	    <li><a href='' style="color:#ff3c3c;">1号团</a></li>
	    <li><a href=''>1号商城</a></li>
	    <li><a href=''>闪购</a></li>
	    <li><a href=''>活色生鲜</a></li>
	    <li><a href='<?php echo @__MODULE__;?>
/Code/index'>代码编辑</a></li>
	    <li><a href='<?php echo @__MODULE__;?>
/Model/index'>模块</a></li>
	    <li><a href='<?php echo @__MODULE__;?>
/Program/index/id/328'>软件技术</a></li>
	</ul>
	</div>
	<div class="clear"></div>
    </body>
</html> <?php }} ?>