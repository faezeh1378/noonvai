<?php 
include("inc/config.php"); 

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username) || empty($password)){
            header("location:login.php?error=1010");
            exit();
        }else{
            $query = "SELECT * FROM `manager` WHERE username='$username' && password='$password'";
            $sql = mysqli_query($db, $query);

            if($rows = mysqli_fetch_assoc($sql)){
                header("location:admin");
                exit();
            }else{
                header("location:login.php?logerror=2020");
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">فروشگاه اینترنتی من</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="login.php">ورود</a></li>
                    <li><a href="register.php"> ثبت نام فروشندگان نان </a></li>
                    <li><a href="news.php"> اخبار مربوط به نان </a></li>
                    <li><a href="cart.php">سبد خرید</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <section class="container">
        <div class="jumbotron">
            <h2 class="text-center">نانوایی</h2>
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
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <?php  
                    if(isset($_GET['error'])){
                        echo "<div class='alert alert-danger'>فیلدها باید پر شوند.</div>";
                    }else if(isset($_GET['logerror'])){
                        echo "<div class='alert alert-danger'>کاربری با این مشخصات در سیستم موجود نیست.</div>";
                    }
                ?>
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>ورود به سیستم</h4>
                        </div>
                        <div class="panel-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="username">نام کاربری</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">رمز عبور</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    
                                    <input type="submit" name="login" class="btn btn-success btn-block" value="ورود">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    
    
    
</body>
</html>