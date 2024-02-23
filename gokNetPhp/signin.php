<?php
include "baglanti.php";

$input_error="";

if(isset($_POST["kaydet"])){
    if (strlen($_POST["sifre"]) < 6 || strlen($_POST["sifre"]) > 30) {
        $input_error = "Şifre en az 6 en fazla 30 karakter olmalıdır";
    } 

    $name=$_POST["adi"];
    $surname=$_POST["soyadi"];
    $email=$_POST["email"];
    $password=$_POST["sifre"];

    $ekle="INSERT INTO users (adi, soyadi, email, sifre) VALUES (' $name','$surname','$email','$password')";
    $calisti = mysqli_query($baglanti, $ekle);

    if ($calisti) {
        echo '<div class="alert alert-success" role="alert">
        kayıt başarılı
      </div>';
      header("Location: login.php");
    }else{
        echo '<div class="alert alert-danger" role="alert">
        kayıt başarısız
      </div>';
    }

    mysqli_close($baglanti);

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
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
                        <h1 class="pt-5 pb-3 w-100 d-flex justify-content-center align-items-center"> GÖKNET İLETİŞİM</h1>

                    </div>
                    <form action="signin.php" method="post"> 
                        <div class="mb-3">
                            <label for="" class="form-label">Kullanıcı Adı:</label>
                            <input type="text" class="form-control" id="" name="adi" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kullanıcı Soyadı:</label>
                            <input type="text" class="form-control" id="" name="soyadi" required>
                        </div> 
                        <div class="mb-3">
                            <label for="" class="form-label">Eposta:</label>
                            <input type="email" class="form-control" id="" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Şifre:</label>
                            <input type="password" class="form-control" id="" name="sifre" required>
                           <?php
                           echo $input_error;
                           ?>
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
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
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
        AOS.init({
            // Global settings:
            offset: 120, // offset (in px) from the original trigger point
            once: true, // whether animation should happen only once - while scrolling down
        })
    </script>
</body>

</html>
