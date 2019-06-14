<?php
session_start();
//ktra nguoi dung da dang nhap chua
if (!isset($_SESSION['username'])){
		   header('location: Dangnhap.php'); 
		  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
</head>
<body>
      Chúc mừng bạn có Tên đăng nhập là <?php echo $_SESSION['username']; ?> Đã đăng nhập thành công !
</body>
</html>