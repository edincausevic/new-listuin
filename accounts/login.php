<?php

$email = '';
$email_error = $password_error = $username_incorrect_error = '';

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // CHECK EMAIL
    if (empty($_POST["email"])) {
      $email_error = "This field is required.";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format"; 
      }
    }

    // CHECK PASSWORD
    if (empty($_POST["password"])) {
      $password_error = "This field is required.";
    }

    if ($email_error == '' and $password_error == '') {

      $username = $_POST['email'];
      $password = $_POST['password'];
      $username = mysqli_real_escape_string($con, $username);
      $password = mysqli_real_escape_string($con, $password);

      if (preg_match('/@/', $username)) {
        $query = "SELECT * FROM korisnici WHERE korisnik_email = '$username'";
        $which = 'email';
      }else {
        $query = "SELECT * FROM korisnici WHERE korisnik_username = '$username'";
        $which = 'pass';
      }

      $usernameResult = mysqli_query($con, $query);

      if(!$usernameResult) { die('Error: ' . mysqli_error($con)); }

      // check if email exsits
      if(mysqli_num_rows($usernameResult) === 0) {
        $username_incorrect_error = "Username or password is incorrect.";
      }else {

          while($row = mysqli_fetch_assoc($usernameResult)) {
            $passwordHash = $row['korisnik_password'];
            $fullname = $row['korisnik_fullname'];
            $username = $row['korisnik_username'];
            $email = $row['korisnik_email'];
            $role = $row['korisnik_role'];
          }
          
          if (!password_verify($password , $passwordHash)) {
            $username_incorrect_error = "Username or password is incorrect.";
          }else {
            
            $_SESSION['korisnik_username'] = $username;
            $_SESSION['korisnik_fullname'] = $fullname;
            $_SESSION['korisnik_role'] = $role;
    
            header('Location: ../../dashboard');
          }
      }

    }
}

?>