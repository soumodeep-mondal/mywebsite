<?php
$conn=mysqli_connect('localhost','root','','mywebsite') or die('connection not sucessful'.mysqli_connect_errors());
require "sequre-site.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
function preventBack(){window.history.forward()};
setTimeout("preventBack()",0);
window.onload=function(){null;}
</script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manage Data</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/adminicon.svg" rel="icon">
  <link href="../assets/img/adminicon.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="css/upload-form.css" rel="stylesheet">

  <!-- ======================================================= -->


  <!--  ======================================================== -->
</head>

<body> 
    <div class="user_box"><?php echo "Welcome "."<br>" .$_SESSION['username'];?></div>

    <a href="admin-logout.php">
        <div class="logout_btn"><svg version="1.1" id="Layer_1" width="25px" id="svghover_logout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 301.11 324.92" style="enable-background:new 0 0 301.11 324.92;" xml:space="preserve"><style type="text/css">.st0{fill:#149DDD;}</style><g><path class="st0" d="M150.39,290.9c55.82-0.39,103.56-41.27,110.8-96.15c5.41-41.01-8.76-74.96-39.32-102.3c-4.71-4.22-10.04-7.78-15.28-11.37c-7.07-4.85-10.29-11.8-7.98-18.04c2.75-7.42,10.69-11.94,19.05-10.46c2.62,0.46,5.31,1.53,7.58,2.95c38.58,24.13,61.34,58.8,67.71,103.81c9.52,67.33-30.11,132.15-94.03,154.62c-76.93,27.04-159.78-13.81-185.17-91.32C-7.09,159.1,19.99,88.01,77.82,54.42c9.53-5.54,20.18-2.11,24.53,8.01c2.41,5.62,0.6,10.59-3.22,14.8c-1.89,2.08-4.39,3.65-6.75,5.25c-30.66,20.91-49.54,49.33-53.04,86.58c-5.24,55.81,31.67,106.04,86.31,118.32C133.75,289.21,142.13,289.76,150.39,290.9z"/><path class="st0" d="M166.53,74.48c0,18.59,0.1,37.18-0.03,55.77c-0.08,11.95-9.75,18.95-21.18,15.48c-6.09-1.85-9.5-6.15-10.4-12.42c-0.19-1.35-0.18-2.74-0.18-4.11c-0.01-36.43-0.02-72.86,0-109.29c0.01-8.84,3.39-14.09,10.34-16.31c11.41-3.65,21.31,3.2,21.41,15.12C166.64,37.3,166.52,55.89,166.53,74.48z"/></g></svg> 
        Logout</div>
    </a>


    
    <div class="container-fluid">
        <div class="row manage-box">
            <table class="border">
            <tr>
                <td>ID</td>
                <td>Title_graphics</td>
                <td>subtitle_graphics</td>
                <td>Image_graphicsfile</td>
                <td>project_information_sql</td>
                <td>category_sql</td>
                <td>client_sql</td>
                <td>date_sql</td>
                <td>url_sql</td>
                <td>title_details_sql</td>
                <td>title_details_sql</td>


            </tr>
            </table>
            <div class="col-sm-12">&nbsp;</div>

            <table class="border">
            <tr>
                <td>demo</td>
                <td>demo</td>
                <td>demo</td>
                <td>demo</td>
                <td>demo</td>
            </tr>
            </table>

        </div>
    </div>

</body>     
</html>