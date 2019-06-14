<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>connect</title>
</head>
<body>
       <?php $conn= mysqli_connect("localhost","root","", "web") or die("Không thể kết nối được với connect");
	    mysqli_query($conn, "set names 'utf-8'"); ?>
</body>
</html>