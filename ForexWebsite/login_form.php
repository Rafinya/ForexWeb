<?php
include 'config.php';

session_start();




if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);

      if ($row['user_type'] == 'admin') {
         $_SESSION['admin_name'] = $row['name'];
         header('location: admin_page.php');
      } elseif ($row['user_type'] == 'user') {
         $_SESSION['user_name'] = $row['name'];
         header('location: user_page.php');
      }
   } else {
      $error[] = 'Incorrect email or password!';
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-image: url('money-background.jpg');
         background-size: cover;
         background-position: center;
         backdrop-filter: blur(5px);
         min-height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .form-container {
         max-width: 400px;
         padding: 20px;
         background-color: rgba(255, 255, 255, 0.8);
         border: 2px solid #F13F0D;
         border-radius: 8px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      h3 {
         margin: 0;
      }

      .error-msg {
         color: red;
      }

      input[type="email"],
      input[type="password"] {
         width: 100%;
         padding: 10px;
         border-radius: 4px;
         border: 1px solid #ccc;
         box-sizing: border-box;
         transition: border-color 0.3s ease-in-out;
         margin-bottom: 10px;
      }

      input[type="submit"] {
         padding: 10px 20px;
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

      p {
         margin-top: 10px;
      }

      a {
         color: #F13F0D;
      }
   </style>
</head>

<body>
   <div class="form-container">
      <form action="" method="post">
         <h3>Login Now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
         }
         ?>
         <input type="email" name="email" required placeholder="Enter your email">
         <input type="password" name="password" required placeholder="Enter your password">
         <input type="submit" name="submit" value="Login Now">
         <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
      </form>
   </div>
</body>

</html>