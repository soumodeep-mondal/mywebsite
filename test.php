$name_inp= $_POST['name_cvdown'] ;
    $number_inp= $_POST['number_cvdown'] ;
    $agree=$_POST['agree'];

    $sql="INSERT INTO `cv_download_info`(`Name`, `Mobile_No`, `agree`) VALUES ('$name_inp','$number_inp', '$agree')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script>alert('Sucessfully Download')</script>";
        echo "<script>location.href='assets/img/cv/soumodeepmondalCV.pdf'</script>";
    }
    else{
        echo "Error please try again";
    }




    <!--  Connection My Database ===============================================================-->
<?php
// Change Table Name //

if(isset($_POST['submit']) && ($_POST['g-recaptcha-response'] != "")){
    $conn=mysqli_connect('localhost','root','','mywebsite') or die('connection not sucessful'.mysqli_connect_errors());

    $secret = '6Ld2O-YjAAAAADweEVlYzbJuRXdwwLoEeyqHNG9v';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '$response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    https://developers.google.com/recaptcha/docs/verify#api_request
    
    if($responseData->success){
        $name_inp= $_POST['name_cvdown'] ;
        $number_inp= $_POST['number_cvdown'] ;
        $agree=$_POST['agree'];

        $sql="INSERT INTO `cv_download_info`(`Name`, `Mobile_No`, `agree`) VALUES ('$name_inp','$number_inp', '$agree')";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo "<script>alert('Sucessfully Download')</script>";
            echo "<script>location.href='assets/img/cv/soumodeepmondalCV.pdf'</script>";
        }
        else{
            echo "Error please try again";
        }

    }
    else{
        echo "error";
        echo "<script>alert('please fill the captcha')</script>";

    }

}





?>
