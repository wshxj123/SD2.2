<?

	$conf = file_get_contents("conf/ServerConf.ini");
	
	$dbserver=jobconf($conf,"DBServer");
	$dbname=jobconf($conf,"DBNAME");
	$username=jobconf($conf,"USERNAME");
	$password=jobconf($conf,"PASSWORD");

	$conn = mysql_connect($dbserver,$username,$password) or die ("wrong!"); 
	mysql_select_db($dbname,$conn); 
	
	/*mysql_select_db($dbname,$conn); 
	$sql="INSERT INTO admin (admin_id, passwd, admin_name) 
VALUES ('1', '123', 'gxcissad')";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn); 
	if($query) 
	echo"success!"; 
	else 
	echo "error!"; 
	*/
?>



<?//TODO?>
	

<?
	function jobconf($content,$item)
	{
		$place=strpos($content,$item);
		$i=$place;
		
		while($content[$i]!="=")
		{
			$i++;
		}$i++;

		$res="";
		while($content[$i+1]!="\n")
		{
			$res=$res."". $content[$i];
			$i++;
		}
		return $res;
	}

	function query($sql)
	{
		$conf = file_get_contents("conf/ServerConf.ini");
	
		$dbserver=jobconf($conf,"DBServer");
		$dbname=jobconf($conf,"DBNAME");
		$username=jobconf($conf,"USERNAME");
		$password=jobconf($conf,"PASSWORD");

		$conn = mysql_connect($dbserver,$username,$password) or die ("wrong!"); 

		mysql_select_db($dbname,$conn); 
		mysql_query("set names utf8");
		$query=mysql_query($sql,$conn); 
		$res=mysql_fetch_array($query);

		return $res;
	}

?>