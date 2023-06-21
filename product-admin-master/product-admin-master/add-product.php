<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
mysqli_query($db,"SET NAMES UTF8");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
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
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">پروفایل کاربر</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
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
                            <a class="nav-link d-block" href="login.php">
                                کاربر, <b>خروج</b> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 <!--END MENU-->

 <!--ADD Article-->
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">افزودن مقاله</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="add-product.php" method="post" class="tm-edit-product-form">

                  <div class="form-group mb-3">
                    <label for="name">نام مقاله</label>
                    <input id="name" name="name" type="text" value="" class="form-control validate">
                  </div>

                  <div class="form-group mb-3">
                    <label for="pdate"> تاریخ ایجاد</label>
                    <input id="pdate"name="pdate" type="text" class="form-control validate"required/ value="<?php echo date("Y/m/d");?>">
                  </div>

                  <div class="form-group mb-3">
                    <label for="pcreator"> سازنده </label>
                    <input id="pcreator"name="pcreator" type="text" class="form-control validate"required/ value="<?php echo $_SESSION['user']; ?>">
                  </div>

                  <div class="form-group mb-3">
                    <label for="description">شرح</label>
                    <textarea name="pdesc" class="form-control validate" rows="3" required/ ></textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label for="category">دسته بندی</label>
                    <select
                      class="custom-select tm-select-accounts" name="category" id="category">
                      <option selected>دسته را انتخاب کنید</option>
                      <option value="ایرانی"> ایرانی</option>
                      <option value="فرنگی">فرنگی</option>
                      
                    </select>
                  </div>
                 <!--<div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="expire_date">تاریخ انقضا</label>
                          <input id="expire_date"name="expire_date"type="text"class="form-control validate"data-large-mode="true"/>
                        </div>

                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="stock">Units In Stock</label>
                          <input id="stock"name="stock"type="text"class="form-control validate"required/>
                        </div>
                  </div>--> 
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i class="fas fa-cloud-upload-alt tm-upload-icon"onclick="document.getElementById('fileInput').click();"></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                <input type="file" name="pimage"class="btn btn-primary btn-block mx-auto">
                  <!-- <input id="fileInput" type="file" style="display:none;" /> -->
                  <!-- <input type="button"class="btn btn-primary btn-block mx-auto"value="آپلود تصویر مقاله"onclick="document.getElementById('fileInput').click();"/> -->
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="save" class="btn btn-primary btn-block text-uppercase">اکنون مقاله را اضافه کنید</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 <!--END ADD Article-->

 <!--FOOTER-->
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            <p style="color: white; text-align: center;"> کپی برداری از مطالب سایت با ذکر نام رنسیم و لینک مستقیم بلا مانع است</p>
        </p>
        </div>
    </footer> 

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>




      
<?php
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $pdesc=$_POST['pdesc'];
    $pcreator=$_POST['pcreator'];
    $pdate=$_POST['pdate'];
    
    
    $category=$_POST['category'];
    $file = $_FILES['pimage'];
// بررسی آپلود شدن فایل
    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo "<script>alert('رخداد خطا در هنگام آپلود فایل. لطفا مجددا تلاش نمایید')</script>";
        return;
    }

// گرفتن پسوند فایل
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

// تعریف پسوندهای مجاز برای آپلود
    $valid_extensions = array('jpg', 'jpeg', 'png', 'gif');

// بررسی پسوند فایل با لیست سفید مجاز
    if (false === in_array($extension, $valid_extensions)) {
        echo "<script>alert('پسوند فایل انتخاب شده غیر مجاز است')</script>";
        return;
    }


// فایل به درستی آپلود شده است و پسوند آن هم مجاز است
    $destination = '../../assets/img/maghale/';
    $filename = basename($file['name']);
    $c=$destination . $filename;
    if (file_exists($c)) {
        echo "<script>alert('ببخشید!عکس با این نام موجود است')</script>";
        return;
    }

// انتقال فایل با دستور مخصوص انتقال فایل‌های آپلودی
    move_uploaded_file($file['tmp_name'], $destination . $filename);

// نمایش پیام موفقیت آپلود
    echo "<script>alert('آپلود فایل با موفقیت به انجام رسید')</script>";
    $add=mysqli_query($db,"insert into maghale(`titel`,`content`,`creator`,`pic`,`date`,`categuri`) values
    ('$name','$pdesc','$pcreator','$c','$pdate','$category')");
    if($add){
        echo "<script>alert('محصول با موفقیت اضافه شد.')</script>";
    }
    else{
        echo "<script>alert('خطایی رخ داده است!لطفا مجددا تلاش کنید')</script>";
    }
}
?>



  </body>
</html>
