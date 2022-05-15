<?php
  include("baglanti.php");
  if(isset($_POST['gonder']))
  {
      $email = $_POST['email'];
      $message = $_POST['message'];

      $ekle = "INSERT INTO mesaj (eposta,mesaj) VALUES ('$email','$message')";
      $sorgu = mysqli_query($baglanti,$ekle);

      if($sorgu)
      {
        echo '<div class="alert alert-success text-center" role="alert">
            Mesajınız İletildi :)
          </div>';
      }
      else
      {
        echo '<div class="alert alert-danger text-center" role="alert">
            Mesajınız İletilemedi
          </div>';
      }

      mysqli_close($baglanti);
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="iletisim.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Iletisim</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <ul class="nav justify-content-center bg-dark">
      <li class="nav-item">
        <a class="nav-link" href="main.html">Hakkımda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ozgecmis.html">Özgeçmişim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sehrim.html">Şehrim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="takimim.html">Takımımız</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ilgialanlar.html">İlgi Alanlarım</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="iletisim.html">İletişim</a>
      </li>
    </ul>
    
    <form name="form" action="iletisim.php" method="post">

      <div class="mb-3">
        <label>E-Posta adresiniz</label>
        <input type="text" name="email" class="form-control" id="exampleFormControlInput1" onkeyup="emailkontrol()">
        <span id="email-error"></span>
      </div>

      <div class="mb-3">
        <label>Mesajınız</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" onkeyup="messagekontrol()"></textarea>
      <span id="message-error"></span>
      </div>

      <div class="mb-3">
      <button type="submit" name="gonder" class="btn btn-outline-success">Gonder</button>
      <button type="reset" class="btn btn-outline-danger">Temizle</button>
      </div>

    </form>
  <div>
    <footer class="bg-dark text-center text-white">
    <div class="container p-1 pb-0">
        <ul class="social">
            <li><a href="mailto:https://www.iamerndnc@gmail.com"><i class="fa-brands fa-google"></i></i></a></li>
            <li><a href="https://instagram.com/iamerndnc"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.snapchat.com/add/iamerndnc"><i class="fa-brands fa-snapchat"></i></a></li>
            <li><a href="https://www.linkedin.com/in/eren-din%C3%A7-a31a18239"><i class="fa-brands fa-linkedin"></i></a></li>
         </ul>
    </div>
    <div class="text-center p-1">
        Copyright © 2022 Tüm Hakları Saklıdır
    </div>
  </footer>
  </div>
  <script src="iletisim.js"></script>
  </body>
</html>