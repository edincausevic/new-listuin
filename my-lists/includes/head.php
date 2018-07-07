<?php
session_start();
if (!isset($_SESSION['korisnik_role'])) { header('Location: ../index.php'); } 
?>
<?php include '../includes/functions/renderContent.php'; ?>
<?php include '../includes/connection/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo 'My lists - ' . $_SESSION['korisnik_fullname']; ?></title>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/my-lists-styles.css">
</head>