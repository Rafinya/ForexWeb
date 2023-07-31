<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
   header('location: login_form.php');
   exit();
}

// Fetch the user's information from the database
$user_id = $_SESSION['user_id'];
$select = "SELECT * FROM user_form WHERE id = $user_id";
$result = mysqli_query($conn, $select);
$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Add your meta tags, title, and stylesheets -->
</head>

<body>
   <div class="profile-container">
      <h3>User Information</h3>
      <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
      <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
      <p><strong>User Type:</strong> <?php echo $user['user_type']; ?></p>
      <p><a href="edit_profile.php">Edit Profile</a></p>
      <p><a href="logout.php">Logout</a></p>
   </div>
</body>

</html>
