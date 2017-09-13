<html>
<head>
	<title>Pittaya Kanasin 5808311001</title>
</head>
<body topmargin="100px"  bgcolor="#ADFF2F">

<?php
session_start();
if(!isset($_SESSION["right"]) || $_SESSION["right"]!="pass") {
echo '<a href=login.php>back</a>';
exit;
}
?>
<center>

<a><font size="6">Friends</a><br><br>
<table border="2"  bgcolor ="#00FA9A">
<tr>
<td>
<a href="https://www.facebook.com/taxnan"><img  src="Tax.jpg"  width="150px" height="170px" border="0"></a>
</td>
<td>
<p/>ชื่อ-สกุล :  วรวัช ชัยธิ<br>เว็บไซต์ของแทค
<a href="http://taxtest.atwebpages.com/frame.htm"><font size="5">mypyramid (Tax)</font></a><br>
</td>
</tr>

<tr>
<td>
<a href ="https://www.facebook.com/profile.php?id=100011397451151"><img src="Mo.jpg" width="150px" height="170px" border="0"></a>
</td>
<td>
</p>ชื่อ-สกุล : บุณยดา สูงติวงค์<br>เว็บไซ์ของแตงโม
<a href="http://melon.byethost7.com/?i=2"><font size="5">Webpage (Mo)</font></a><br>
</td>
</tr>
</table>
<table border="5">
<tr>
<td>
<a href="main.php"><font size="5">| Main |</a>
</td>
<td>
<a  href="login.php"><font size="5">| log out |</a>
</td>
</tr>
</center>
</body>
</html>