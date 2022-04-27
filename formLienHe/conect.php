<?php
header('content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$noidung = trim($_POST['noidung']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);


if (empty($username)) {
array_push($errors, "Username is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($phone)) {
array_push($errors, "content is required"); 
}
if (empty($noidung)) {
array_push($errors, "noidung"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn

 

$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="form.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO member (username, noidung, email, phone) VALUES ('$username','$noidung','$email','$phone')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="form.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Họ và Tên: ".$_POST['username']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";
echo "Số điện thoại: ".$_POST['phone']."<br/>";
echo "Nội dung: " .$_POST['noidung']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="form.php";</script>';
}
}
}
?>