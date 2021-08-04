<?php 
include("../inc/mydb.php"); 

    if(isset($_POST['insert'])){

        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $tags = $_POST['tags'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];

        $thumb = $_FILES['thumb']['name'];
        $tmp_thumb = $_FILES['thumb']['tmp_name'];

        if($title == '' OR $desc == '' OR $category == '' OR $brand == ''){
            header("location:index.php?error=7070");
            exit();
        }else{
            move_uploaded_file($tmp_thumb, "images/".$thumb);
            $query = "INSERT INTO `products` (`pro_cat`, `pro_brand`, `pro_title`, `pro_desc`, `pro_thumb`, `pro_price`, `pro_tags`) VALUES ('$category', '$brand', '$title', '$desc', '$thumb', '$price', '$tags')";
            $sql = mysqli_query($db, $query);
            if($sql){
                header("location:index.php?successfully=9090");
                exit();
            }
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
                <h4 class="text-center text-primary">درج محصول جدید <small>با استفاده از فرم زیر محصول مورد نظر خود را برای فروش و دیده شدن در سایت قرار دهید.</small></h4>
            </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">عنوان محصول : </label>
                            <input type="text" class="form-control" name="title" placeholder="عنوان محصول">
                            <div class="help-block">پر کردن این فیلد اجباری است.</div>
                        </div>
                        <div class="form-group">
                            <label for="desc">توضیحات محصول : </label>
                            <textarea name="desc" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="thumb">تصویر محصول : </label>
                            <input type="file" name="thumb" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tags">برچسب محصول : </label>
                            <input type="text" name="tags" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">قیمت محصول : </label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">دسته بندی محصول : </label>
                            <select class="form-control" name="category">
                                <option>انتخاب نان </option>
                                <?php  
                                    $cquery = "SELECT * FROM `categories`";
                                    $csql = mysqli_query($db, $cquery);
                                    while ($crows = mysqli_fetch_array($csql)) {
                                        $cat_id = $crows['cat_id'];
                                        $cat_title = $crows['cat_title'];
                                        echo "<option value='$cat_id'>$cat_title</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand">دسته بندی محصول : </label>
                            <select class="form-control" name="brand">
                                <option>انتخاب فروشگاه </option>
                                <?php  
                                    $bquery = "SELECT * FROM `brands`";
                                    $bsql = mysqli_query($db, $bquery);
                                    while ($brows = mysqli_fetch_array($bsql)) {
                                        $brand_id = $brows['brand_id'];
                                        $brand_title = $brows['brand_title'];
                                        echo "<option value='$brand_id'>$brand_title</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-lg" name="insert" value="درج محصول">
                            <input type="reset" class="btn btn-danger" value="انصراف">
                        </div>
                    </div>
                </form>
            </div>
        </div>

</body>
</html>