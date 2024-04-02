<html>
<head>
	<title>Edit Student</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
	<h2>Edit Student</h2>
	<p>
		<button><a href="index.php">Home</a></button>
	</p>

	<form action="editStudentAction.php" method="post" name="editStudent">
		<table width="25%">
			<?php
			require_once 'dbConnection.php';

			$id = $_GET['id'];
			$sql = "SELECT * FROM students WHERE id=$id";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				echo '<tr> 
					<td>Name</td>
					<td><input type="text" name="name" value="' . $row["name"] . '"></td>
				</tr>
				<tr> 
					<td>Age</td>
					<td><input type="text" name="age" value="' . $row["age"] . '"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" value="' . $row["email"] . '"></td>
				</tr>';
			}

			$conn->close();
			?>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
	</form>
</body>
</html>