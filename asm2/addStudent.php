<html>
<head>
	<title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
	<h2>Add Student</h2>
	<p>
		<button><a href="index.php">Home</a></button>
	</p>

	<form action="addStudentAction.php" method="post" name="addStudent">
		<table width="25%">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>