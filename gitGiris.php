<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Giris</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/iletcontrol.js" ></script>
  <script src="js/iletgit.js" ></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  </script>
</head>

<body>
  <div>

    <ul>
      <li><a class="giris1" href="index.html">Hakkımda</a></li>
      <li><a class="giris1" href="ozgecmis.html">Ozgecmis</a></li>
      <li><a class="giris1" href="sehrim.html">Sehrim</a></li>
      <li><a class="giris1" href="takımım.html">Takımım</a></li>
      <li><a class="giris1" href="ilgiAlanlarım.html">İlgi Alanı</a></li>
      <li><a class="giris1" href="iletisim.html">İletisim</a></li>
      <li><a class="giris2" href="giris.html"> Giris Yap </a></li>
    </ul>

  </div>
    <br><br><br>
    
    <div >
			
			<?php 

				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("<font color='#0000ff'>Girişiniz başarıyla gerçeleştirildi. Hoşgeldin $user !</font>");
			
				}
			
				else 
				{
			            echo "<font color='#0000ff'>Kullancı adı veya şifre yanlış !.</font><br>";
			            echo "<font color='#0000ff'>Yönlendiriliyorsunuz !</font>";
			            header("Refresh: 0; url=giris.html");
			    }
			
			?>
			
		</div>

    
   
  </body>
  
</html>