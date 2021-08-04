<?php include("inc/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>

      <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    <link rel="stylesheet" type="text/css" href="fontAwsome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="fontAwsome/css/font-awesome.min.css" />
   
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <header>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">فروشگاه اینترنتی </a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="login.php">ورود</a></li>
                    <li><a href="register.php"> ثبت نام فروشندگان نان </a></li>
                    <li><a href="news.php"> اخبار مربوط به نان </a></li>
                    <li><a href="cart.php"> سبد خرید </a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <section class="container">
        
      
   <div class="jumbotron">
            <h2 class="text-center">نانوایی </h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">دسته ها</div>
                    <div class="panel-body">
                        <form action="result.php" method="get">
                            <div class="form-group">
                                <input type="text" name="user_search" class="form-control input-lg" placeholder="پیدا کن ...">
                            </div>
                            <div class="form-group text-center">
                            <input type="submit" name="search" class="btn btn-info btn-lg" value="بگرد">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">نان ها </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <?php getCat(); ?>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">فروشگاه ها</div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <?php getBrand(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 well">
                <h4>نتایج جستجو : </h4>
                    <hr>
               
                    <?php  
                        if(isset($_GET['search'])){
                            $user_search = $_GET['user_search'];
                            $query = "SELECT * FROM `products` WHERE pro_tags LIKE '%$user_search%'";
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

                                echo "<div class='col-md-4'><div class='thumbnail'>
                        <img src='images/$pro_thumb' class='img-responsive'>
                        <div class='caption'>
                           <h6 class='pull-left'>$pro_price <small class='text-info'>ریال</small></h6>
                            <h6 class='text-primary'>$pro_title</h6>
                            <p>$pro_desc</p>
                        </div>
                        <a href=''class='btn btn-info btn-block'> افزودن به سبد خرید </a>
                    </div></div>";                      
                            }
                        }




                    ?>


            </div>
        </div>
    </section>

        <div class="container">
            <div class="row well text-center">

            <div class="socialpage">
                <ul >
                    <li ><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li ><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

                </ul>
                <p>کلیه حقوق مادی و معنوی وبسایت متعلق به   نانوایی می باشد.</p>
            </div><!-- socialpage -->

            </div>
        </div>
    </footer>
    
</body>
</html>