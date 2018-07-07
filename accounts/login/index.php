<?php
session_start();
if (isset($_SESSION['korisnik_role'])) { header('Location: ../../index.php'); } 
include '../../includes/connection/db.php';
include '../functions/forms.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../../css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/accounts-styles.css">
</head>
<body>

<header class="header">
<nav class="header__nav u-clearFix">

<div class="logo__container u-acc-logo">
  <img src="../../img/logo.jpg" class="" alt="Listuin Logo">
  <span class="logo__text">Listuin</span>
</div>

<div class="u-right">
<a href="../../index.php" class="btn btn--nav btn--singin">
  <i class="fa fa-home" aria-hidden="true"></i> 
  <span class='header__nav header__nav-toggleText'> Home</span>
</a>
</div>
</nav>

</header>

<?php include '../login.php'; ?>
<!-- SINGUP -->
<div class="singup">
  <div class="u-container singup__container">
    <h1 class="singup__title">Login</h1>
    <hr class="hr--short"/>
    <form class="form singup__form" 
          method="post" 
          action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" 
          autocomplete="off" 
          novalidate>

      <div class="form__group">
        <input type="email" 
               class="form__input" 
               name="email" 
               id="loginEmail"
               value="<?php echo $email; ?>"
               placeholder="Email or username"
               >
        <?php
          if ($email_error) {
            echo '<i class="fa fa-circle form__input-error" aria-hidden="true"></i>';
          }
        ?>
        <!-- <i class="fa fa-check form__input-success" aria-hidden="true"></i> -->
      </div>
      
      <div class="form__group">
      <input type="password" 
             class="form__input" 
             name="password"
             id="loginPassword"
             placeholder="Password" 
             autocomplete="new-password">
        <?php
          if ($password_error) {
            echo '<i class="fa fa-circle form__input-error" aria-hidden="true"></i>';
          }
        ?>
      </div>
      <div class="form__error">
        <?php    
         if ($email_error !== '') {
           echo $email_error;
         }else if ($password_error !== '') {
           echo $password_error;
         }else if ($username_incorrect_error !== '') {
           echo $username_incorrect_error;
         }
        ?>
      </div>
      <div class="form__group btn__container">
        <button class="btn btn--main" type="submit" onclick="remeberUsername()">Login</button>
      </div>
      <p class="form__data"><a href="#" class="btn btn--text">Forgot password?</a></p>
    </form>
  </div>
  <div class="u-container singup__container-plus">
    <p>Don't have an account? <a href="../singup" class="btn btn--text">Sign up</a></p>
  </div>
</div>

<script src="../../js/accounts.js"></script>
</body>
</html>