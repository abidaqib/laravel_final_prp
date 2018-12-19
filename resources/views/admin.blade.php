<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h2>admin</h2>
	<form action="{{ URL::to('logout') }}" method="post">
		{{ csrf_field() }}
		<input type="submit" name="logout" value="Logout">
	</form>
</body>
</html>