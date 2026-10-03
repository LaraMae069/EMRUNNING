<link rel="stylesheet" href="style.css">
<?php include 'db.php'; ?>

<!-- 
  login.php - Simple Login Page
  Shows a form for the user to enter Username and Password.
-->
<h2>Login</h2>

<form method="post">
    Name: <input type="text" name="name" required><br>
    Password: <input type="password" name="password" required><br>
    <!-- The submit button. Clicking it sends the form to verify user credentials. -->
    <input type="submit" name="login" value="Login">
</form>

<?php
// Check whether the Login button was clicked
if (isset($_POST['login'])) {
    // Read each value the user typed
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Send a SELECT command to check if matching username and password exist
    $result = $conn->query("SELECT * FROM admin WHERE name='$name' AND password='$password'");

    // num_rows counts how many matching users were found
    if ($result->num_rows > 0) {
        // Correct credentials -> Redirect to index.php
        header("Location: index.php");
    } else {
        // Invalid credentials -> Display an error message
        echo "<p style='color:red;'>Invalid name or password!</p>";
    }
}
?>