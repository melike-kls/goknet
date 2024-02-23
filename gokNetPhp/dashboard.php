<?php
include('baglanti.php');
?>
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
        <div class="userInfo">
            <div class="container-3xl">
            <table class="table">
            <thead>
                <tr> 
                    <th scope="col">Görsel</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Ürün Fiyatı</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>
                        <div class="img-wrapper">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQztLRnAWYw2TSTe-eQpoMj3PM3qlfHddTKXA&usqp=CAU" alt="">
                        </div>
                    </td>
                    <td>deneme ürünü</td>
                    <td>1500</td>
                    <td>
                    <button class="btn btn-primary" name="satinAl" type="submit"  data-bs-toggle="modal" data-bs-target="#satinAl">Satın Al</button>
                    </td>
                </tr> 
            </tbody>
        </table>
            </div>
        </div>
        <div class="modal fade" id="satinAl" tabindex="-1" aria-labelledby="satinAlLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="satinAlLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
      <form id="paymentForm">
          <div class="form-group my-2">
            <label for="cardNumber">Kart Numarası</label>
            <input type="text" class="form-control" id="cardNumber" name="cardNumber">
          </div>
          <div class="form-group my-2">
            <label for="cardholderName">Kart Sahibi</label>
            <input type="text" class="form-control" id="cardholderName" name="cardholderName">
          </div>
          <div class="form-group my-2">
            <label for="expirationDate">Son Kullanma Tarihi</label>
            <input type="text" class="form-control" id="expirationDate" name="expirationDate">
          </div>
          <div class="form-group my-2">
            <label for="cvv">CVV Kodu</label>
            <input type="text" class="form-control" id="cvv" name="cvv">
          </div>
          <button type="submit my-2" class="btn btn-primary">Ödeme Yap</button>
        </form>

      </div> 
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