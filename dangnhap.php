<?php 
     session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dangnhap</title>
</head>
<body>
     <form method="post" action="dangnhap.php">
       <table border="1" align="center" bgcolor="#5782CD" cellpadding="0" cellspacing="0" width="300px" height="100px" >
                <tr>
                     <td colspan="2" align="center">ĐĂNG NHẬP</td>
                </tr>
                <tr>
                     <td>Username:</td>
                     <td><input type="text" name="username" size="30"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" size="30"></td>
                </tr>
                <tr align="center">
                     <td colspan="2"><input type="submit" name="ok" value="Đăng nhập"></td>
                </tr>
       </table>
     </form>   
     <?php 
	      include('connect.php');
	      if(isset($_POST['ok']))
		  {
			  $username = $_POST['username'];
			  $password = $_POST['password'];
			  $username = strip_tags($username); 
              $username = addslashes($username); 
              $password = strip_tags($password); 
              $password = addslashes($password);

			  if ($username == "" || $password == "")
			  {
				echo "mât khẩu và tài khoản không được để trống";
				  }
				  else{
				      $sql ="Select * from dangky where username = '$username' and password = '$password' ";
					  $query = mysqli_query($conn,$sql);
					  $num_rows = mysqli_num_rows($query);
					  if ($num_rows==0) {
					  echo "tên đăng nhập mật khẩu không đúng !";
					  }else{
					      $_SESSION['username'] = $username;
						  header('location: index.php');
					  }
		  }}
	  ?>  
</body>
</html>