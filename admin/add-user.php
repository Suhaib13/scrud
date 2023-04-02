<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
<?php 
include '../config.php';
error_reporting(0);
$send_btn=$_POST['send_btn'];
if(isset($send_btn)) {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $uesrname=$_POST['uesrname'];
    $password=$_POST['password'];
    $sql = "INSERT into users (name,age,uesrname,password) VALUES('$name','$age','$uesrname','$password')";
    $result = mysqli_query($conn, $sql);
    echo '<div class="alert alert-success">'.'تمت إضافة البيانات بنجاح'.'</div>';

}
?>
</head>
<body>
   <form action="" method="post">
   <h5>اضافة مستخدمين</h5>
    <label for="">الاسم</label>
    <input type="text" class="form-control" name="name">
    <label for="">السن</label>
    <input type="number" class="form-control" name="age">
    <label for="">اسم المستخدم</label>
    <input type="text" class="form-control" name="uesrname">
    <label for="">كلمة المرور</label>
    <input type="text" class="form-control" name="password">
    <button type="submit" class="btn btn-success" name="send_btn">ارسال</button>
   </form>
</body>
</html>