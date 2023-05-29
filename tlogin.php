<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $mysqli = new mysqli('localhost', 'root', '', 'test');

    // Check if the username and password are valid
    $result = $mysqli->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if ($result->num_rows == 1) {
        // Start a session and redirect to the dashboard page
        session_start();
        $_SESSION['user_id'] = $result->fetch_assoc()['id'];
        header('Location: index.php');
        exit;
    } else {
        // Invalid credentials, show error message
        echo "Invalid username or password";
    }
}

?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="tlogin.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>