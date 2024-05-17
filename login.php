<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    if (isset($_POST['login'])) {
        include 'config.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
        //   output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
            $hashed_password= $row['password'];
          }
        } else {
          echo "0 results";
        }

            if (password_verify($password, $hashed_password)) {
                echo "Login successful!";
                // Start session and set session variables as needed
                session_start();
                $_SESSION['username'] = $username;
                // Redirect to a protected page if needed
                // header("Location: protected_page.php");
            } else {
                echo "Invalid password.";
            }
        

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
