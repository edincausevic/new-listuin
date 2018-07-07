<?php
if (isset($_SESSION)) { header('Location: ../index.php'); } 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<?php include '../includes/functions/renderContent.php'; ?>
<?php include '../includes/connection/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo 'Dashboard - ' . $_SESSION['korisnik_fullname']; ?></title>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/dashboard-styles.css">
</head>