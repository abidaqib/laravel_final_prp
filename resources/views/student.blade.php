<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body>
	<h2>student</h2>
	<form action="{{ URL::to('logout') }}" method="post">		
		{{ csrf_field() }}
		<input type="submit" name="logout" value="Logout">
	</form>
</body>
</html>