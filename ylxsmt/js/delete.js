function delete(var name)
{
	{
		var xmlhttp;
		alert("= =");

		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			 //document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			 // alert("退出成功");
			}
		  }
		xmlhttp.open("POST","delete.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("del='name'");
	}
}

function confirm(var name)
{
	{
		var xmlhttp;
		alert("= =");

		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			 //document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
			 // alert("退出成功");
			}
		  }
		xmlhttp.open("POST","confirm.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("con='name'");
	}
}