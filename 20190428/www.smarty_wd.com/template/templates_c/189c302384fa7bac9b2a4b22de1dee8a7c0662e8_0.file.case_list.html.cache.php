<?php
/* Smarty version 3.1.28, created on 2019-04-28 14:56:29
  from "C:\phpStudy\WWW\b1901\20190428\www.smarty_wd.com\template\templates\case_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5cc54e9d2b7c08_66396808',
  'file_dependency' => 
  array (
    '189c302384fa7bac9b2a4b22de1dee8a7c0662e8' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\b1901\\20190428\\www.smarty_wd.com\\template\\templates\\case_list.html',
      1 => 1556434587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc54e9d2b7c08_66396808 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '148285cc54e9d246763_05487146';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆-案例列表页</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/playImg.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/case_list.css">
	<link rel="stylesheet" href="css/playImg.css">
</head>
<body>
	<div class="container">
		<header>
			<div class="head_nav" id="head_scroll">
				<a href="index.html">
					<img src="images/logo_01.png" alt="">
				</a>
				<nav>
					<a href="index.html">网站首页</a>
					<a href="case_list.html">案例展示</a>
					<a href="about.html">关于我们</a>
					<a href="new_list.html">资讯动态</a>
					<a href="contact.html">联系我们</a>
				</nav>
			</div>
			<div class="banner">
				<div id="con">
					<ul>
						<li><img id="img_one" src="images/banner_01.jpg" alt=""></li>
						<li><img src="images/banner_02.jpg" alt=""></li>
						<li><img src="images/banner_03.jpg" alt=""></li>
						<li><img src="images/banner_02.jpg" alt=""></li>
						<li><img src="images/banner_01.jpg" alt=""></li>
					</ul>
					<a id="prev" href="javascript:;"><img src="images/ban_prev.png" alt=""></a>
					<a id="next" href="javascript:;"><img src="images/ban_next.png" alt=""></a>
					<ol>
						<li class="oli"></li>
						<li></li>
						<li></li>
						<li></li>
					</ol>
				</div>
			</div>
		</header>
		<div class="main_nav">
			<p>
				<img src="images/new_icon_01.png" alt="">
				<a href="case.html">案例展示</a>
				&gt;
				<span><a href="">企业品牌网站</a></span>
			</p>
			<h1>案例展示</h1>
		</div>
		<div class="main_con">
			<nav>
			<?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
			<?php if ($_smarty_tpl->tpl_vars['caid']->value == $_smarty_tpl->tpl_vars['v']->value['ca_id']) {?>
				<a class="main_nava" href="?caid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</a>
			<?php } else { ?>
				<a href="?caid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</a>
			<?php }?>
			<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
			</nav>
			<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['case']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
				<li>
					<a href="case.html">
						<img src="images/case_001.jpg" alt="">
						<p>
							<img src="images/look.png" alt="">
							<br>
							<span>
								<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>

								==
								<?php echo $_smarty_tpl->tpl_vars['v']->value['c_title'];?>

							</span>
						</p>
					</a>
				</li>
			<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
?>
			</ul>
			<div class="paging">
				<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

			</div>
		</div>
		<footer>
			<div class="foot">
				<p>粤ICP备12022584号-3</p>
				<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
			</div>
		</footer>
	</div>
</body>
</html>
<!-- 导航滚动条 -->
<?php echo '<script'; ?>
 src='js/nav_scroll.js'><?php echo '</script'; ?>
><?php }
}
