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
                    
                    <li><a href="cart.php"> سبد خرید </a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <section class="container">
        
        <div class="slider">

    <!-- Insert to your webpage where you want to display the slider -->
    <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1337px;margin:0px auto 56px;">
        <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="images/1.jpg" alt="1"  title="1" />
                </li>
                <li><img src="images/2.jpg" alt="2"  title="2" />
                </li>
                <li><img src="images/3.jpg" alt="3"  title="3" />
                </li>
                <li><img src="images/4.jpg" alt="4"  title="4" />
                </li>
                <li><img src="images/5.jpg" alt="5"  title="5" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/1-tn.jpg" alt="1" title="1" /></li>
                <li><img src="images/2-tn.jpg" alt="2" title="2" /></li>
                <li><img src="images/3-tn.jpg" alt="3" title="3" /></li>
                <li><img src="images/4-tn.jpg" alt="4" title="4" /></li>
                <li><img src="images/5-tn.jpg" alt="5" title="5" /></li>
            </ul>
        </div>
    </div>
    <!-- End of body section HTML codes -->
            

        </div>
         <div class="jumbotron">
            <h2 class="text-center"> نان مورد نیاز خود را جستجو کنید .</h2>
            <form action="result.php" method="get">
                <div class="form-group">
                    <input type="text" name="user_search" class="form-control input-lg" placeholder="پیدا کن ...">
                </div>
                <div class="form-group text-center">
                <input type="submit" name="search" class="btn btn-info btn-lg" value="بگرد">
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">ارزانترین محصول</div>
                    <div class="panel-body">
                        <?php  
                        $query = "SELECT * FROM `products` ORDER BY pro_price ASC LIMIT 1";
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
                            echo "<div class='thumbnail'>
                        <img src='admin/images/$pro_thumb' class='img-responsive'>
                        <div class='caption'>
                           <h6 class='pull-left'>$pro_price <small class='text-info'>ریال</small></h6>
                            <h6 class='text-primary'>$pro_title</h6>
                            <p>$pro_desc</p>
                        </div>
                        <a href=''class='btn btn-info btn-block'>افزودن به سبد خرید </a>
                    </div>";
                }
                        
                    ?>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">نان ها</div>
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
                <?php 
                    getPro();
                    getCatPro();
                    getBrandPro();


                 ?>
            </div>
               <div class="panel panel-default">
                    <div class="panel-heading"> جدید ترین اخبار </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                             <ul >
                    <li ><a href="https://www.ghatreh.com/news/tag/32179-%D9%82%DB%8C%D9%85%D8%AA%20%D9%86%D8%A7%D9%86/0/20"> جدیدترین قیمت ها </i></a></li>
                    <li ><a href="https://donya-e-eqtesad.com/tags/%D8%A7%D8%AA%D8%AD%D8%A7%D8%AF%DB%8C%D9%87_%D9%86%D8%A7%D9%86%D9%88%D8%A7%DB%8C%D8%A7%D9%86">اتحادیه نانوا ها </i></a></li>
                    <li><a href="https://fa.wikipedia.org/wiki/%D9%86%D8%A7%D9%86"> تاریخچه پخت نان </i></a></li>
                    <li><a href="http://fdo.kaums.ac.ir/Default.aspx?PageID=287">خواص نان های سبوس دار </i></a></li>
                    <li><a href="https://kalleh.com/book/recipe/%D8%B7%D8%B1%D8%B2-%D8%AA%D9%87%DB%8C%D9%87-%D9%86%D8%A7%D9%86-%D8%AA%D8%A7%D9%81%D8%AA%D9%88%D9%86-%D8%AE%D8%A7%D9%86%DA%AF%DB%8C-%D8%B3%D8%A7%D8%AF%D9%87-%D9%88-%D8%B3%D8%B1%DB%8C%D8%B9/"> طرز پخت نان تافتون خانگی  </i></a></li>

                </ul>
                        </ul>
                    </div>
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
    
</body>
</html>