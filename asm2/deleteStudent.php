<html>
<head>
	<title>Delete Student</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
	<h2>Delete Student</h2>
	<p>
		<button><a href="index.php">Home</a></button>
	</p>

	<p>Are you sure you want to delete this student?</p>

	<form action="deleteStudentAction.php" method="post" name="deleteStudent">
		<table width="25%">
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Delete"></td></tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
			</tr>
		</table>
	</form>
</body>
</html>