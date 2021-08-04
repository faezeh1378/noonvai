<?php include("../inc/mydb.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <header>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">کنترل پنل سایت</a>
                </div>
                <ul class="nav navbar-nav">
                   
                    <li><a href="index.php?product">همه محصولات</a></li>
                    <li><a href="index.php?insert_pro">افزودن محصول جدید</a></li>
                    <li><a href="index.php?insert_cat">افزودن دسته جدید</a></li>
                    <li><a href="index.php?insert_brand">افزودن فروشگاه جدید</a></li>
                   
                    <li><a href="../index.php">خانه </a></li>

                </ul>
            </div>
        </div>
    </header>
    
    <section>
        <div class="container">
           <div class="jumbotron text-center">
               <h2>مدیر عزیز خوش  آمدید </h2>
           </div>
            <div class="row">
                


                </div>
                
                <div class="col-md-9">
                    <?php  
                        if(isset($_GET['product'])){
                             include("product.php");
                        }else if(isset($_GET['insert_pro'])){
                               include("insert_pro.php");
                        }else if(isset($_GET['insert_cat'])){
                               include("insert_cat.php");
                        }else if(isset($_GET['insert_brand'])){
                                include("insert_brand.php");
                        }else if(isset($_GET['edit'])){
                                include("edit_pro.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
     
</body>
</html>