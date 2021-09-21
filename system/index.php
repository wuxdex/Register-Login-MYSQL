<?php
require_once 'baglan.php';

//kayıt sekmesi için kullanılan kodlar
if(isset($_POST['submit'])){
    $kaydet=$db->prepare("INSERT into bilgiler set
    kullaniciadi=:ad,
    sifre=:sifre
    ");
    
    $insert=$kaydet->execute(array(
       'ad' => $_POST['kullaniciadi'],
       'sifre' => md5($_POST["sifre"])
       
    ));
    
    echo "<script>alert('Kayıt başarılı!')</script>";
			echo '<meta http-equiv="refresh" content="0;URL=#">';
      exit;
}

   //Giriş sekmesi için kullanılan kodlar

	if($_POST){
		$kadi = $_POST["kullaniciadi"];
		$sifre = md5($_POST["sifre"]);
		$kullanicisor=$db->prepare("SELECT * FROM bilgiler WHERE kullaniciadi=? and sifre=?");
		$kullanicisor->execute(array($_POST["kullaniciadi"],md5($_POST["sifre"])));
		$islem=$kullanicisor->fetch();
		

 
		if($islem){
			$_SESSION['kullaniciadi'] = $islem['kullaniciadi'];
			$_SESSION['sifre'] = $islem['sifre'];
			echo "<script>alert('Giriş başarılı!')</script>";
			echo '<meta http-equiv="refresh" content="0;URL=giris.php">';
			exit;
		} else{
			echo "<script>alert('Giriş bilgileri hatalı. Tekrar deneyin.')</script>";
			echo '<meta http-equiv="refresh" content="0;URL=#">';
		} 
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Kayıt/Giriş
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <div class="container"> 
    <h1>GİRİŞ</h1>
    <hr>
    <form action="" method='POST'>
    <div class="mb-3">
      <input type="text" required="" class="form-control" name="kullaniciadi" placeholder="Kullanıcı Adınızı Giriniz...">
    </div>
      <input type="password" required="" class="form-control" name="sifre" placeholder="Şifrenizi Giriniz...">
      <br>
      <button type="submit2" name="submit2" class="btn btn-primary">Giriş Yap</button>
      <a href="kayit.php"<button type="submit" name="submit" class="btn btn-primary">Kayıt Olmak İçin Tıklayınız</button></a>
    </form>
  </div> 
  </body>
</html>