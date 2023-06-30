
<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
mysqli_query($db,"SET NAMES utf8");
session_start();
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $pdate=$_POST['pdate'];
    // $pcreator=$_POST['pcreator'];
    $description=$_POST['description'];
    $category=$_POST['category'];
    $id=$_POST['id'];
    $file = $_FILES['pimage'];
 echo $id;

// // بررسی آپلود شدن فایل
// if ($file['error'] !== UPLOAD_ERR_OK) {
//   echo "<script>alert('رخداد خطا در هنگام آپلود فایل. لطفا مجددا تلاش نمایید')</script>";
//   return;
// }

// // گرفتن پسوند فایل
// $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

// // تعریف پسوندهای مجاز برای آپلود
// $valid_extensions = array('jpg', 'jpeg', 'png', 'gif');

// // بررسی پسوند فایل با لیست سفید مجاز
// if (false === in_array($extension, $valid_extensions)) {
//   echo "<script>alert('پسوند فایل انتخاب شده غیر مجاز است')</script>";
//   return;
// }


// // فایل به درستی آپلود شده است و پسوند آن هم مجاز است
// $destination = '../../assets/img/maghale/';
// $filename = basename($file['name']);
// $c=$destination . $filename;
// if (file_exists($c)) {
//   echo "<script>alert('ببخشید!عکس با این نام موجود است')</script>";
//   return;
// }

// // انتقال فایل با دستور مخصوص انتقال فایل‌های آپلودی
// move_uploaded_file($file['tmp_name'], $destination . $filename);

// // نمایش پیام موفقیت آپلود
// echo "<script>alert('آپلود فایل با موفقیت به انجام رسید')</script>";
//     $edit=mysqli_query($db,"update maghale set titel='$name', content='$description', creator='$pcreator', pic='$c',date='$pdate',categuri ='$category' where id='$id'");
//     if($edit){
//         header('Location:products.php');
//     }
//     else{
//         echo "<script>alert('خطایی رخ داده است!لطفا مجددا تلاش کنید')</script>";
//     }
 }
?>