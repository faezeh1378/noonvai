
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="../style.css">

<html>
<head>
<style>
body {
font-family: Arial;
direction: rtl;
}
* {
box-sizing: border-box;
}
.container {
width: 800px;
padding: 16px;
background-color: white;
border: 1px solid #333;
}
input{
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}
input:focus{
background-color: #ddd;
outline: none;
}
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
.registerbtn {
background-color: #4CAF50;
color: #fff;
padding: 15px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
.registerbtn:hover {
opacity: 1;
}
a {
color: dodgerblue;
}
.signin {
background-color: #f1f1f1;
text-align: center;
}
</style>
</head>
<body>
	
<div class="container">
<form action="/action_page.php">
<h1>ثبت نام فروشنده نان </h1>

<hr>
<label for="fname"><b>نام و نام خانوادگی </b></label>
<input type="text" placeholder="نام و نام خانوتدگی خود را وارد کنید " name="fname" required>

<label for="cantact"><b>شماره تماس </b></label>
<input type="text" placeholder="شماره تماس خود را وارد کنید " name="cantact" required>

<label for="addres"><b>ادرس مغازه  </b></label>
<input type="text" placeholder="خیابان ، کوچه " name="addres" required>

<label for="name store"><b>نام مغازه  </b></label>
<input type="text"  name="name store" required>

<label for="psw"><b>رمز عبور </b></label>
<input type="password" placeholder=" رمز عبئر را وارد کنید " name="psw" required>
<label for="psw-repeat"><b> تکرار رمز عبور </b></label>
<input type="password" placeholder="رمز عبور خود را مجدد وارد کنید  " name="psw-repeat" required>

<button type="submit" class="registerbtn">ثبت اطلاعات </button>
<div class="signin">

</div>
</form>
</div>
</body>
</html>
</head>
<body>

     

</body>
</html>