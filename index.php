<link rel="stylesheet" href="style.css">
<?php include 'db.php'; ?>

<!-- Futuristic Header & Navigation Section -->
<header class="main-header">
  <div class="logo">RUNNER_SYS // v2.0</div>
  <nav class="nav-menu">
    <a href="#" class="nav-link">Home</a>
    <a href="map.php" class="nav-link">Map</a>
    <a href="login.php" class="nav-out">Sign out</a>
  </nav>
</header>

<!--
index.php – READ (the "R" in CRUD)
Lists every student/runner from the database in a table.
The line above runs db.php first, so $conn (our database
connection) already exists and is ready to use here.
-->

<h2>Runner List</h2>

<!-- A link (the <a> "anchor" tag). Clicking it opens the add-runner page. -->
<a href="add.php">Add New Runner</a>

<!-- Start an HTML table for Runners -->
<table border="1" cellpadding="10">
  <tr>
    <!-- <tr> = table row. <th> = a bold header cell (table heading). -->
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone_Num</th>
    <th>Action</th>
  </tr>
  <?php
  // Fetch ALL columns from the "runner" table
  $result = $conn->query("SELECT * FROM runner");

  while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['phone_num'] . "</td>
        <td>
          <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
          <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
        </td>
      </tr>";
  }
  ?>
</table>

<br>
<hr><br>

<!-- ==================== ADMIN TABLE ==================== -->
<h2>Admin List</h2>

<!-- Add Admin Link (if you have an add_admin.php file) -->
<a href="addadmin.php">Add New Admin</a>

<!-- Start an HTML table for Admins -->
<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
    <th>Action</th>
  </tr>
  <?php
  // Fetch ALL columns from the "admin" table
  $admin_result = $conn->query("SELECT * FROM admin");

  while ($admin_row = $admin_result->fetch_assoc()) {
    echo "<tr>
        <td>" . $admin_row['id'] . "</td>
        <td>" . $admin_row['name'] . "</td>
        <td>" . $admin_row['password'] . "</td>
        <td>
          <a href='editadmin.php?id=" . $admin_row['id'] . "'>Edit</a> | 
          <a href='deleteadmin.php?id=" . $admin_row['id'] . "'>Delete</a>
        </td>
      </tr>";
  }
  ?>
</table>