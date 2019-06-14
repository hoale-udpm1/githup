<!doctype html>
<html>
<head>
<meta  charset="utf-8">
<title>dangky</title>
</head>
<body>
      <form method="post" enctype="multipart/form-data" style="text-align:center">
             <table width="800px" cellspacing="5" cellpadding="0" bgcolor="#5782CD" border="1">
                    <tr>
                        <td colspan="2" align="center">Đăng Ký</td>
                    </tr>
                    <tr>
            	<td>Họ Và Tên</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
            	<td>Ðịa chỉ</td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr>
            	<td>Ðiện thoại</td>
                <td><input type="text" name="dt"></td>
            </tr>
            <tr>
            	<td>Giới Tính</td>
                <td><input type="radio" name="gt" value="Nam">Nam<input type="radio" name="gt" value="Nữ">Nữ</td>
            </tr>	
             <tr>
            	<td>Tên Tài Khoản</td>
                <td><input type="text" name="tk"></td>
            </tr>
            <tr>
            	<td>Mật khẩu</td>
                <td><input type="password" name="mk"></td>
            </tr>
            <tr>
            	<td>Nhập lại mật khẩu</td>
                <td><input type="password" name="nlmk"></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="ok" value="Đồng ý"></td>
                </tr>
		</table>
        </form>
        
<?php 
	include('connect.php');
	if(isset($_POST['ok']))
	{
		$hovaten=$_POST['name'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dt'];
		$gioitinh=$_POST['gt'];
		$tentaikhoan=$_POST['tk'];
		$matkhau=$_POST['mk'];
		$nhaplaimatkhau=$_POST['nlmk'];	
		if ( $hovaten == "" || $diachi == "" || $dienthoai == "" || $gioitinh == "" || $tentaikhoan == "" || $matkhau == "" || $nhaplaimatkhau == ""){ 
		
		          echo "bạn vui lòng điền đầy đủ thông tin"; }
		   else{
			        //kiem tra tai khoan da ton tai chua
			   $sql= "select * from dangky where name='$hovaten'";
			   $kt= mysqli_query($conn,$sql); 		   
			   if(mysqli_num_rows($kt) > 0)
			   {
				   echo "tai khoan ton tai";
			   }else{
			         // thuc hien du lieu vao db
		$sql="insert into dangky(name,address,phone,sex,username,password) 
		values('$hovaten','$diachi','$dienthoai','$gioitinh','$tentaikhoan''$matkhau','$nhaplaimatkhau')";
		       mysqli_query($conn,$sql);
			   echo "dang ky thanh cong";
			   }
		   }
	}
	  ?>
</body>
</html>