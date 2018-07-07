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

<?php include '../singup.php'; ?>
<!-- SINGUP -->
<div class="singup">

  <!-- <div class="singup-login-loader" id="singupLoginLoader">Loading...</div> -->
  <div class="u-container singup__container">
    <h1 class="singup__title">Sing Up</h1>
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
               id="singupEmail"
               value="<?php echo $email; ?>"
               placeholder="Email"
               >
        <?php
          if ($email_error or $email_exsits_error) {
            echo '<i class="fa fa-circle form__input-error" aria-hidden="true"></i>';
          }
        ?>
        <!-- <i class="fa fa-check form__input-success" aria-hidden="true"></i> -->
      </div>
      <div class="form__group">
      <input type="text" 
             class="form__input" 
             name="fullname"
             id="singupFullname"
             value="<?php echo $fullname; ?>"
             placeholder="Full name"
             >
      <?php
        if ($fullname_error) {
          echo '<i class="fa fa-circle form__input-error" aria-hidden="true"></i>';
        }
      ?>   
      </div>
      <div class="form__group">
      <input type="text" 
             class="form__input" 
             name="username"
             id="singupUsername"
             value="<?php echo $username; ?>"
             placeholder="Username"
             >
     <?php
        if ($username_error or $username_exsits_error) {
          echo '<i class="fa fa-circle form__input-error" aria-hidden="true"></i>';
        }
      ?> 
      </div>
      <div class="form__group">
      <input type="password" 
             class="form__input" 
             name="password"
             id="singupPassword"
             placeholder="Password" 
             autocomplete="new-password"
             >
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
          }else if ($fullname_error !== '') {
            echo $fullname_error;
          }else if ($username_error !== '') {
            echo $username_error;
          }else if ($password_error !== '') {
            echo $password_error;
          }else if ($email_exsits_error !== '') {
            echo $email_exsits_error;
          }else if ($username_exsits_error !== '') {
            echo $username_exsits_error;
          }
        ?>
      </div>
      <div class="form__group btn__container">
        <button class="btn btn--main" type="submit" name="submit">Sing up</button>
      </div>
      <p class="form__data">By signing up, you agree to our <strong>Terms</strong>, <strong>Data Policy</strong> and <strong>Cookies Policy</strong>.</p>
    </form>
  </div>
  <div class="u-container singup__container-plus">
    <p>Have an account? <a href="../login" class="btn btn--text">Log in</a></p>
  </div>
</div>

</body>
</html>