<?php 
include("../inc/mydb.php"); 

    if(isset($_POST['insert'])){

        $title = $_POST['title'];

        $query = "INSERT INTO `brands`(`brand_title`) VALUES ('$title')";
        $sql = mysqli_query($db, $query);
        if($sql){
            header("location:index.php?successfully=3060");
            exit();
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

        <div class="row well">
            <div class="col-md-12">
            <div class="page-header">
                <h4 class="text-center text-primary">درج  فروشگاه جدید <small>با استفاده از فرم زیر محصول مورد نظر خود را برای فروش و دیده شدن در سایت قرار دهید.</small></h4>
            </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">عنوان  فروشگاه : </label>
                            <input type="text" class="form-control" name="title" placeholder="عنوان  فروشگاه ">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="درج فروشگاه جدید" class="btn btn-info btn-lg" name="insert">
                        </div>
                </form>
            </div>
        </div>

</body>
</html>