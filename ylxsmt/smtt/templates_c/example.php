<? 
/********************************************* 
* 
* 文件名： example.php 
* 作 用： 显示实例程序2 
*********************************************/ 

include_once("../../Smarty-3.1.15/libs/Smarty.class.php");

$smarty = new Smarty(); 

$smarty->templates("../templates"); 

$smarty->templates_c("templates_c"); 

$smarty->cache("cache"); 

$smarty->cache_lifetime = 0; 

$smarty->caching = true; 

$smarty->left_delimiter = "{#"; 

$smarty->right_delimiter = "#}"; 

$array[] = array("newsID"=>1, "newsTitle"=>"第1条新闻"); 

$array[] = array("newsID"=>2, "newsTitle"=>"第2条新闻"); 

$array[] = array("newsID"=>3, "newsTitle"=>"第3条新闻"); 

$array[] = array("newsID"=>4, "newsTitle"=>"第4条新闻"); 

$array[] = array("newsID"=>5, "newsTitle"=>"第5条新闻"); 

$array[] = array("newsID"=>6, "newsTitle"=>"第6条新闻"); 

//这是一个二维关联数组 

$smarty->assign("newsArray", $array); 

//编译并显示位于./templates下的index.htm模板 

$smarty->display("example.htm"); 

?>