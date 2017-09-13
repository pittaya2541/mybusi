<html>
<head>
	<title>Pittaya Kanasin 5808311001</title>
</head>
<body topmargin="50px" bgcolor="#ADFF2F">

<?php
session_start();
if(!isset($_SESSION["right"]) || $_SESSION["right"]!="pass") {
echo '<a href=login.php>back</a>';
exit;
}
?>
<center>

<a><font size="6">Main</a><br><br><br><br>

<table border="5">
<tr>
<td>
<a href="login.php"><font size="5">| Login |</font></a>
</td>
<td>
<a href="friends.php"><font size="5">| friend |</font></a>
</td>
<td>
<a href="Me.php"><font size="5">| Me |</font></a>
</td>
<td>
<a href="maindata.php"><font size="5">| Maindata |</font></a>
</td>
</tr>
</table>
</center>
</body>
</html>