<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login Form</title>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-300">
    <div class="p-8 max-w-md w-full bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Login</h2>
        <form method="post" action="">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input id="email" name="email" type="email" placeholder="Enter your email"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500">
            </div>
            <div class="mb-6">
                <label for="input_password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input name="input_password" id="password" type="password" placeholder="Enter your password"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-indigo-500">
            </div>
            <input type="submit" name="login"
                class="w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-indigo-600"
                value="sign in" />
        </form>
    </div>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $check_password = $_POST['input_password'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM account WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            header("Location: index_Stu.php");
            exit;
        } else {
            $sql_admin = "SELECT * FROM adminaccount WHERE email='$email'";
            $result_admin = $conn->query($sql_admin);

            if ($result_admin->num_rows > 0) {
                $row_admin = $result_admin->fetch_assoc();
                $hashed_password_admin = $row_admin['password'];

                if ($hashed_password_admin == $check_password) {
                    header("Location: index.php");
                    exit;
                } else {
                    echo "Invalid username or password.";
                }
            } else {
                echo "Invalid username or password.";
            }
        }

        $conn->close();
    }
    ?>
</body>

</html>