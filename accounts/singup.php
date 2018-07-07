<?php

// define variables and set to empty values
$email_error = $fullname_error = $username_error = $password_error ="";
$email = $fullname = $message = $username = $password = $email_exsits_error = $username_exsits_error = "";
$loader = false;

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

  // CHECK FULL NAME
  if (empty($_POST["fullname"])) {
    $fullname_error = "This field is required.";
  }else {
    $fullname = test_input($_POST["fullname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
      $fullname_error = "Only letters and white space allowed"; 
    }
  }

  // CHECK USERNAME
  if (empty($_POST["username"])) {
    $username_error = "This field is required.";
  }else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!ctype_alnum($username)) {
      $username_error = "Only letters and numbers allowed"; 
    }
  }

  // CHECK PASSWORD
  if (empty($_POST["password"])) {
    $password_error = "This field is required.";
  }else if(strlen($_POST["password"]) < 6) {
    $password_error = "Create a password at least 6 characters long.";
  }else if(strlen($_POST["password"]) >= 72) {
    $password_error = "Password to long.";
  }

  // if all inputs are valid
  if ($email_error == '' and $fullname_error == '' and $username_error == '' and $password_error == '' ) {
    $loader = true;

    $emailVal = $_POST['email'];
    $fullnameVal = $_POST['fullname'];
    $usernameVal = $_POST['username'];
    $passwordVal = $_POST['password'];

    $emailVal = mysqli_real_escape_string($con, $emailVal);
    $fullnameVal = mysqli_real_escape_string($con, $fullnameVal);
    $usernameVal = mysqli_real_escape_string($con, $usernameVal);
    $passwordVal = mysqli_real_escape_string($con, $passwordVal);
    $passwordHash = hashPassword($passwordVal);

    // CHECK IF EMAIL EXSITS
    $emailQuery = "SELECT * FROM korisnici WHERE korisnik_email = '$emailVal'"; 
    $emailResult = mysqli_query($con, $emailQuery);
    if (!$emailResult) { die('Error: ' . mysqli_error($con)); }
    if(mysqli_num_rows($emailResult) > 0) {
      $email_exsits_error = "Another account is using $emailVal.";
      $loader = false;
    }else {

      // CHECK IF USERNAME EXSITS
      $usernameQuery = "SELECT * FROM korisnici WHERE korisnik_username = '$usernameVal'";
      $usernameResult = mysqli_query($con, $usernameQuery);
      if (!$usernameResult) { die('Error: ' . mysqli_error($con)); }
      if(mysqli_num_rows($usernameResult) > 0) {
        $username_exsits_error = "This username isn't available. Please try another.";
        $loader = false;
      }else {

        $query = "INSERT INTO korisnici (korisnik_fullname, korisnik_username, 	korisnik_email, korisnik_password, korisnik_role, datum)";
        $query .= " VALUES ('$fullnameVal', '$usernameVal', '$emailVal', '$passwordHash', 'korisnik', now())";
        $result = mysqli_query($con, $query);
  
        if ($result) {
          $_SESSION['korisnik_username'] = $usernameVal;
          $_SESSION['korisnik_fullname'] = $fullnameVal;
          $_SESSION['korisnik_role'] = 'korisnik';
          $loader = false;
          header('Location: ../../dashboard');
        }
      }

    }


    
  }
  
  // if (empty($_POST["phone"])) {
  //   $phone_error = "Phone is required";
  // } else {
  //   $phone = test_input($_POST["phone"]);
  //   // check if e-mail address is well-formed
  //   if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
  //     $phone_error = "Invalid phone number"; 
  //   }
  // }

  // if (empty($_POST["url"])) {
  //   $url_error = "";
  // } else {
  //   $url = test_input($_POST["url"]);
  //   // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
  //   if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
  //     $url_error = "Invalid URL"; 
  //   }
  // }
}




?>