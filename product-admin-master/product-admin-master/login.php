<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
mysqli_query($db, "SET NAMES utf8");
session_start();
// // $query=mysqli_query($db," select * from users where= `email` = "$"");
// $_SESSION["user"] = "yellow";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"/>
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../../assets/panel_users/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../../assets/panel_users/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../../assets/panel_users/css/templatemo-style.css">
    

    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->

  <style>
    
    @font-face {
    font-family: vazir;
    src: url(../../assets/Font/Vazir-Medium.eot) format('eot'),
         url(../../assets/Font/Vazir-Medium.ttf) format('ttf'),
         url(../../assets/Font/Vazir-Medium.woff) format('woff'),
         url(../../assets/Font/Vazir-Medium.woff2) format('woff2');
}
   
</style>

  </head>

  <body id="reportsPage" dir="rtl" style=" text-align:right;font-family: vazir;">
    <div class="" id="home">
      <!--MENU-->
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.php">
                    <h1 class="tm-site-title mb-0">پروفایل کاربر</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>
                                داشبورد
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       <!-- <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Reports <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Daily Report</a>
                                <a class="dropdown-item" href="#">Weekly Report</a>
                                <a class="dropdown-item" href="#">Yearly Report</a>
                            </div>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">
                                <i class="fas fa-shopping-cart"></i>
                                مقالات
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.php">
                                <i class="far fa-user"></i>
                                حساب کاربری
                            </a>
                        </li>
                       <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>-->
                    </ul>
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.php">
                                کاربر, <b>خروج</b> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 <!--END MENU-->


    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">به پنل کاربری خود خوش آمدید، وارد شوید</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="login.php" method="post" class="tm-login-form">
                  <div class="form-group">
                    <label for="email">نام کاربری</label>
                    <input name="email"type="email"class="form-control validate"id="email"value=""required/>
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">کلمه عبور</label>
                    <input name="password"type="password"class="form-control validate"id="password"value=""required/>
                  </div>
                  <div class="form-group mt-4">
                    <button type="submit" name="login" class="btn btn-primary btn-block text-uppercase">ورود</button>
                  </div> 

                  <button class="mt-5 btn btn-primary btn-block text-uppercase"> رمز عبور خود را فراموش کرده اید؟ </button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
 <p style="color: white; text-align: center;"> کپی برداری از مطالب سایت با ذکر نام رنسیم و لینک مستقیم بلا مانع است</p>

      </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->







  </body>
</html>
<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $check=mysqli_query($db,"select * from users where email='$email' and passwod='$password'");
    if(mysqli_num_rows($check)>0)
    {
        $_SESSION['user']=$email;
        header("Location: index.php");
    }
    else {
        echo "<script>alert('ایمیل یا گذرواژه خود را اشتباه وارد نموده اید یا ثبت نام نکرده اید.')</script>";
    }
}
?>