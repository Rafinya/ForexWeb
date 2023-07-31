<?php
include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
   exit();
}

// Fetch all users from the database
$selectUsers = "SELECT * FROM user_form";
$resultUsers = mysqli_query($conn, $selectUsers);
$users = mysqli_fetch_all($resultUsers, MYSQLI_ASSOC);

// Handle updating and deleting users
if (isset($_POST['update'])) {
   $user_id = $_POST['user_id'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);

   // Update the user's profile information in the database
   $updateQuery = "UPDATE user_form SET name = '$name', email = '$email' WHERE id = '$user_id'";
   mysqli_query($conn, $updateQuery);
}

if (isset($_POST['delete'])) {
   $user_id = $_POST['user_id'];

   // Perform the account deletion for the selected user
   $deleteQuery = "DELETE FROM user_form WHERE id = '$user_id'";
   mysqli_query($conn, $deleteQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>

   <style>
      .navbar {
         display: flex;
         background-color: #333;
         color: #fff;
         padding: 20px;
         margin: 0px; 
      }

      .navbar-logo {
         margin-right: auto;
         font-weight: bold;
         color: #fff;
         text-decoration: none;
      }

      .navbar-menu {
         list-style-type: none;
         display: flex;
      }

      .navbar-menu li {
         margin-right: 10px;
      }

      .navbar-menu li a {
         color: #fff;
         text-decoration: none;
         font-size: 16px;
         transition: font-size 0.3s ease-in-out;
      }

      .navbar-menu li a:hover {
         font-size: 18px;
         color: #ff0000;
      }
      .navbar-menu li.odd-one-out a {
         background-color: #ff0000; 
         color: #ffffff; 
         border-radius: 5px; 
         padding: 5px 10px; 
      }
      .navbar-menu li.odd-one-out a:hover {
         background-color: #cc0000; 
      }

      .container {
         margin: 20px auto;
         max-width: 800px;
         background-color: #f1f1f1;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .content {
         text-align: center;
      }

      .content h3 {
         font-size: 24px;
      }

      .content h1 {
         font-size: 36px;
         margin-top: 10px;
         margin-bottom: 20px;
      }

      .content p {
         font-size: 18px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
      }

      th, td {
         padding: 12px 15px;
         text-align: left;
         border-bottom: 1px solid #ddd;
      }

      th {
         background-color: #f2f2f2;
      }

      tr:nth-child(even) {
         background-color: #f2f2f2;
      }

      input[type="text"],
      input[type="email"] {
         width: 100%;
         padding: 8px;
         border-radius: 4px;
         border: 1px solid #ccc;
      }

      input[type="submit"] {
         padding: 8px 16px;
         background-color: #F13F0D;
         color: white;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         transition: background-color 0.3s ease-in-out;
      }

      input[type="submit"]:hover {
         background-color: #e63d0b;
      }

   </style>

</head>
<body>
   <nav class="navbar">
      <div class="navbar-logo">Forex Admin</div>
      <ul class="navbar-menu"> 
         <li class="odd-one-out"><a href="logout.php">Logout</a></li> 
      </ul>
   </nav>

   <div class="container">
      <div class="content">
         <h3>Hi, Admin</h3>
         <h1>Welcome, <?php echo $_SESSION['admin_name']; ?></h1>
         <p>This is the admin page.</p>
      </div>
   </div>

   <table>
      <tr>
         <th>Name</th>
         <th>Email</th>
         <th>Action</th>
      </tr>
      <?php foreach ($users as $user) : ?>
         <tr>
            <form action="" method="post">
               <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
               <td><input type="text" name="name" value="<?php echo $user['name']; ?>"></td>
               <td><input type="email" name="email" value="<?php echo $user['email']; ?>"></td>
               <td>
                  <input type="submit" name="update" value="Update">
                  <input type="submit" name="delete" value="Delete">
               </td>
            </form>
         </tr>
      <?php endforeach; ?>
   </table>
</body>

</html>
