<?php /* Smarty version 3.1.27, created on 2015-08-13 05:02:42
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php
/*%%SmartyHeaderCode:1137155cc08d2d98293_28188963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac752f0fd3ffd4b8093b2506f1efe4f0fe5fe6' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1439434739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1137155cc08d2d98293_28188963',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cc08d30887b3_09220454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cc08d30887b3_09220454')) {
function content_55cc08d30887b3_09220454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1137155cc08d2d98293_28188963';
?>
<aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=news&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?controller=news&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=login&method=loginout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }
}
?>