<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
<h2>注 册</h2>
<form method="post" action="/register">
	<label>用户名:</label>
	<input type="text" name="User[username]" />
	<label>密码:</label>
	<input type="password" name="User[password]" />
	<label>邮箱:</label>
	<input type="text" name="User[email]" />
	<button type="submit">提交</button>
	<hr />
	<button><a href="/">返回主页</a></button>
</form>
</body>
</html>