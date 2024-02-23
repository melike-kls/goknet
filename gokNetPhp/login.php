<?php
include("baglanti.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $email = mysqli_real_escape_string($baglanti,$_POST['email']);
    $password = mysqli_real_escape_string($baglanti,$_POST['sifre']); 
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND sifre = '$password'";
    $result = mysqli_query($baglanti,$sql);
    
    if ($result === false) {
        // Handle query error
        die(mysqli_error($baglanti));
    }
    
    $count = mysqli_num_rows($result); 
    
    if($count == 1) { 
        $_SESSION['login_user'] = $email; // Use $email instead of $myusername which is not defined
        header("location: dashboard.php");
        exit(); // Ensure no further code execution after redirect
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0">
    <title>Gök Net</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../gokNetPhp/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../gokNetPhp/assets/css/app.css">
</head>

<body>
    <div id="preloader">
        <div class="snippet" data-title="dot-pulse">
            <div class="stage">
                <div class="dot-pulse"></div>
            </div>
        </div>
    </div>
    <div class="mainBody">
        <div class="userInfo bg-colorful d-flex align-items-center justify-content-center">
            <div class="container-2xl">
                <div class="sign-in-content">
                    <div class="formTitle d-flex align-items-center justify-content-center flex-column">
                        <div class="imgWrapper">
                            <img src="/resources/assets/images/static/logos/logo.png" alt="">
                        </div>
                        <h1 class="pt-5 pb-3 w-100 d-flex justify-content-center align-items-center">GÖKNET İLETİŞİM</h1>

                    </div>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Eposta:</label>
                            <input type="email" class="form-control" id="" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Şifre:</label>
                            <input type="password" class="form-control" id="" name="sifre" required>

                        </div>
                        <button class="btn btn-primary" name="kaydet" type="submit">Kayıt Ol</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../gokNetPhp/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.10/lottie.min.js"></script>
    <script type="text/javascript" src="../gokNetPhp/assets/js/app.js"></script>
    <script type="text/javascript" src="../gokNetPhp/assets/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#kvkkOnay').change(function() {
                $('#onaylaButton').prop('disabled', !$(this).prop('checked'));
            });
        });
    </script>
    <script type="text/javascript">
        $(window).on('load', function() {
            if ($('#preloader').length) {
                $('#preloader').fadeOut('slow');
            }
        });
    </script>
</body>

</html>