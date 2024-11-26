<?php

@include ("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = htmlspecialchars($_POST['email']);
  $pass = htmlspecialchars($_POST['password']);

  if(empty($pass) && (empty($email)))
      {
        echo'  <script>
                    alert("Fill out all the fields");
                    window.location.href = "login.php";
                </script> ';
      }
  else if(empty($pass))
      { 
        echo'  <script>
                  alert("Insert Password");
                  window.location.href = "login.php";
              </script> ';
     }
  else if(empty($email))
     { 
       echo'  <script>
                 alert("Insert Email");
                 window.location.href = "login.php";
             </script> ';
    }

    else { 
      $select_users = mysqli_query($conn, "SELECT * FROM `users_tbl` WHERE email = '$email' AND password = '$pass' ") or die(mysqli_error($conn));
      
      if (mysqli_num_rows($select_users) > 0) {
        // Fetch user data
        $user_data = mysqli_fetch_assoc($select_users);

        // Set session variables
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['email'] = $user_data['email'];

        // Redirect to dashboard
        echo '<script>
                  alert("Login successful");
                  window.location.href = "Dashboard.php";
              </script>';
    } else {
        echo '<script>
                  alert("Invalid Email or Password");
                  window.location.href = "login.php";
              </script>';
    }
  }
      

    }

  