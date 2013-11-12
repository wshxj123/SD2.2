<script type="text/javascript">
function exit()
{
	var xmlhttpexit;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttpexit=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttpexit=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttpexit.onreadystatechange=function()
	{
		if (xmlhttpexit.readyState==4 && xmlhttpexit.status==200)
		{
			alert(xmlhttpexit.responseText);
			location.href='../client/index.php';
		}
	}
	xmlhttpexit.open("POST","exit.php",true);
	xmlhttpexit.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttpexit.send("name=<?echo $name;?>");
}

window.setInterval("loadXMLDoc()",2000);
function loadXMLDoc()
{
var xmlhttp;
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
		document.getElementById("online").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","online.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("type=<?echo $type;?>");
}
</script>

<script type="text/javascript">
function loadPatient()
{
document.getElementById("patient").innerHTML="正在载入下一位...";
var xmlhttp2;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp2=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp2.onreadystatechange=function()
  {
  if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
    {
		document.getElementById("patient").innerHTML=xmlhttp2.responseText;
    }
  }
xmlhttp2.open("POST","next.php",true);
xmlhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp2.send("op=next&name=<?echo $name;?>");
}

</script>

<br/>






