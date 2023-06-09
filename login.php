<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Icon-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled-2.css">
    <link rel="stylesheet" href="assets/css/untitled-3.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="assets/css/menu1.css">

<style>
    @font-face {
font-family: vazir;
src: url(assets/Font/Vazir-Medium.eot) format('eot'),
     url(assets/Font/Vazir-Medium.ttf) format('ttf'),
     url(assets/Font/Vazir-Medium.woff) format('woff'),
     url(assets/Font/Vazir-Medium.woff2) format('woff2');
}
</style>

</head>
<!--start menu-->
<body  style="font-family: vazir;">
       <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 85.375px;">
        <div class="container">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width: 863.125px;">
               


                    <ul class="navbar-nav ms-auto"  >
                    <!--<li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black; width: 75px;">درباره ما</a></li>
                    <li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black;width: 75px;">درباره ما</a></li>-->
                    <li class="nav-item"><a class="nav-link1" href="index.html"style="font-size: 18px; "><img style="width: 54px;height: 49px;" src="assets/img/logo/logo.jpg" alt=""></a></li>
                    <li class="nav-link"><a class="nav-link" href="index.html"style="font-size: 18px; ">خانه</a></li>
                    <li class="nav-link"><a class="nav-link" href="blog.html"style="font-size: 18px;">مقالات</a></li>
                    <li class="nav-link"><a class="nav-link" href="contact-us.html"style="font-size: 18px;">تماس با ما</a></li>
                   
                    
                    
                    <a href="dastor-pokht-user.html" style="text-decoration: none;">
                        <nav class="navbar bg-body-tertiary" style="padding-right: 500px;">
                            <button class="btn btn-primary d-block icon-button w-100" type="button" style="background: rgb(255,255,255);height: 36px;width: 75.078px;">
                                <span style="font-size: 13px;font-weight: bold;color: rgb(40,40,40);">ارسال دستور پخت&nbsp;</span>
                                <i class="fa fa-plus" style="font-size: 12px;color: var(--bs-navbar-active-color);border-radius: 4px;border-width: 2px;border-color: #0d6efd;"></i></button>
                            </nav>
                        </a>
                        <!--ورود-->
                        <a href="login.html" style="text-decoration: none;">
                            <nav class="navbar bg-body-tertiary" style="padding-right: 5px;">
                                <button class="btn btn-primary d-block icon-button w-100" type="button" style="background: rgb(255,255,255);height: 36px;width: 75.078px;;">
                                <span style="font-size: 13px;font-weight: bold;color: rgb(40,40,40); font-family: iransans;">ورود&nbsp;&nbsp;</span>
                                <i class="fa fa-user" style="font-size: 12px;color: var(--bs-navbar-active-color);border-radius: 4px;border-width: 2px;border-color: #0d6efd;"></i></button>
                                </nav>
                            </a>
                      
                    
                  
                </ul>
            </div>
        </div>
    </nav>
<!--end menu-->

    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">ورود کاربر</h2>
                 <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>--> 
                </div>
                <form>
                    <div class="mb-3" style="text-align: right;">
                        <label class="form-label" for="email">ایمیل</label>
                        <input class="form-control item" type="email" name="email" id="email"></div>

                    <div class="mb-3" style="text-align: right;">
                        <label class="form-label" for="password" style="text-align: right;font-size: 18px;">رمز</label>
                        <input class="form-control" type="password" id="password name="password""></div>
                    <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">مرا به خاطر بسپار</label></div>
                    </div><button class="btn btn-primary" name="btnlogin" type="submit" style="font-size: 17px;font-weight: bold;">ورود</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-5">
                    <h5 style="text-align: right;">درباره ما</h5>
                    <ul></ul><label class="form-label" style="color: rgb(152,153,154);text-align: right;"><br>ما تصمیم داریم آرشیو کاملی از دستور پخت های غذاهارو داشته باشیم که با یه سرچ ساده پیداشون کنیم. شما هم میتونی توی این مسیر همراه ما باشی و برامون دستور پخت های خودت رو بفرستی<br><br><br></label>
                </div>
                <div class="col-sm-3 col-lg-4">
                    <h5 style="text-align: right;">تماس با ما&nbsp;</h5>
                    <ul>
                        <li style="text-align: right;"><a href="#" style="text-align: right;">nasim@gmail.com</a></li>
                        <li style="text-align: right;"><a href="#" style="text-align: right;">تلفن: 031-5555555540</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5 style="text-align: right;">دسترسی سریع</h5>
                    <ul>
                        <li style="text-align: right;"><a href="index.html">خانه</a></li>

                        <li style="text-align: right;"><a href="login.html">ثبت نام</a></li>
                        <li style="text-align: right;"><a href="blog.html" style="text-align: right;">مقالات</a></li>
                    </ul>
                </div>
                
             
            </div>
        </div>
        <div class="footer-copyright">
            <p>© کپی برداری از مطالب سایت با ذکر نام رنسیم و لینک مستقیم بلا مانع است</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
<?php
if(isset($_POST['btnlogin']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $check=mysqli_query($db,"select * from users where email='$email' and passwod='$password'");
    if(mysqli_num_rows($check)>0)
    {
        $_SESSION['user']=$email;
        echo "<script>alert('  OOOOK     .')</script>";
        header("Location: index.php");
    }
    else {
        echo "<script>alert('ایمیل یا گذرواژه خود را اشتباه وارد نموده اید یا ثبت نام نکرده اید.')</script>";
    }
}
?>