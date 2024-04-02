<html>

<head>
	<title>Student Management</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<h2>Student Management</h2>
	<p>
		<button><a href="addStudent.php">Add Student</a></button>
	</p>

	<table width="50%">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Action</th>
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
				echo '<td><a href="editStudent.php?id=' . $row["id"] . '"><button class="ED">Edit</button></a> | <a href="deleteStudent.php?id=' . $row["id"] . '" onclick="return confirm(\'Are you sure?\')"><button class="ED">Delete</button></a></td>';
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