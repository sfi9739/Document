<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
session_start();
mysqli_query($db,"SET NAMES utf8");
$st=$_SESSION['user'];
echo $st;
//$query=mysqli_query($db,"select id from maghale where creator='$st'");
$querysavemaghale=mysqli_query($db,"select maghale.titel,maghale.id,favorites.idpost, maghale.creator,favorites.iduser,favorites.idpost,favorites.username
FROM maghale
INNER JOIN favorites ON maghale.id = favorites.idpost
where maghale.creator='$st'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
   <!--<link rel="stylesheet" href="../../assets/css/menu1.css">--> 

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
                        <li class="nav-item">
                            <a class="nav-link" href="save.php">
                            <i class="fa fa-heart"></i>
                                مقاله های ذخیره شده 
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


        <div class="container">
            <div class="row">
                <div class="col">
                    <h5 class="text mt-5 mb-5" style="float: right; ">به پنل کاربری خود خوش آمدید </h2>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title" style="float: right;">آخرین بازدیدها </h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title"style="float: right;">میزان عملکرد</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col" ">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title">Storage Information</h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                        <h2 class="tm-block-title">مقاله های ذخیره شده </h2>
                        <div class="tm-notification-items">
                        <?php while ($row=mysqli_fetch_array($querysavemaghale)) { ?>
                            <div class="media tm-notification-item">
                                <!-- <div class="tm-gray-circle"><img class="rounded-circle" src="../../assets/img/maghale/spa.jpg"></div> -->
                                <div class="media-body">
                                    <!-- <p class="mb-2"><b> افرادی که  پسندیده اند</b>  -->
                                    <!-- <a href="#" class="tm-notification-link">به روز رسانی مقاله</a> -->
                                    <br><span> عنوان مقاله : <?php echo $titel=$row['titel']; ?></span>
                                        <br>
                                        <span style="color:white"><b> افرادی که  پسندیده اند:</b><br> <?php echo $username=$row['username']; ?></span>
                                      </p>
                                    <!-- <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span> -->
                                </div>
                            </div>
                              <?php } ?>
                              <!-- 
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="../../assets/panel_users/img/notification-03.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>زهرا محمدی</b> و <b>6 نفر دیگر</b> <a href="#" class="tm-notification-link">به روز رسانی مقاله</a>موجود را برای شما ارسال کردند. مقالات جدید را بررسی کنید.</p>
                                    <span class="tm-small tm-text-color-secondary">6 ساعت قبل.</span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 tm-block-col">
                <!--   <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ORDER NO.</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">OPERATORS</th>
                                    <th scope="col">LOCATION</th>
                                    <th scope="col">DISTANCE</th>
                                    <th scope="col">START DATE</th>
                                    <th scope="col">EST DELIVERY DUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><b>#122349</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Oliver Trag</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>485 km</b></td>
                                    <td>16:00, 12 NOV 2018</td>
                                    <td>08:00, 18 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122348</b></th>
                                    <td>
                                        <div class="tm-status-circle pending">
                                        </div>Pending
                                    </td>
                                    <td><b>Jacob Miller</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>360 km</b></td>
                                    <td>11:00, 10 NOV 2018</td>
                                    <td>04:00, 14 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122347</b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled">
                                        </div>Cancelled
                                    </td>
                                    <td><b>George Wilson</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>340 km</b></td>
                                    <td>12:00, 22 NOV 2018</td>
                                    <td>06:00, 28 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122346</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>William Aung</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>15:00, 10 NOV 2018</td>
                                    <td>09:00, 14 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122345</b></th>
                                    <td>
                                        <div class="tm-status-circle pending">
                                        </div>Pending
                                    </td>
                                    <td><b>Harry Ryan</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>280 km</b></td>
                                    <td>15:00, 11 NOV 2018</td>
                                    <td>09:00, 17 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122344</b></th>
                                    <td>
                                        <div class="tm-status-circle pending">
                                        </div>Pending
                                    </td>
                                    <td><b>Michael Jones</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>18:00, 12 OCT 2018</td>
                                    <td>06:00, 18 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122343</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Timmy Davis</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>12:00, 10 OCT 2018</td>
                                    <td>08:00, 18 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122342</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Oscar Phyo</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>420 km</b></td>
                                    <td>15:30, 06 OCT 2018</td>
                                    <td>09:30, 16 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122341</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Charlie Brown</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>300 km</b></td>
                                    <td>11:00, 10 OCT 2018</td>
                                    <td>03:00, 14 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122340</b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled">
                                        </div>Cancelled
                                    </td>
                                    <td><b>Wilson Cookies</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>218 km</b></td>
                                    <td>17:30, 12 OCT 2018</td>
                                    <td>08:30, 22 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122339</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>Moving
                                    </td>
                                    <td><b>Richard Clamon</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>150 km</b></td>
                                    <td>15:00, 12 OCT 2018</td>
                                    <td>09:20, 26 OCT 2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>-->
                </div>
            </div>
        </div>
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
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>