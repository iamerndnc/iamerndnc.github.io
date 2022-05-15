<?php
    ob_start();
    $user='b211210002@sakarya.edu.tr';
    $pass='b211210002';
    
    if(isset($_POST['submit']))
    {
        $username=$_POST['eposta'];
        $password=$_POST['sifre'];

        if ($username==$user && $password==$pass)
        {
            header('location:main.html');
            exit();
        }

        else 
            echo '<div class="alert alert-danger text-center" role="alert">
            Hatalı Giriş Yaptınız!!!
          </div>';
          header("Refresh:1.5");
    }
?>
