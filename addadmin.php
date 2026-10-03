<link rel="stylesheet" href="style.css">
<?php include 'db.php'; ?>
<!--
  add.php — CREATE (the "C" in CRUD)
  Shows a form to type a new student, then saves it into the database.
-->
<h2>Add Admin</h2>

<!--
  An HTML form. method="post" sends the typed data hidden in the request
  body (not shown in the URL) when the form is submitted.
  Each <input> has a name="..." — that name is how PHP reads the value later.
-->
<form method="post">
    Name: <input type="text" name="name"><br>
    Password: <input type="text" name="password"><br>
    <!-- The submit button. Clicking it sends the form. name="save" lets PHP tell that THIS button was pressed. -->
    <input type="submit" name="save" value="Save">
</form>

<?php
// isset(...) checks whether a value exists / was set.
// $_POST is a built-in PHP array that holds the data sent by a form using method="post".
// So this line means: "IF the Save button was clicked, run the code inside { }."
if (isset($_POST['save'])) {
    // Read each value the user typed. The key inside [ ] matches the input's name="...".
    $name   = $_POST['name'];
    $password  = $_POST['password'];

    // Send an INSERT command to add a new row to the students table.
    // "INSERT INTO table (columns) VALUES (...)" is the SQL for creating new data.
    $conn->query("INSERT INTO admin (name,password) VALUES ('$name','$password')");

    // header("Location: ...") tells the browser to redirect to another page.
    // After saving, we send the user back to the list so they can see the new student.
    header("Location: index.php");
}
?>