<?php 
include("../inc/mydb.php"); 
    if(isset($_GET['edit'])){
        $get_id = $_GET['edit'];
        $query = "SELECT * FROM `products` WHERE pro_id = '$get_id'";
        $sql = mysqli_query($db, $query);
        $rows = mysqli_fetch_array($sql);
        $pro_id = $rows['pro_id'];
        $pro_cat = $rows['pro_cat'];
        $pro_brand = $rows['pro_brand'];
        $pro_title = $rows['pro_title'];
        $pro_desc = $rows['pro_desc'];
        $pro_thumb = $rows['pro_thumb'];
        $pro_price = $rows['pro_price'];
        $pro_tags = $rows['pro_tags'];

        //GET category
        $cq = "SELECT * FROM `categories` WHERE cat_id = '$pro_cat'";
        $cs = mysqli_query($db, $cq);
        $cr = mysqli_fetch_array($cs);
        $cr_title = $cr['cat_title'];

        //get brand
        $bq = "SELECT * FROM `brands` WHERE  brand_id = '$pro_brand'";
        $bs = mysqli_query($db, $bq);
        $br = mysqli_fetch_array($bs);
        $br_title = $br['brand_title'];

        //set click button edit
        if(isset($_POST['edit'])){
            $up_id = $pro_id;
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $tags = $_POST['tags'];
            $price = $_POST['price'];
            $cat = $_POST['category'];
            $brand = $_POST['brand'];

            $thumb = $_FILES['thumb']['name'];
            $tmp_thumb = $_FILES['thumb']['tmp_name'];

            if($title == '' OR $desc == '' OR $cat == '' OR $brand == ''){
                header("location:index.php?error_edit=8741");
                exit();
            }else{
                move_uploaded_file($tmp_thumb, "images/".$thumb);
                $eq = "UPDATE products SET pro_title = '$title', pro_cat = '$cat', pro_brand = '$brand', pro_desc = '$desc', pro_tags = '$tags', pro_thumb = '$thumb', pro_price = '$price' WHERE pro_id = '$up_id'";
                $es = mysqli_query($db, $eq);
                if($es){
                    header("location:index.php?successfully=5212");
                    exit();
                }
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
                <h4 class="text-center text-primary">ویرایش محصول <small>با استفاده از فرم زیر محصول مورد نظر خود را برای فروش و دیده شدن در سایت قرار دهید.</small></h4>
            </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">عنوان محصول : </label>
                            <input type="text" class="form-control" name="title" value="<?php echo $pro_title; ?>">
                            <div class="help-block">پر کردن این فیلد اجباری است.</div>
                        </div>
                        <div class="form-group">
                            <label for="desc">توضیحات محصول : </label>
                            <textarea name="desc" class="form-control"><?php echo $pro_desc; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="thumb">تصویر محصول : </label>
                            <img src="images/<?php echo $pro_thumb; ?>" class='img-responsive' width='60' height='60'>
                            <input type="file" name="thumb" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tags">برچسب محصول : </label>
                            <input type="text" name="tags" class="form-control" value="<?php echo $pro_tags; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">قیمت محصول : </label>
                            <input type="number" name="price" class="form-control" value="<?php echo $pro_price; ?>">
                        </div>
                        <div class="form-group">
                            <label for="category">دسته بندی محصول : </label>
                            <select class="form-control" name="category">
                                <option><?php echo $cr_title; ?></option>
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
                                <option><?php echo $br_title; ?></option>
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
                            <input type="submit" class="btn btn-success btn-lg" name="edit" value="درج محصول">
                            <input type="reset" class="btn btn-danger" value="انصراف">
                        </div>
                    </div>
                </form>
            </div>
        </div>

</body>
</html>