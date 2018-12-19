<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<form action="{{ URL::to('signup') }}" method="post">
		{{ csrf_field() }}

		<input type="email" name="email" required>
		<input type="password" name="password" required>
		<input type="text" name="who">
		<input type="submit" name="signUp" value="Sign Up">
	</form>

	<form action="{{ URL::to('signin') }}" method="post">
		{{ csrf_field() }}

		<input type="email" name="email" required>
		<input type="password" name="password" required>
		<input type="submit" name="logIn" value="Log In">
	</form>
	<form action="{{ URL::to('update') }}" method="post">
		{{ csrf_field() }}

		<input type="email" name="email" required>
		<input type="password" name="password" required>
		<input type="submit" name="update" value="Update">
	</form>


</body>
</html>