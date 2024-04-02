<html>

<head>
	<title>Student Management</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<h2>Student Infomation</h2>
	<table width="50%">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
		</tr>
		<?php
		require_once 'dbConnection.php';

		$sql = "SELECT * FROM students";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["age"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='5'>No students found</td></tr>";
		}

		$conn->close();
		?>
	</table>
</body>

</html>