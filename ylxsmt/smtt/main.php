<?
	include "Smarty-3.1.15/libs/Smarty.class.php";
	define('__SITE_ROOT', 'D:/php/htdocs/smtt');
	$tpl=new Smarty();
	$tpl->template_dir = __SITE_ROOT."/templates/";
	$tpl->compile_dir = __SITE_ROOT . "/templates_c/";
	$tpl->config_dir = __SITE_ROOT . "/configs/";
	$tpl->cache_dir = __SITE_ROOT . "/cache/";
	$tpl->left_delimiter = '<{';
	$tpl->right_delimiter = '}>';

?>