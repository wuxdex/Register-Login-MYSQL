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
    <h1>KAYIT</h1>
    <hr>
    <form action="index.php" method='POST'>
    <div class="mb-3">
      <input type="text" required="" class="form-control" name="kullaniciadi" placeholder="Kullanıcı Adınızı Giriniz...">
    </div>
      <input type="password" required="" class="form-control" name="sifre" placeholder="Şifrenizi Giriniz...">
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Kayıt Ol</button>
      <a href="index.php"<button type="submit" name="submit" class="btn btn-primary">Giriş Yapmak İçin Tıklayınız</button></a>
    </form>
  </div> 
  </body>
</html>