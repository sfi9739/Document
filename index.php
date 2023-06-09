<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
mysqli_query($db,"SET NAMES UTF8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Icon-Button.css">
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
               


                    <ul class="navbar-nav ms-auto">
                        
                    <!--<li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black; width: 75px;">درباره ما</a></li>
                    <li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black;width: 75px;">درباره ما</a></li>-->
                    <li class="nav-item"><a class="nav-link1" href="index.php"style="font-size: 18px; "><img style="width: 54px;height: 49px;"src="assets/img/logo/logo.jpg" alt=""></a></li>
                    <li class="nav-link"><a class="nav-link" href="index.php"style="font-size: 18px; height: 50px;width: 50px;">خانه</a></li>
                    <li class="nav-link"><a class="nav-link" href="blog.php"style="font-size: 18px;">مقالات</a></li>
                    <li class="nav-link"><a class="nav-link" href="contact-us.php"style="font-size: 18px;">تماس با ما</a></li>
                   
                    
                    <a href="dastor-pokht-user.php" style="text-decoration: none;">
                    <nav class="navbar bg-body-tertiary" style="padding-right: 500px;">
                        <button class="btn btn-primary d-block icon-button w-100" type="button" style="background: rgb(255,255,255);height: 36px;width: 75.078px;">
                            <span style="font-size: 13px;font-weight: bold;color: rgb(40,40,40);">ارسال دستور پخت&nbsp;</span>
                            <i class="fa fa-plus" style="font-size: 12px;color: var(--bs-navbar-active-color);border-radius: 4px;border-width: 2px;border-color: #0d6efd;"></i></button>
                        </nav>
                    </a>
                    <!--ورود-->
                    <a href="login.php" style="text-decoration: none;">
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

    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image: url(&quot;assets/img/tech/03-Eggs.webp&quot;);color: rgba(141,142,142,0.63);">
            <div class="text">
                <form  action="search.php" method="post">
                <h2></h2><input class="search" type="text" name="search" placeholder="... جستجو">
                <p style="font-size: 27px;">جستجو در تمامی دستور پخت های سایت نسیم</p>
                </form>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="font-weight: bold;">آموزش آشپزی با سایت نسیم</h2>
                    <p>ما تصمیم داریم آرشیو کاملی از دستور پخت های غذاهارو داشته باشیم که با ی سرچ ساده پیداشون کنیم. شما هم میتونی توی این مسیر همراه ما باشی و برامون دستور پخت های خودت رو بفرستی</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 style="text-align: right;font-weight: bold;">طرز تهیه دلمه برگ مو</h3>
                        <div class="getting-started-info">
                            <p style="text-align: right;">دلمه برگ مو یکی از انواع غذاهای بسیار خوشمزه و معروف خاورمیانه است که در کشورمان ایران هم از محبوبیت بالایی برخوردار است. این غذای خوشمزه از ترکیب برنج به همراه گوشت، حبوبات و سبزیجات تهیه می شود و در برگ های درخت انگور پیچیده می شود. دلمه برگ مو را به سلیقه خود می توانیم به صورت سیگاری ( حالت لوله ای ) یا به صورت بقچه ای که متداول تر است درست کنیم</p>
                        </div><a class="nav-link" href="post.php" style="text-decoration: none"><button class="btn btn-outline-primary btn-lg" type="button" style="font-weight: bold;">مشاهده</a></button>
                    </div>
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/side-view-dolma-stuffed-grape-leaves-with-ground-meat-onion-greens.jpg"></div>
                   
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="font-weight: bold;">امکانات</h2>
                    <p></p>
                </div>
                <div class="row justify-content-center" >
                    <div class="col-md-5 feature-box">
                        <h4 style="text-align: right;font-size: 21.2px;"><i class="icon-star icon"style="position: relative;font-size: 30px;float: right;top: 0;"></i>امتیاز دهی&nbsp;</h4>
                        <p>کاربر گرامی،شما می توانید با توجه به میزان علاقه ی خود به مقاله مورد نظر، به مقاله مربوطه امتیاز بدهید.</p>
                    </div>
                    <div class="col-md-5 feature-box" >
                        <i class="icon-pencil icon"style="position: relative;font-size: 30px;float: right;top: 0;"></i>
                        <h4 style="text-align: right;font-size: 21.2px;">امکان ارسال دستور پخت</h4>
                        <p>کاربرگرامی، شما می توانید مقاله مورد نظر خود را برای دیگران ارسال کنید.</p>
                    </div>
                    <div class="col-md-5 feature-box">
                        <i class="icon-screen-smartphone icon" style="position: relative;font-size: 30px;float: right;top: 0;"></i>
                        <h4 style="text-align: right;font-size: 21.2px;">امکان نمایش در گوشی</h4>
                        <p> کاربرگرامی،شما می توانید سایت نسیم را در گوشی خود مشاهده کنید.</p>
                    </div>
                    <div class="col-md-5 feature-box" ><i class="icon-refresh icon" style="position: relative;font-size: 30px;float: right;top: 0;"></i>
                        <h4 style="text-align: right;font-size: 21.2px;">سازگاری با تمامی مرورگرها</h4>
                        <p>کاربرگرامی، شما می توانید با هر مرورگری که در دسترس دارید سایت نسیم را مشاهده کنید.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="font-weight: bold;">اخرین پخت ها</h2>
                    <p>انواع دستور پخت غذا، دسر، سالاد به همراه ویدئو آشپزی و دست پخت های ارسالی شما کاربران درسایت آشپزی نسیم .</p>
                </div>
                <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="img-fluid w-100 d-block" src="assets/img/scenery/side-view-dolma-stuffed-grape-leaves-with-ground-meat-onion-greens.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/juicy-steak-medium-rare-beef-with-spices-grilled-vegetables.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/big-sandwich-hamburger-with-juicy-beef-burger-cheese-tomato-red-onion-wooden-table.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block about-us" style="font-size: 13px;">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="font-weight: bold;">مقالات ما</h2>
                    <p>ترفند ها و نکات شیرینی پزی را با ما تجربه کنید</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/spaghetti-with-bolognese-sauce-wooden-table.jpg">
                            <div class="card-body info" style="margin-bottom: 14px;">
                              <a href="blog.html" style="text-decoration: none;color: black;font-family: vazir;">  <h4 class="card-title" style="font-weight: bold;font-family: Montserrat, sans-serif;text-align: center;font-size: 17px;margin-bottom: 7px;">طرز تهیه اسپاگتی</a></h4>
                                <p class="card-text"><br><span style="color: rgb(68, 68, 68);">اسپاگتی از غذاهای معروف کشور ایتالیا است که در تمام دنیا به عنوان یک غذای بین المللی شناخته می شود</span><br><br></p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/fried-egg-with-tomatoes-hash-browns.jpg">
                            <div class="card-body info" style="margin-bottom: 14px;">
                                <a href="blog.html" style="text-decoration: none;color: black;font-family: vazir;">  <h4 class="card-title" style="font-weight: bold;font-family: Montserrat, sans-serif;text-align: center;font-size: 17px;margin-bottom: 7px;">طرز تهیه اسپاگتی</a></h4>
                                  <p class="card-text"><br><span style="color: rgb(68, 68, 68);">اسپاگتی از غذاهای معروف کشور ایتالیا است که در تمام دنیا به عنوان یک غذای بین المللی شناخته می شود</span><br><br></p>
                                  <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                              </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/fried-egg-with-tomatoes-hash-browns.jpg">
                            <div class="card-body info" style="margin-bottom: 14px;">
                                <a href="blog.html" style="text-decoration: none;color: black;font-family: vazir;">  <h4 class="card-title" style="font-weight: bold;font-family: Montserrat, sans-serif;text-align: center;font-size: 17px;margin-bottom: 7px;">طرز تهیه اسپاگتی</a></h4>
                                  <p class="card-text"><br><span style="color: rgb(68, 68, 68);">اسپاگتی از غذاهای معروف کشور ایتالیا است که در تمام دنیا به عنوان یک غذای بین المللی شناخته می شود</span><br><br></p>
                                  <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                              </div>
                        </div>
                    </div>
                </div>
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
