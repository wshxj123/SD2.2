<? 
/********************************************* 
* 
* �ļ����� example.php 
* �� �ã� ��ʾʵ������2 
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

$array[] = array("newsID"=>1, "newsTitle"=>"��1������"); 

$array[] = array("newsID"=>2, "newsTitle"=>"��2������"); 

$array[] = array("newsID"=>3, "newsTitle"=>"��3������"); 

$array[] = array("newsID"=>4, "newsTitle"=>"��4������"); 

$array[] = array("newsID"=>5, "newsTitle"=>"��5������"); 

$array[] = array("newsID"=>6, "newsTitle"=>"��6������"); 

//����һ����ά�������� 

$smarty->assign("newsArray", $array); 

//���벢��ʾλ��./templates�µ�index.htmģ�� 

$smarty->display("example.htm"); 

?>