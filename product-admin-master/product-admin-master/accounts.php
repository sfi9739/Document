<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
mysqli_query($db,"SET NAMES utf8");
session_start();
$st=$_SESSION['user'];
echo $st;
$query=mysqli_query($db," select * from users WHERE `email`='$st'");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
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

  <body id="reportsPage" dir="rtl" style=" text-align:right;font-family: vazir; ">
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
                    <?php
                       if(isset($_SESSION['user'])){
                      ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="" href="#" style="text-decoration: none; color:white;">
                                کاربر,  <?php echo $_SESSION['user']; ?> </a>
                        </li>
                    </ul>
                    <?php
                       }
                      ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="logout.php">
                                <b>خروج</b> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 <!--END MENU-->


<!--Account-->
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">لیست حساب ها</h2>
              <p class="text-white">حساب ها</p>
              <select class="custom-select">
                <option value="0">انتخاب حساب</option>
                <option value="1">مدیر</option>
                <option value="2">ویرایشگر</option>
              <!-- <option value="3">بازرگان</option>--> 
                <option value="4">مشتری</option>
              </select>
            </div>
          </div>
        </div>

<!--end Account-->

        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h2 class="tm-block-title">عکس خود را تغییر دهید</h2>
              <div class="tm-avatar-container">
                <img src="../../assets/panel_users/img/avatar.png"alt="Avatar"class="tm-avatar img-fluid mb-4"/>
                <a href="#" class="tm-avatar-delete-link"><i class="far fa-trash-alt tm-product-delete-icon"></i></a>
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="fileInput" type="file" style="display:none;" />
                <input type="button"class="btn btn-primary btn-block mx-auto"value="بارگذاری عکس جدید"onclick="document.getElementById('fileInput').click();"/>
              </div>
            </div>

          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">تنظیمات حساب</h2>
              <form action="" class="tm-signup-form row">
              <?php while ($row=mysqli_fetch_array($query)) { ?>
                <div class="form-group col-lg-6">
                  <label for="name">نام کاربری</label>
                  <input id="name"name="name"type="text"class="form-control validate"/ value="<?php echo $row['name'];?>">
                </div>

                <div class="form-group col-lg-6">
                  <label for="email">حساب ایمیل</label>
                  <input id="email"name="email"type="email"class="form-control validate"/ value="<?php echo $row['email'];?>">
                </div>

                <div class="form-group col-lg-6">
                  <label for="password">کلمه عبور</label>
                  <input id="password"name="password"type="password"class="form-control validate"/>
                </div>

                <div class="form-group col-lg-6">
                  <label for="password2">رمز عبور را دوباره وارد کنید</label>
                  <input id="password2"name="password2"type="password"class="form-control validate"/>
                </div>

                <div class="form-group col-lg-6">
                  <label for="phone">تلفن</label>
                  <input id="phone"name="phone"type="tel"class="form-control validate"/ value="<?php echo $row['phon-number'];?>">
                </div>
                <?php } ?>
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <button type="submit" class="btn btn-primary btn-block text-uppercase" >پروفایل خود را به روز نمائید</button>
                </div>

                <div class="col-12">
                  <button type="submit"class="btn btn-primary btn-block text-uppercase">اکانت خود را حذف کنید </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

      <!--FOOTER-->
      <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            <p style="color: white; text-align: center;"> کپی برداری از مطالب سایت با ذکر نام رنسیم و لینک مستقیم بلا مانع است</p>

          </p>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
