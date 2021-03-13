<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
      include'./connect_db.php';
      $result = mysqli_query($con,"select * from user");

    ?>

    <div id="user-info">
        <h1>Danh sách tài khoản</h1>
        <a href="./create-_user.php">Tạo tài khoản mới</a>
        <table id="user-listing" style="width:700px;">
            <tr>
                <td>User</td>
                <td>Trạng thái</td>
                <td>Ngày lập</td>
                <td>Cập nhật</td>
                <td>Sửa</td>
                <td>Xóa</td>
            </tr>
            <?php
              while($row = mysqli_fetch_array($result)){  ?>
             
                <tr>
                <td><?= $row['username'] ?></td>
                <td><?= $row['status'] == 1 ? "Kích hoạt" : "Chưa kích hoạt" ?></td>
                <td><?= date('d/m/Y H:i') , $row['create_time'] ?></td>
                <td><?= date('d/m/Y H:i') , $row['last_updated'] ?></td>
                <td><a href="./edit_user.php?id=<?= $row['id'] ?>">Sửa</a></td>
                <td><a href="./delete_user.php?id=<?= $row['id'] ?>">Xóa</a></td>

                </tr>
            <?php } ?>


        </table>
    </div>
</body>

</html>