<?php
include __DIR__ . '/configs.php';
@session_start();
$user_check=@$_SESSION['email'];
$ses_sql = mysqli_query($aquaglz,"SELECT email, rank, firstname, lastname, avatar, bTag FROM users WHERE email='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['email'];
$login_rank=$row['rank'];
?>
