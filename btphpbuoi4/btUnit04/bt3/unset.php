<?php
session_start();
$MaSP = $_GET['MaSP'];
unset($_SESSION['cart'][$MaSP]);
setcookie('unser','xoa san phm tia gio hang thanh cong', time()+3);
header('location: cart.php');
 ?>