<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
mysqli_query($db,"SET NAMES UTF8");

if(isset($_POST['search'])){
    $txtsearch=$_POST['search'];
    $search= mysqli_query($db,"select * from maghale where titel like'%$txtsearch%'");
    // if(mysqli_num_rows($check)>0)
    // {
      
    // }
    // else {
    //     echo "<script>alert('مقاله ای با این عنوان یافت نشد +')</script>";
    // }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>articles</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
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
<body  style="font-family: vazir;"> >
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 85.375px;">
        <div class="container">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width: 863.125px;">
               


                    <ul class="navbar-nav ms-auto"  >
                    <!--<li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black; width: 75px;">درباره ما</a></li>
                    <li class="nav-link"><a class="nav-link" href="about-us.html"style="font-size: 18px;color: black;width: 75px;">درباره ما</a></li>-->
                    <li class="nav-item"><a class="nav-link1" href="index.html"style="font-size: 18px; "><img style="width: 54px;height: 49px;"  src="assets/img/logo/logo.jpg" alt=""></a></li>
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
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" > مقالات</h2>
                    <p>طرز تهیه انواع غذا، کیک، دسر،فست فود برای بانوان و علاقه مندان به اشپزی </p>
                </div>
                <?php

                while ($row=mysqli_fetch_array($search)) {?>
                <div class="row justify-content-center" style="margin:auto; padding: auto;" >
               
                    <!-- <a href="" style="text-decoration: none;">
                    <div class="col-sm-6 col-lg-4" style="padding-bottom: 25px;">
                         <div class="card text-center clean-card">
                            <img class="card-img-top w-100 d-block" src="">
                            <div class="card-body info">
                                <h4 class="card-title"></h4>
                               <p class="card-text"> </p> 
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                        
                    </div></a> -->
                    
                    
                    <a href="post.php?id=<?php echo $row['id']?>" style="text-decoration: none;">
                    <div class="col-sm-6 col-lg-4" style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="<?php $image=$row['pic']; $s= substr($image,6);echo $s ?>">
                            <div class="card-body info">
                                <h4 class="card-title"><?php echo $row['titel'];?></h4>
                                <p class="card-text"><?php echo $row['content'];?></p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div></a>
                    <?php } ?>
                    <!--
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/juicy-steak-medium-rare-beef-with-spices-grilled-vegetables.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه اسنک مرغ</h4>
                                <p class="card-text">استیک مرغ یکی از انواع غذاهای بین المللی محبوب و فوق العاده خوشمزه ای است که با گوشت مرغ تهیه می شود</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4"style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/14-1.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه  جوجه کباب</h4>
                                <p class="card-text">جوجه کباب یکی از انواع غذاهای خوشمزه و بسیار پر طرفدار ایرانی است که با دستورها و طعم های بسیار متنوعی تهیه می شود. </p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/14-1.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه  خوراک مرغ</h4>
                                <p class="card-text">خوراک مرغ و سبزیجات یکی از انواع غذاهای سالم و رژیمی است که با ترکیبات متنوعی پخته می شود</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/14-1.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه کباب برگ</h4>
                                <p class="card-text">کباب برگ یکی از انواع کباب های قدیمی و سنتی ایران است. این کباب به دلیل اینکه از گوشت لخم و یکدست تهیه می شود به عنوان یکی از مجلسی ترین کباب ها شناخته می شود.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4"style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/spaghetti-with-bolognese-sauce-wooden-table.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه لازانیا</h4>
                                <p class="card-text">لازانیا نوعی پاستای ورقه ای بسیار محبوب و پرطرفدار در سراسر جهان محسوب می شود که با دستورهای متنوعی تهیه می شود</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4"style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/spaghetti-with-bolognese-sauce-wooden-table.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه اسپاگتی</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4"style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/spaghetti-with-bolognese-sauce-wooden-table.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه پاستا پنه با سس آلفرود</h4>
                                <p class="card-text">پاستا پنه آلفردو یکی از انواع غذاهای بسیار محبوب ایتالیایی است که امروزه در میان ایرانیان نیز از محبوبیت بالایی برخوردار است، </p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4"style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/dessert_23-2148143753.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه باقلوا</h4>
                                <p class="card-text">باقلوای استانبولی یکی از انواع شیرینی های خوشمزه و پرطرفدار کشور ترکیه است که با طعم های متنوعی درست می شود</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/dessert_23-2148143753.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه دونات</h4>
                                <p class="card-text">باقلوای استانبولی یکی از انواع شیرینی های خوشمزه و پرطرفدار کشور ترکیه است که با طعم های متنوعی درست می شود</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4"style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/dessert_23-2148143753.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه مافین شکلاتی</h4>
                                <p class="card-text">باقلوای استانبولی یکی از انواع شیرینی های خوشمزه و پرطرفدار کشور ترکیه است که با طعم های متنوعی درست می شود</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
        

                    <div class="col-sm-6 col-lg-4"style="padding-bottom: 25px;">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/file.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه کیک شکلاتی</h4>
                                <p class="card-text">کیک شکلاتی یکی از انواع کیک های خوشمزه و پرطرفدار در سراسر جهان است که معمولا به عنوان عصرانه یا میان وعده سرو می شود</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6 col-lg-4" >
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/file.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه چیز کیک توت فرنگی</h4>
                                <p class="card-text">کیک شکلاتی یکی از انواع کیک های خوشمزه و پرطرفدار در سراسر جهان است که معمولا به عنوان عصرانه یا میان وعده سرو می شود، </p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/file.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">طرز تهیه کوکی شکلاتی</h4>
                                <p class="card-text">کیک شکلاتی یکی از انواع کیک های خوشمزه و پرطرفدار در سراسر جهان است که معمولا به عنوان عصرانه یا میان وعده سرو می شود، </p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div> -->



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