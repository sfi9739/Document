<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
session_start();
mysqli_query($db,"SET NAMES UTF8");
$id=$_GET['id'];
$querylimit=mysqli_query($db,"select * from maghale limit 3");
$query=mysqli_query($db,"select * from maghale where id=$id");
$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Icon-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled-2.css">
    <link rel="stylesheet" href="assets/css/untitled-3.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/star.css">
    <link rel="stylesheet" href="assets/css/menu1.css">

    <style>
        .sharing{
            padding: 5px !important;
    color: #5f5f5f !important;
    border: 1px solid #ccc;
    background: #fff;
    font-size: 12px;
    border-radius: 2px;
    margin-right: 2px;
    cursor: pointer;
    margin-bottom: 5px;
    margin-top: 5px;
    display: inline-block;
    width: 30px;
    text-align: center;
    float: left;
        }
        
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
                    <li class="nav-item"><a class="nav-link1" href="index.html"><img style="width: 54px;height: 49px;" src="assets/img/logo/logo.jpg" alt=""></a></li>
                    <li class="nav-link"><a class="nav-link" href="index.html"style="font-size: 18px;">خانه</a></li>
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
    <main class="page blog-post">
        <section class="clean-block clean-post dark" >
            <div class="container">
                <div class="block-content">
                    <div class="post-image" style="background-image: url(&quot;assets/img/scenery/side-view-dolma-stuffed-grape-leaves-with-ground-meat-onion-greens.jpg&quot;);"></div>
                    <div class="post-body" style="direction: rtl;">
                        <!-- <h3>Lorem Ipsum dolor</h3>
                        <div class="post-info"><span>By John Smith</span><span>Jan 27, 2018</span></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <figure class="figure"><img class="rounded img-fluid figure-img" src="assets/img/scenery/image6.jpg" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">Lorem ipsum dolor</figcaption>
                        </figure>
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                                  
                        <div class="row" >
                            <div class="col-md-6">
                                <figure class="figure"><br><img class="rounded img-fluid figure-img" src="<?php $image=$row['pic']; $s= substr($image,6); echo $s ?>" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <!-- <figcaption class="figure-caption">Lorem Ipsum dolor</figcaption> -->
                                    <div class="row " style="border-style: groove; border-radius: 10px; margin-right: 1%;width: 95%;">
                                        <div class="col-md-6"> <label>لینک اشتراک گذاری </label><i class="fa fa-files-o" style="position: relative; float: right;padding-left: 3%;"></i></div>
                                       <div class="col-md-6">
                                        <label style="position: relative; float: left;padding-top: 10%;">https://nasim.ir/?p=1266</label>
                                        </div>
                                     </div>
                                     <br>
                                     <div class="row" style="border-style: groove; border-radius: 10px; margin-right: 1%; width: 95%;justify-content: center;">
                                        <label><b>با ما همراه باشید</b></label>
                                     <a class="sharing" href="#"><i class="fa fa-telegram"></i></a>
                                         <a class="sharing" href="#"><i class="fa fa-whatsapp"></i></a>
                                         <a class="sharing" href="#"><i class="fa fa-instagram"></i></a>
                                         <a class="sharing" href="#"><i class="fa fa-facebook"></i></a>
                                         <a class="sharing" href="#"><i class="fa fa-twitter"></i></a>
                                        </div>
                                </figure>
                            </div>


                            <div class="col-md-6">
                                <p></p>
                                <div class="img-fluid">
                                     <img src="assets/img/logo/logo.jpg" style="width: 10%; height: 13%;" alt="#">
                                    <label class="form-label">ارسال کننده : </label><?php echo $row['creator'];?><br><hr>
                                    <form action="post.php?id=<?php echo $row['id']?>" method="post">
                                    <button class="btn btn-primary d-block icon-button w-100" type="submit" name="save" ><i class="fa fa-bookmark-o"></i>&nbsp;&nbsp;<span>ذخیره در پروفایل</span></button><br></form>
                                    <label class="form-label" style="font-weight: bold;">بازدید:</label><label class="form-label" style="position: relative; float: left;" >350</label><br><hr>
                                    <label class="form-label" style="font-weight: bold;">ملیت:</label><label class="form-label" style="position: relative; float: left;"><?php echo $row['categuri'];?></label><br><hr>
                                    <label class="form-label" style="font-weight: bold;">زمان پخت:</label><label class="form-label" style="position: relative; float: left;">30 دقیقه&nbsp;</label><br><hr>
                                    <label class="form-label" style="font-weight: bold;">تاریخ انتشار:</label><label class="form-label" style="position: relative; float: left;"><?php echo $row['date'];?></label><br>
                                    </div>
                               
                            </div>
                        </div>

                        <h4>طرز تهیه  <?php echo $row['titel'];?> </h4>
                       <div class="row">
                        <div class="col-md-12">
                            <div class="star-wrapper">
                                <label id="number"></label>
                                <a id="set5"  class="fas fa-star s1" onclick="myFunction5(); set5()"></a>
                                <a id="set4"  class="fas fa-star s2" onclick="myFunction4(); set4()"></a>
                                <a id="set3"  class="fas fa-star s3" onclick="myFunction3(); set3()"></a>
                                <a id="set2"  class="fas fa-star s4" onclick="myFunction2(); set2()"></a>
                                <a id="set1"  class="fas fa-star s5"  onclick="myFunction1(); set1()"></a>
                                
                              </div>
                        </div>

                       </div>
                          <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
                        <div class="post-info"><span>writer <?php echo $row['creator'];?></span>&nbsp;&nbsp;<span>&nbsp;&nbsp;  <?php echo $row['date'];?>  </span>&nbsp;&nbsp;</div>
                           
                        <!-- <div class="row">
                            <div class="col-md-4">
                                <div class="post-info"><span>writer narges safary</span></div>
                            </div>
                            <div class="col-md-4">
                                <span> ابان1389 20</span>
                            </div>
                            <div class="col-md-4">
                                <div class="star-wrapper">
                                    <label id="number"></label>
                                    <a id="set5"  class="fas fa-star s1" onclick="myFunction5(); set5()"></a>
                                    <a id="set4"  class="fas fa-star s2" onclick="myFunction4(); set4()"></a>
                                    <a id="set3"  class="fas fa-star s3" onclick="myFunction3(); set3()"></a>
                                    <a id="set2"  class="fas fa-star s4" onclick="myFunction2(); set2()"></a>
                                    <a id="set1"  class="fas fa-star s5"  onclick="myFunction1(); set1()"></a>
                                    
                                  </div>
                                  <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
                                
                                  
                            </div> 
                        </div>-->
                        <b><label> مواد لازم برای ۴ نفر</label></b><br>
                        <?php echo $row['content'];?>
<!--                         
                        <label>برنج	:۲ لیوان</label><br>
                        <label>لپه:	۱۰۰ گرم</label><br>
                        <label>سبزی دلمه:	۲۰۰ گرم</label><br>
                        <label></label>پیاز:	۱ عدد<br>
                        <label></label>گوشت چرخ کرده:	۲۰۰ گرم<br>
                        <label>شکر:	۲ قاشق غذاخوری</label><br>
                        <label>سرکه:	نصف لیوان</label><br>
                        <label>برگ مو:	به تعداد کافی</label><br>
                        <label>نمک و فلفل سیاه	:به مقدار کافی</label><br>
                        <label>زردچوبه و روغن:	به مقدار کافی</label><br> -->
                        <label></label><br>
                        <p></p>
                        <!-- <b><label>مرحله اول</label><br></b>
                        <p>
                           
                        برای تهیه دلمه خوشمزه برگ مو ابتدا لپه ها را ۲ ساعت قبل از پخت آن در کاسه ای می ریزیم و تا سطح لپه ها آب می ریزیم و اجازه می دهیم تا خیس بخورد و نفخ آن از بین برود. بعد لپه ها را در صافی می ریزیم و آبکش می کنیم و در قابلمه ای می ریزیم.
                        </p>
                        <b><label>مرحله دوم</label><br></b>
                        <p>
                            حالا ۲ لیوان آب به ان اضافه می کنیم و اول حرارت را زیاد می کنیم تا آب به جوش بیاید و بعد ملایم می کنیم تا به مرور زمان لپه ها کاملا پخته شوند. بعد از پخت لپه را در صافی می ریزیم و صبر می کنیم تا آب اضافه آن کاملا خارج شود.
                        </p>
                        <b><label>مرحله سوم</label><br></b>
                        <p>
                            تا پخت لپه ها برای آماده کردن باقی مواد دلمه زمان کافی داریم. سبزی دلمه که شامل پیازچه، مرزه، شوید، نعناع، جعفری، ترخون و یا هر سبزی معطر دیگری نیز می تواند باشد را پاک می کنیم و می شوییم و در آبکش می ریزیم.
                        </p>
                        <b><label>مرحله چهارم</label><br></b>
                        <p>
                            بعد پارچه ای را پهن می کنیم و سبزی ها را روی ان می ریزیم و اجازه می دهیم تا کاملا خشک شوند. آن وقت روی تخته آشپزخانه سبزی ها را نه خیلی ریز و نه درشت خرد می کنیم تا عطر سبزی ها در دلمه حفظ شود و بپیچد.
                        </p> -->
                        <!-- <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2"; style="text-align: center; ">Column 1</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                        <!-- <div class="row">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="figure"><img class="rounded img-fluid figure-img" src="assets/img/chicken-skewers-with-slices-sweet-peppers-dill.jpg" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <figcaption class="figure-caption">Lorem Ipsum dolor</figcaption>
                                </figure>
                            </div>
                        </div> -->
                    </section>
                        <section class="clean-block about-us" style="font-size: 13px;">
                            <div class="container">
                                <div class="block-heading">
                                    <h2 class="text-info" style="font-weight: bold;">مقالات ما</h2>
                                    <p>ترفند ها و نکات شیرینی پزی را با ما تجربه کنید</p>
                                </div>
                                <div class="row justify-content-center">
                                    <!-- <div class="col-sm-6 col-lg-4">
                                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/spaghetti-with-bolognese-sauce-wooden-table.jpg">
                                            <div class="card-body info" style="margin-bottom: 14px;">
                                                <h4 class="card-title" style="font-weight: bold;font-family: Montserrat, sans-serif;text-align: center;font-size: 17px;margin-bottom: 7px;">طرز تهیه اسپاگتی</h4>
                                                <p class="card-text"><br><span style="color: rgb(68, 68, 68);">اسپاگتی از غذاهای معروف کشور ایتالیا است که در تمام دنیا به عنوان یک غذای بین المللی شناخته می شود</span><br><br></p>
                                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <?php while ($row1=mysqli_fetch_array($querylimit)) { ?>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="<?php $image=$row1['pic']; $s= substr($image,6); echo $s ?>">
                                            <div class="card-body info">
                                                <h4 class="card-title"><strong>طرز تهیه <?php echo $row1['titel'];?></strong></h4>
                                                <p class="card-text"><br><span style="color: rgb(68, 68, 68);"><?php echo $row1['content'];?></span><br><br><br></p>
                                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- <div class="col-sm-6 col-lg-4">
                                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/fried-egg-with-tomatoes-hash-browns.jpg">
                                            <div class="card-body info">
                                                <h4 class="card-title"><strong>طرز تهیه اسپاگتی</strong></h4>
                                                <p class="card-text"><br><span style="color: rgb(68, 68, 68);">اسپاگتی از غذاهای معروف کشور ایتالیا است که در تمام دنیا به عنوان یک غذای بین المللی شناخته می شود</span><br><br><br></p>
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
            <div class="row" style="direction: ltr;">
                <div class="col-sm-3">
                    <h5 style="text-align: right;">دسترسی سریع</h5>
                    <ul>
                        <li style="text-align: right;"><a href="index.html">خانه</a></li>

                        <li style="text-align: right;"><a href="login.html">ثبت نام</a></li>
                        <li style="text-align: right;"><a href="blog.html" style="text-align: right;">مقالات</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-lg-4">
                    <h5 style="text-align: right;">تماس با ما&nbsp;</h5>
                    <ul>
                        <li style="text-align: right;"><a href="#" style="text-align: right;">nasim@gmail.com</a></li>
                        <li style="text-align: right;"><a href="#" style="text-align: right;">تلفن: 031-5555555540</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-5 col-lg-5">
                    <h5 style="text-align: right;">درباره ما</h5>
                    <ul></ul><label class="form-label" style="color: rgb(152,153,154);text-align: right;"><br>ما تصمیم داریم آرشیو کاملی از دستور پخت های غذاهارو داشته باشیم که با یه سرچ ساده پیداشون کنیم. شما هم میتونی توی این مسیر همراه ما باشی و برامون دستور پخت های خودت رو بفرستی<br><br><br></label>
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
    <script>

        function myFunction1() {
           document.getElementById("number").innerHTML = 1;
        }
        function set1() {
          var n;
          n = document.getElementById("set1");
          n.style.color = "#ffd700";
      
        }
        function myFunction2() {
        document.getElementById("number").innerHTML = 2;
      }
      function set2() {
          var n,n2;
          n = document.getElementById("set1");
          n2 = document.getElementById("set2");
          n.style.color = "#ffd700";
          n2.style.color = "#ffd700";
        }
      function myFunction3() {
        document.getElementById("number").innerHTML = 3;
      }
      function set3() {
          var n,n2,n3;
          n = document.getElementById("set1");
          n2 = document.getElementById("set2");
          n3 = document.getElementById("set3");
          n.style.color = "#ffd700";
          n2.style.color = "#ffd700";
          n3.style.color = "#ffd700";
        }
      function myFunction4() {
        document.getElementById("number").innerHTML =4;
      }
      function set4() {
          var n,n2,n3,n4;
          n = document.getElementById("set1");
          n2 = document.getElementById("set2");
          n3 = document.getElementById("set3");
          n4 = document.getElementById("set4");
          n.style.color = "#ffd700";
          n2.style.color = "#ffd700";
          n3.style.color = "#ffd700";
          n4.style.color = "#ffd700";
        }
      function myFunction5() {
        document.getElementById("number").innerHTML = 5;
      }
      function set5() {
          var n,n2,n3,n4,n5;
          n = document.getElementById("set1");
          n2 = document.getElementById("set2");
          n3 = document.getElementById("set3");
          n4 = document.getElementById("set4");
          n5 = document.getElementById("set5");
          n.style.color = "#ffd700";
          n2.style.color = "#ffd700";
          n3.style.color = "#ffd700";
          n4.style.color = "#ffd700";
          n5.style.color = "#ffd700";
        }
      </script>
</body>

</html>
<?php
$st=$_SESSION['user'];
echo $st;
$iduser=mysqli_query($db,"select id from users where email='$st'");
$userid=mysqli_fetch_array($iduser);
//echo $r['id'];
$idus= $userid['id'];
echo $idus;
if(isset($_POST['save']))
{
    if($_SESSION['user']!=""){
        
         $save=mysqli_query($db,"INSERT INTO favorites(`username`,`idpost`,`iduser`,`isfavorit`) VALUES ('$st',$id,$idus,1)");
         echo "<script>alert(' پست در پروفایل شما ذخیره شد')</script>";

    }
    else{
        header("Location: login.php");
    }

}
?>