<?php
  include '/../../Controller/AdminC.php';

  $adminC = new AdminC();

  $adminC->deleteAdmin($_COOKIE['idAdmin']);

  setcookie('adminLoggedin', false, time() + 3600, '/');
  setcookie('adminFirstname', '', time() + 3600, '/');
  setcookie('adminLastname', '', time() + 3600, '/');
  setcookie('idAdmin', '', time() + 3600, '/');

  header('Location: ./auth/signup.php');
  exit();
  
?>
