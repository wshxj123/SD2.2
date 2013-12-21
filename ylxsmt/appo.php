<?
	if (isset($_COOKIE["name"]) && isset($_COOKIE["type"]))
	{
		if($_COOKIE["type"]==5)
		{
			if(!isset($_POST["eid"]))
			{
				echo "<script> alert('operation error！');</script>";
				echo "<script>location.href='expert.php'</script>";
			}
			$expert_id= $_POST["eid"];
			$name=$_COOKIE["name"];

			require ("main.php");
			$tpl=new Smarty();
			$tpl->assign("name","$name");
			$tpl->assign("expert_id","$expert_id");
			$tpl->assign("eid","$expert_id");
			$tpl->assign("user","$name");
			$tpl->display("appo.htm");
		}else{
			echo "请登录！";
		}
	}
	else{
		echo "请登录！";
	}
?>