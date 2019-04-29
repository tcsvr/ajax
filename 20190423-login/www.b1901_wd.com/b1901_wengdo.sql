-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?04 �?23 �?12:19
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `b1901_wengdo`
--

-- --------------------------------------------------------

--
-- 表的结构 `wd_article`
--

CREATE TABLE IF NOT EXISTS `wd_article` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `a_title` varchar(50) NOT NULL COMMENT '标题',
  `a_content` text NOT NULL COMMENT '内容',
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wd_article`
--

INSERT INTO `wd_article` (`a_id`, `a_title`, `a_content`) VALUES
(1, '关于我们', '<p>123文豆网络，是一家提供互联网服务的高科技集团公司，集策划、设计、前端优化、研发、测试、系统运维、网站推广、运营、团队外包及互联网人才培养为一体的成熟业务体系。总部位于广州市客村立交财智大厦28楼。</p><p align="center"><br/></p><p align="center"><br/></p><p></p><p>文豆主要提供高品质网站建设方案，电子商务平台解决方案，移动端应用开发方案（基于Android、iOS APP及移动端网站），微应用、微商城、微官网、微互动营销解决方案，企业信息化解决方案（OA、CRM），以及PHP网站开发、Java开发、UI设计、淘宝美工人才培养服务，人才外包服务，高端IT人才猎头服务。</p><p><img src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557562286232.jpg" _src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557562286232.jpg"/></p><p></p><dl><dt>公司的运营理念是：</dt><dd>携手共进，共赢天下</dd><dd>以结果为导向。树立好工作目标，监督过程，实现理想效果。</dd><dd><p>打造一流的团队，创造一流的服务，成为一流的行业标志。</p></dd><dt><img src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557538073778.jpg" _src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557538073778.jpg"/></dt></dl><p></p><dl><dt>员工职业发展：</dt><dd><p>我们非常清楚职业发展计划对于每个员工的重要性。公司对人员的要求，更加看重心态，只要愿意成为文豆的一份子，公司都会让员工充分展示自己，发挥他们的潜力、才干和热情，在文豆走向职业的成功。</p></dd><dt><img src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557538196576.jpg" _src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557538196576.jpg"/></dt></dl><p></p><dl><dt>服务理念：</dt><dd>产品是核心，服务是灵魂，服务是命脉。</dd><dd><p>走在行业的前端，创造新的至高点。</p></dd><dt><img src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557562642147.jpg" _src="http://www.b1901_wd.com/cms/umeditor/php/upload/20190420/15557562642147.jpg"/></dt><dt></dt></dl><p></p>');

-- --------------------------------------------------------

--
-- 表的结构 `wd_banner`
--

CREATE TABLE IF NOT EXISTS `wd_banner` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `b_img` varchar(100) DEFAULT NULL COMMENT '图片',
  `b_isshow` tinyint(4) DEFAULT NULL COMMENT '是否显示',
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='广告图表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wd_banner`
--

INSERT INTO `wd_banner` (`b_id`, `b_img`, `b_isshow`) VALUES
(1, 'images/banner_01.jpg', 0),
(2, 'images/banner_02.jpg', 1),
(3, 'images/banner_03.jpg', 1),
(4, 'images/banner_02.jpg', 1),
(5, 'images/banner_01.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_case`
--

CREATE TABLE IF NOT EXISTS `wd_case` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `c_title` varchar(50) DEFAULT NULL COMMENT '标题',
  `c_img` varchar(100) DEFAULT NULL COMMENT '图片',
  `c_thumb` varchar(100) NOT NULL,
  `c_detail` text COMMENT '详情',
  `c_isshow` tinyint(4) DEFAULT NULL COMMENT '是否显示',
  `ca_id` int(11) DEFAULT NULL COMMENT '案例分类',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='案例表' AUTO_INCREMENT=67 ;

--
-- 转存表中的数据 `wd_case`
--

INSERT INTO `wd_case` (`c_id`, `c_title`, `c_img`, `c_thumb`, `c_detail`, `c_isshow`, `ca_id`) VALUES
(1, '111111', '2019/04/155574688365997.jpg', '2019-04/20/155574688365997.jpg', '<p>详情1</p>', 0, 1),
(2, 'simifly---Home', '2019/04/155574686894253.jpg', '2019-04/20/155574686894253.jpg', '<p>详情1</p>', 1, 1),
(3, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(4, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(5, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(6, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(7, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(8, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(9, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(10, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 1),
(11, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(12, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(13, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(14, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(15, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(16, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(17, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(18, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(19, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(20, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 2),
(21, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(22, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(23, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(24, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(25, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(26, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(27, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(28, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(29, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(30, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 3),
(31, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(32, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(33, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(34, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(35, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(36, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(37, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(38, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(39, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(40, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 4),
(41, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(42, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(43, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(44, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(45, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(46, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(47, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(48, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(49, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(50, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(51, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(52, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(53, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(54, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(55, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(56, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(57, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(58, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(59, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(60, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(61, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(62, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(63, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(64, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(65, 'simifly---Home', 'images/case_01.jpg', '', '详情1', 1, 5),
(66, '1111', '2019/04/155566813921478.jpg', '2019-04/19/155566813921478.jpg', '<p>1111111<br/></p>', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_case_category`
--

CREATE TABLE IF NOT EXISTS `wd_case_category` (
  `ca_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `ca_name` varchar(10) DEFAULT NULL COMMENT '案例名称',
  PRIMARY KEY (`ca_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='案例分类表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `wd_case_category`
--

INSERT INTO `wd_case_category` (`ca_id`, `ca_name`) VALUES
(1, '企业品牌网站'),
(2, '电子商务网站'),
(3, '门户型网站'),
(4, '管理系统'),
(5, '团购');

-- --------------------------------------------------------

--
-- 表的结构 `wd_message`
--

CREATE TABLE IF NOT EXISTS `wd_message` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `m_name` varchar(30) NOT NULL COMMENT '账号',
  `m_email` varchar(50) NOT NULL COMMENT '邮箱',
  `m_phone` varchar(30) NOT NULL COMMENT '电话',
  `m_content` text NOT NULL COMMENT '留言',
  `m_time` int(11) NOT NULL COMMENT '留言时间',
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wd_nav`
--

CREATE TABLE IF NOT EXISTS `wd_nav` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `n_name` varchar(10) DEFAULT NULL COMMENT '导航名称',
  `n_link` varchar(100) DEFAULT NULL COMMENT '导航链接',
  `n_isshow` tinyint(4) DEFAULT NULL COMMENT '是否显示',
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `wd_nav`
--

INSERT INTO `wd_nav` (`n_id`, `n_name`, `n_link`, `n_isshow`) VALUES
(1, '网站首页', 'index.php', 1),
(2, '案例展示', 'case_list.php', 1),
(3, '关于我们', 'about.php', 1),
(4, '资讯动态', 'news_list.php', 1),
(5, '联系我们', 'contact.php', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_news`
--

CREATE TABLE IF NOT EXISTS `wd_news` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `n_title` varchar(50) NOT NULL COMMENT '标题',
  `n_detail` text NOT NULL COMMENT '详情',
  `n_img` varchar(100) NOT NULL COMMENT '图片',
  `n_time` int(11) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`n_id`),
  KEY `n_time` (`n_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='资讯表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wd_news`
--

INSERT INTO `wd_news` (`n_id`, `n_title`, `n_detail`, `n_img`, `n_time`) VALUES
(1, '1PHP系统设计与云架构1', '<p>1这几年我比较少写 PHP 了.</p>\r\n			<p>有阵子很迷它, 但是因为工作关系, 把较多的时间花在网络封包和数据库的分析工作上.而且因为年记较大了所以也很难找到写程序的工作多半都在做工程师的 “工头”对于这几年 PHP 的变化我来不及参与.在这裡收集这几年对 PHP 的变化, 写篇心得过过本人自己的乾隐:回顾您以往的职业生涯, 您有好好的管理您写的 CODE 吗?还是每次都写到需求超级肥大了, 才延伸出一大堆的程序码管理问题.在这裡本人设计一个开发框架的架构, 让你的程序更简洁而且让你的程序更有条有理的被应用.当然这些架构教程我己经简化很多, 如果放入太多的设计反而会得到反效果.如果您是比较重口味的 PHP 设计者, 先说声报歉了.如果您常为了需求肥大难以管理你的程序,这篇文章对您来说会是个值得参考的文章, 至少它有著我十几年的需求开发经验.</p>\r\n			<h3>一.常见的 PHP 应用的架构:</h3>\r\n			<img src="images/detailed_01.png" alt="">', 'images/new_01.jpg', 1555482016),
(2, '2PHP系统设计与云架构2', '<p>2这几年我比较少写 PHP 了.</p>\r\n			<p>有阵子很迷它, 但是因为工作关系, 把较多的时间花在网络封包和数据库的分析工作上.而且因为年记较大了所以也很难找到写程序的工作多半都在做工程师的 “工头”对于这几年 PHP 的变化我来不及参与.在这裡收集这几年对 PHP 的变化, 写篇心得过过本人自己的乾隐:回顾您以往的职业生涯, 您有好好的管理您写的 CODE 吗?还是每次都写到需求超级肥大了, 才延伸出一大堆的程序码管理问题.在这裡本人设计一个开发框架的架构, 让你的程序更简洁而且让你的程序更有条有理的被应用.当然这些架构教程我己经简化很多, 如果放入太多的设计反而会得到反效果.如果您是比较重口味的 PHP 设计者, 先说声报歉了.如果您常为了需求肥大难以管理你的程序,这篇文章对您来说会是个值得参考的文章, 至少它有著我十几年的需求开发经验.</p>\r\n			<h3>一.常见的 PHP 应用的架构:</h3>\r\n			<img src="images/detailed_01.png" alt="">', 'images/new_02.jpg', 1555482017),
(3, '3PHP系统设计与云架构2', '<p>3这几年我比较少写 PHP 了.</p>\r\n			<p>有阵子很迷它, 但是因为工作关系, 把较多的时间花在网络封包和数据库的分析工作上.而且因为年记较大了所以也很难找到写程序的工作多半都在做工程师的 “工头”对于这几年 PHP 的变化我来不及参与.在这裡收集这几年对 PHP 的变化, 写篇心得过过本人自己的乾隐:回顾您以往的职业生涯, 您有好好的管理您写的 CODE 吗?还是每次都写到需求超级肥大了, 才延伸出一大堆的程序码管理问题.在这裡本人设计一个开发框架的架构, 让你的程序更简洁而且让你的程序更有条有理的被应用.当然这些架构教程我己经简化很多, 如果放入太多的设计反而会得到反效果.如果您是比较重口味的 PHP 设计者, 先说声报歉了.如果您常为了需求肥大难以管理你的程序,这篇文章对您来说会是个值得参考的文章, 至少它有著我十几年的需求开发经验.</p>\r\n			<h3>一.常见的 PHP 应用的架构:</h3>\r\n			<img src="images/detailed_01.png" alt="">', 'images/new_03.jpg', 1555482018),
(4, '4PHP系统设计与云架构2', '<p>4这几年我比较少写 PHP 了.</p>\r\n			<p>有阵子很迷它, 但是因为工作关系, 把较多的时间花在网络封包和数据库的分析工作上.而且因为年记较大了所以也很难找到写程序的工作多半都在做工程师的 “工头”对于这几年 PHP 的变化我来不及参与.在这裡收集这几年对 PHP 的变化, 写篇心得过过本人自己的乾隐:回顾您以往的职业生涯, 您有好好的管理您写的 CODE 吗?还是每次都写到需求超级肥大了, 才延伸出一大堆的程序码管理问题.在这裡本人设计一个开发框架的架构, 让你的程序更简洁而且让你的程序更有条有理的被应用.当然这些架构教程我己经简化很多, 如果放入太多的设计反而会得到反效果.如果您是比较重口味的 PHP 设计者, 先说声报歉了.如果您常为了需求肥大难以管理你的程序,这篇文章对您来说会是个值得参考的文章, 至少它有著我十几年的需求开发经验.</p>\r\n			<h3>一.常见的 PHP 应用的架构:</h3>\r\n			<img src="images/detailed_01.png" alt="">', 'images/new_04.jpg', 1555482019),
(5, '5PHP系统设计与云架构2', '<p>5这几年我比较少写 PHP 了.</p>\r\n			<p>有阵子很迷它, 但是因为工作关系, 把较多的时间花在网络封包和数据库的分析工作上.而且因为年记较大了所以也很难找到写程序的工作多半都在做工程师的 “工头”对于这几年 PHP 的变化我来不及参与.在这裡收集这几年对 PHP 的变化, 写篇心得过过本人自己的乾隐:回顾您以往的职业生涯, 您有好好的管理您写的 CODE 吗?还是每次都写到需求超级肥大了, 才延伸出一大堆的程序码管理问题.在这裡本人设计一个开发框架的架构, 让你的程序更简洁而且让你的程序更有条有理的被应用.当然这些架构教程我己经简化很多, 如果放入太多的设计反而会得到反效果.如果您是比较重口味的 PHP 设计者, 先说声报歉了.如果您常为了需求肥大难以管理你的程序,这篇文章对您来说会是个值得参考的文章, 至少它有著我十几年的需求开发经验.</p>\r\n			<h3>一.常见的 PHP 应用的架构:</h3>\r\n			<img src="images/detailed_01.png" alt="">', 'images/new_05.jpg', 1555482020);

-- --------------------------------------------------------

--
-- 表的结构 `wd_partner`
--

CREATE TABLE IF NOT EXISTS `wd_partner` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `p_img` varchar(100) NOT NULL COMMENT '图片',
  `p_link` varchar(100) NOT NULL COMMENT '链接',
  `p_title` varchar(50) NOT NULL COMMENT '标题',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='合作伙伴' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wd_service`
--

CREATE TABLE IF NOT EXISTS `wd_service` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `s_title` varchar(50) DEFAULT NULL COMMENT '标题',
  `s_img1` varchar(100) DEFAULT NULL COMMENT '图片',
  `s_img2` varchar(100) DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='服务项目' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `wd_service`
--

INSERT INTO `wd_service` (`s_id`, `s_title`, `s_img1`, `s_img2`) VALUES
(1, '高品质网站<br>解决方案', 'images/server_01.jpg', 'images/server_01.gif'),
(2, '电子商务平台<br>解决方案', 'images/server_02.jpg', 'images/server_02.gif'),
(3, '高品质网站<br>解决方案', 'images/server_03.jpg', 'images/server_03.gif'),
(4, '电子商务平台<br>解决方案', 'images/server_04.jpg', 'images/server_04.gif'),
(5, '高品质网站<br>解决方案', 'images/server_05.jpg', 'images/server_05.gif'),
(6, '电子商务平台<br>解决方案', 'images/server_06.jpg', 'images/server_06.gif');

-- --------------------------------------------------------

--
-- 表的结构 `wd_user`
--

CREATE TABLE IF NOT EXISTS `wd_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `u_name` varchar(30) DEFAULT NULL,
  `u_real` varchar(10) DEFAULT NULL,
  `u_password` varchar(32) DEFAULT NULL,
  `u_sex` tinyint(4) DEFAULT NULL,
  `u_phone` varchar(20) DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_birthday` int(11) DEFAULT NULL,
  `u_photo1` varchar(100) DEFAULT NULL,
  `u_uhoto2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wd_user`
--

INSERT INTO `wd_user` (`u_id`, `u_name`, `u_real`, `u_password`, `u_sex`, `u_phone`, `u_email`, `u_birthday`, `u_photo1`, `u_uhoto2`) VALUES
(1, 'user1', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'user2', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
