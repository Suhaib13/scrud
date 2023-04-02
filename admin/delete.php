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
    $yes=$_POST['yes'];
    $no=$_POST['no'];
    $id=$_GET['id'];
    if(isset($yes)) {
        $sql = "DELETE from users WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        echo '<div class="alert alert-success">'.'تم حذف البيانات بنجاح'.'</div>';
    header("REFRESH:3;URL=viwe.php");
    }
    if(isset($no)) {
        header("location:viwe.php");

    }
    ?>
</head>
<body>
    <form action="" method="post">
        <center>
        <h3>هل انت متأكد من الحذف</h3>
        <button class="btn btn-danger" type="submit" name="no">إلغاء</button>
        <button class="btn btn-success" type="submit" name="yes">تاكيد</button>

        </center>
    </form>
</body>
</html>