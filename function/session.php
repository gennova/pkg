<?php
   include('database.php');

define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'santoyos_pkgs');
   define('DB_PASSWORD', 'solider33');
   define('DB_DATABASE', 'santoyos_pkgs');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select user ,pass from loginlist where user= '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['user'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
   }
?>