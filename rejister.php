<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
mysqli_query($db, "SET NAMES utf8");

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
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
</head>

<body>
 <!--start menu-->
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 85.375px;">
        <div class="container">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width: 863.125px;">
               


                    <ul class="navbar-nav ms-auto"  >
                    <!--<li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black; width: 75px;">درباره ما</a></li>
                    <li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black;width: 75px;">درباره ما</a></li>-->
                    <li class="nav-item"><img style="width: 54px;height: 49px;" src="assets/img/logo/logo.jpg" alt=""></li>
                    <li class="nav-link"><a class="nav-link" href="index.html"style="font-size: 18px; ">خانه</a></li>
                    <li class="nav-link"><a class="nav-link" href="blog.html"style="font-size: 18px;">مقالات</a></li>
                    <li class="nav-link"><a class="nav-link" href="contact-us.html"style="font-size: 18px;">درباره ما</a></li>
                    <li class="nav-link"><a class="nav-link" href="contact-us.html"style="font-size: 18px;">تماس با ما</a></li>
                   
                    
                    <nav class="navbar bg-body-tertiary" style="padding-right: 300px;">
                        <button class="btn btn-primary d-block icon-button w-100" type="button" style="background: rgb(255,255,255);height: 36px;width: 75.078px;;">
                        <span style="font-size: 13px;font-weight: bold;color: rgb(40,40,40); font-family: iransans;">ورود / ثبت نام&nbsp;&nbsp;</span>
                        <i class="fa fa-user" style="font-size: 12px;color: var(--bs-navbar-active-color);border-radius: 4px;border-width: 2px;border-color: #0d6efd;"></i></button>
                        </nav>
                    
                    
                    <nav class="navbar bg-body-tertiary" style="padding-right: 5px;">
                        <button class="btn btn-primary d-block icon-button w-100" type="button" style="background: rgb(255,255,255);height: 36px;width: 75.078px;">
                            <span style="font-size: 13px;font-weight: bold;color: rgb(40,40,40);">ارسال دستور پخت&nbsp;</span>
                            <i class="fa fa-plus" style="font-size: 12px;color: var(--bs-navbar-active-color);border-radius: 4px;border-width: 2px;border-color: #0d6efd;"></i></button>
                        </nav>

                    
                  
                </ul>
            </div>
        </div>
    </nav>
<!--end menu-->

    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"> ثبت نام</h2>
                    <p>لطفا در صورت داشتن هر گونه نظرات، پیشنهادات، انتقاد و شکایات پیام خود را در فرم زیر ارسال فرمایید.</p>
                </div>
                <form action="rejister.php" method="post" >
                    <div class="mb-3" style="text-align: right;"><label class="form-label" name="name" for="name">نام  </label><input class="form-control" type="text" id="name" name="name"></div>
                    <div class="mb-3" style="text-align: right;"><label class="form-label" name="family" for="family">  نام خانوادگی </label><input class="form-control" type="text" id="family" name="family"></div>
                    <div class="mb-3" style="text-align: right;"><label class="form-label" name="phonnumber" for="phonnumber">   تلفن همراه </label><input class="form-control" type="text" id="phonnumber" name="phonnumber"></div>
                    <div class="mb-3"style="text-align: right;"><label class="form-label" name="email" for="email">ادرس ایمیل</label><input class="form-control" type="email" id="email" name="email"></div>
                    <div class="mb-3" style="text-align: right;"><label class="form-label"  for="password">رمز </label><input class="form-control" type="password" id="password" name="password"></div>
                    <div class="mb-3"style="text-align: right;"><label class="form-label" for="password">کرار رمز</label><input class="form-control" type="password" id="confpassword" name="confpassword"></div>
                    <div class="mb-3"style="text-align: right; "><button class="btn btn-primary" name="btnsabt" type="submit" style="background-color: green;border: none; float: left;">ارسال پیام</button></div>
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
                        <li style="text-align: right;"><label class="form-label" style="text-shadow: 0px 0px;--bs-body-color: #d2d1d1;--bs-dark: #1e7bd9;--bs-dark-rgb: 30,123,217;border-color: rgb(35,124,213);color: rgb(210,209,209);">خانه&nbsp;</label><a href="#" style="text-align: right;"><i class="fas fa-chevron-left" style="color: rgb(13,110,253);font-size: 11px;"></i></a></li>
                        <li style="text-align: right;"><a href="#">ثبت نام</a></li>
                        <li style="text-align: right;"><a href="#" style="text-align: right;">مقالات</a></li>
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
if(isset($_POST['btnsabt'])) {
    $name = $_POST['name'];
    $family = $_POST['family'];
    $phonnumber = $_POST['phonnumber'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confpassword = md5($_POST['confpassword']);

    if($password!= $confpassword){
        echo "<script>alert('گذرواژه و تکرار آن با هم برابر نیستند')</script>";
    }
    else{
       // mysqli_query($db,"INSERT INTO user('name','family','phon-number','passwod','email')
       //  VALUES('$name','$family','$phonnumber','$email','$password')");
       mysqli_query($db,"INSERT INTO users(`name`,`family`,`phon-number`,`passwod`,`email` )
 
        VALUES ('$name','$family','$phonnumber','$password','$email')");
        echo "<script>alert('ثبت نام شما با موفقیت انجام شد')</script>";

    }
}
?>