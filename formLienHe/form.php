<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css"/>
</head>
<body>

        <h2 align="center" bgcolor="aqua">Form Liên Hệ</h2>
  <form method="post" action="form.php" class="form">

        Họ và Tên : <input type="text" name="username"  required>

        Email: <input type="email" name="email"  required/>

        Phone: <input type="text" name="phone"  required/>

        Nội dung: <textarea  name="noidung" cols="30" rows="10" required></textarea>
        <hr>

        <button type="submit"  name="dangky">Submit</button>

        <button  type="submit">Clear</button>
        
<?php require 'conect.php';?>


</form>

</body>
</html>