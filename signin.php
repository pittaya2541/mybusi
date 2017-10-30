<html>
<head><title>Signin</title></head>

	<link rel="stylesheet" href="style.css">

<body>
<table  style="margin-left:auto;margin-right:auto;">
<tr><td>
<?php require("header.php");?>
</td></tr>
<tr><td>
<?php require("menu.php");?>
</td></tr>
<tr  style="background-color:#3498DB;"><td >

<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<a class="btn btn-primary btn-large btn-block" href="#">login</a>
				<a class="login-link" href="#">Lost your password?</a>
			</div>
		</div>
	</div>

</td></tr>
<tr><td>
<?php require("footer.php");?>
</td></tr>
</table>
</body></html>