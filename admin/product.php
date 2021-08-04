<?php include("../inc/mydb.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered"> <!--class table bootstrap -->
                    <thead>
                        <tr>
                            <th>کد محصول</th>
                            <th>تصویر شاخص</th>
                            <th>عنوان محصول</th>
                            <th>قیمت محصول</th>
                            <th>تگ های محصول</th>
                            <th colspan="2">عملیات</th>
                        </tr>
                    </thead>
                    <?php  
                        $query = "SELECT * FROM `products` ORDER BY pro_id DESC";
                        $sql = mysqli_query($db, $query);
                        while ($rows = mysqli_fetch_array($sql)) {
                            $pro_id = $rows['pro_id'];
                            $pro_cat = $rows['pro_cat'];
                            $pro_brand = $rows['pro_brand'];
                            $pro_title = $rows['pro_title'];
                            $pro_desc = $rows['pro_desc'];
                            $pro_thumb = $rows['pro_thumb'];
                            $pro_price = $rows['pro_price'];
                            $pro_tags = $rows['pro_tags'];
                        
                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo $pro_id; ?></td>
                            <td><img src='images/<?php echo $pro_thumb; ?>' class='img-responsive' width='60' height='60' /></td>
                            <td><?php echo $pro_title; ?></td>
                            <td><?php echo $pro_price; ?></td>
                            <td><?php echo $pro_tags; ?></td>
                            <td><a href="index.php?edit=<?php echo $pro_id; ?>">ویرایش</a></td>
                            <td><a href="delete.php?del=<?php echo $pro_id; ?>">حذف</a></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>


</body>
</html>