<?php
/* Smarty version 3.1.28, created on 2019-04-28 14:33:25
  from "C:\phpStudy\WWW\b1901\20190428\www.smarty_wd.com\template\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5cc54935eadcc9_93272507',
  'file_dependency' => 
  array (
    'a294b858bd70e2d34ff7a9a5b096e49b41fef17b' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\b1901\\20190428\\www.smarty_wd.com\\template\\templates\\index.html',
      1 => 1556433203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc54935eadcc9_93272507 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文豆首页</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo _JS_;?>
jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo _JS_;?>
playImg.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo _CSS_;?>
reset.css">
	<link rel="stylesheet" href="<?php echo _CSS_;?>
index.css">
	<link rel="stylesheet" href="<?php echo _CSS_;?>
playImg.css">
</head>
<body>
	<div class="container">
		<a name="Top"></a>
		<header>
			<div class="head_nav" id="head_scroll">
				<a href="index.html">
					<img src="images/logo_01.png" alt="">
				</a>
				<nav>
				<?php
$_from = $_smarty_tpl->tpl_vars['nav']->value;
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
					<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['n_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['n_name'];?>
</a>
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
					
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
		<div class="service">
			<h1>我们的服务<br><span>Services</span></h1>
			<i></i>
			<p>我们为您提供，最精致的服务，最全面的技术</p>
			<ul id="service">
				<li>
					<a href="" class="ser_a">
					<img src="images/server_01.jpg" alt="">
					<br>
					高品质网站<br>解决方案
					</a>
				</li>
				<li>
					<a href="">
					<img src="images/server_02.gif" alt="">
					<br>
					电子商务平台<br>解决方案
					</a>
				</li>
				<li>
					<a href="">
					<img src="images/server_03.gif" alt="">
					<br>
					PHP网站开发人才<br>解决方案
					</a>
				</li>
				<li>
					<a href="">
					<img src="images/server_04.gif" alt="">
					<br>
					网站创意设计<br>解决方案
					</a>
				</li>
				<li>
					<a href="">
					<img src="images/server_05.gif" alt="">
					<br>
					微信应用公众号开发<br>解决方案
					</a>
				</li>
				<li>
					<a href="">
					<img src="images/server_06.gif" alt="">
					<br>
					移动端应用APP开发<br>解决方案
					</a>
				</li>
			</ul>
		</div>
		<div class="case">
			<h1>案例展示<br><span>Cases</span></h1>
			<i></i>
			<nav>
			<?php
$_from = $_smarty_tpl->tpl_vars['category']->value;
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
			<?php if ($_smarty_tpl->tpl_vars['caid']->value == $_smarty_tpl->tpl_vars['v']->value['ca_id']) {?>
				<a href="?caid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_id'];?>
" class="case_a"><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</a>
			<?php } else { ?>
				<a href="?caid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ca_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ca_name'];?>
</a>
			<?php }?>
			<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
?>
			</nav>
			<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['case']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_v_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
				<li>
					<a href="case.html">
						<img src="images/case_01.jpg" alt="">
						<div>
							<img src="images/look.png" alt="">
							<br>
							<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>

							==
							<?php echo $_smarty_tpl->tpl_vars['v']->value['c_title'];?>

						</div>
					</a>
				</li>
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
?>
				<li>
					<a href="case.html">
						<img src="images/case_08.jpg" alt="">
						<p>MORE</p>
					</a>
				</li>
			</ul>
		</div>
		<div class="about">
			<h1>关于我们<br><span>About us</span></h1>
			<i></i>
			<p class="about_p1">不用担心距离, 文豆就在你身边</p>
			<p class="about_p2">文豆网络是一家提供互联网服务的高科技集团公司集策划、设计、前端优化、研发、测试、系统运维、网站推广、运营、团队外包及互联网人才培养为一体的成熟业务体系......</p>
			<img src="images/point.png" alt="">
			<br>
			<a href="">点击查看</a>
		</div>
		<div class="news">
			<a href=""><img id="new_more" class="new_more" src="images/icon.png" alt=""></a>
			<h2>最新资讯<br><span>News</span></h2>
			<i></i>
			<p class="new_p1">
				文豆集团，你身边的IT互联网专家
			</p>
			<ul>
				<li>
					<div class="new_h">10.19 <br><span>2015</span></div>
					<div class="new_p">
						<h3><a href="">PHP系统设计与云架构<span>&gt;</span></a></h3>
						<p>祝贺你成为广州市天河金领技工学校学生，学校坐落于国家第二大公共实训基地“广州开发区、萝岗区高技能人才公共实训基地”</p>
					</div>
				</li>
				<li>
					<div class="new_h">10.19 <br><span>2015</span></div>
					<div class="new_p">
						<h3><a href="">Ghost 博客中文版 0.5.5 正式发布<span>&gt;</span></a></h3>
						<p>祝贺你成为广州市天河金领技工学校学生，学校坐落于国家第二大公共实训基地“广州开发区、萝岗区高技能人才公共实训基地”.</p>
					</div>
				</li>
				<li>
					<div class="new_h">10.19 <br><span>2015</span></div>
					<div class="new_p">
						<h3><a href="">ONES-PHP开源企业管理软件<span>&gt;</span></a></h3>
						<p>祝贺你成为广州市天河金领技工学校学生，学校坐落于国家第二大公共实训基地“广州开发区、萝岗区高技能人才公共实训基地”.</p>
					</div>
				</li>
				<li>
					<div class="new_h">10.19 <br><span>2015</span></div>
					<div class="new_p">
						<h3><a href="">10款提高iOS开发效率的XCode插件<span>&gt;</span></a></h3>
						<p>祝贺你成为广州市天河金领技工学校学生，学校坐落于国家第二大公共实训基地“广州开发区、萝岗区高技能人才公共实训基地”</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="partner">
			<h4>合作伙伴</h4>
			<em>Partner</em>
			<i></i>
			<p>他们选择了文豆，我们的专业合作伙伴</p>
			<ul>
				<li>
					<a href="">
						<img src="images/partner_01.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_02.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_03.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_04.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_05.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_06.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_07.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_08.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_09.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_010.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_011.jpg" alt="">
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/partner_012.jpg" alt="">
					</a>
				</li>
			</ul>
		</div>
		<footer>
			<div class="contact">
				<h4>联系我们</h4>
				<em>Contact us</em>
				<i></i>
				<p>他们选择了文豆，我们的专业合作伙伴</p>
				<div class="con_ul">
					<div class="con_left">
						<ul>
							<li>广州总部：广州海珠区广州大道南448号财智大厦28楼</li>
							<li>深圳总部：深圳福田区福华路322号文蔚大厦4楼</li>
							<li>广州番禺分部：广州市番禺区市桥光明北路12号锦绣华庭三座404</li>
							<li>广州增城分部：广州增城区荔城花园东门32号</li>
							<li>广州大学城分部：广州大学城中七路大学时光首层</li>
						</ul>
					</div>
					<div class="con_center">
						<img class="ew" src="images/ew.png" alt="">
						<br>
						<a href=""><img src="images/icon_05.png" alt=""></a>
						<a href=""><img src="images/icon_06.png" alt=""></a>
						<a href=""><img src="images/icon_07.png" alt=""></a>
						<a href=""><img src="images/icon_08.png" alt=""></a>
					</div>
					<div class="con_right">
						<ul>
							<li>广州白云分部：广州市白云区从云路839号利都商务中心B911</li>
							<li>惠州分部：惠州市惠城区江北三新南路3号名流公馆10层05室</li>
							<li>佛山分部:佛山市南海区桂城南新一路16号首层</li>
							<li>东莞分部：东莞市莞城区汇峰中心E区1002室</li>
							<li>肇庆分部：肇庆市端州区端州五路18号大楼四楼长江教育(市人才大厦前)</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="foot">
				<p>粤ICP备12022584号-3</p>
				<p>广州文豆网络科技有限公司 Copyright 2009-2015 ,All Rights Reserved wengdo</p>
			</div>
		</footer>
	</div>
	<aside>
		<div></div>
		<p>
			<span>020-66668888</span>
			<a href="">
				<img src="images/icon_01.png" alt="">
			</a>
		</p>
		<p>
			<span>66668888</span>
			<a href="">
				<img src="images/icon_02.png" alt="">
			</a>
		</p>
		<p>
			<span>人才招聘</span>
			<a href="">
				<img src="images/icon_03.png" alt="">
			</a>
		</p>
		<p>
			<span>回到顶部</span>
			<a href="#Top">
				<img src="images/icon_04.png" alt="">
			</a>
		</p>
	</aside>
</body>
</html>

<?php echo '<script'; ?>
>

	//more滚动
	var new_more=document.getElementById('new_more');
	//滚动条事件改变导航背景色
	var head_scroll=document.getElementById('head_scroll');

	document.onscroll=function(){
		var scroll_top=document.body.scrollTop || document.documentElement.scrollTop;
		if(scroll_top>$('#con').height()){
			head_scroll.style.background='rgba(21,24,27,1)';
		}
		if(scroll_top<$('#con').height()){
			head_scroll.style.background='rgba(21,24,27,0.3)';
		}
		if(scroll_top>$('#con').height()+503+680 && scroll_top<$('#con').height()+503+680+431){
			new_more.style.right=605+'px';
			new_more.style.transform='rotate(-720deg)';
		}else{
			new_more.style.right=0;
			new_more.style.transform='rotate(0deg)';
		}
		
	}
	
	// 侧边导航条（右边）
	var aside=document.getElementsByTagName('aside')[0];
	var p=aside.getElementsByTagName('p');
	var span=aside.getElementsByTagName('span');

	for(var i=0; i<p.length; i++){
		p[i].onmouseover=function(){
			this.className='box_bg';
		}
		p[i].onmouseout=function(){
			this.className='';
		}
	}
	// 服务项目
	var service=document.getElementById('service');
	var li=service.getElementsByTagName('li');
	var img=service.getElementsByTagName('img');
	var a=service.getElementsByTagName('a');

	for(var i=0; i<li.length; i++){
		li[i].index=i;
		li[i].onmouseover=function(){
			for(var i=0; i<li.length; i++){
				img[i].src='images/server_0'+(i+1)+'.gif';
				a[i].className='';
			}
			img[this.index].src='images/server_0'+(this.index+1)+'.jpg';
			a[this.index].className="ser_a";
		}
	}
<?php echo '</script'; ?>
><?php }
}
