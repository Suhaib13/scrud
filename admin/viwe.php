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
$sql = "SELECT * from users";
$result = mysqli_query($conn,$sql);
?>
</head>
<body>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>كود المستخدم</th>
            <th> الاسم</th>
            <th> اسم المستخدم</th>
            <th>كلمة السر</th>
            <th>حذف </th>
            <th>تعديل</th>



        </tr>
    </thead>
    <?php 
    while($row = mysqli_fetch_assoc($result)){

  
    ?>
    <tbody>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['uesrname'];?></td>
        <td><?php echo $row['password'];?></td>
        <td>
            <button class="btn btn-danger">
        <a href="delete.php?id=<?php echo $row['id']?>">
        حذف
        </a>
            </button>
        </td>
        <td>
            <button class="btn btn-warning">
        <a href="edit.php?id=<?php echo $row['id']?>">
        تعديل
        </a>
            </button>
        </td>
    </tbody>
    <?php 
      }
    ?>
    </table>
</body>
</html>