<body topmargin="200px" bgcolor="#ADFF2F">

<?php
error_reporting(0);
session_start();
if(isset($_SESSION["right"]))
$_SESSION["right"] ="";
?>
<center>

<a><font size="5">Login</a><br><br>

<form action=Maindata_Check.php method=get>

<table border="2" bgcolor=#FFCC66>
<tr>
<td>
<a><font size="3">Username</a>
</td>
<td>
<input name=usr>
</td>
</tr>

<tr>
<td>
<a><font size="3">Password</a>
</td>
<td>
<input name=pass required="required" type="password">
</td>
</tr>
</table>

<br><input type=submit value="Click me">

</form>
</center>
</body>
</html>