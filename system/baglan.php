<?php
$host        = "localhost"; 
$kullanici   = "root"; 
$sifre       = ""; 
$veritabani  = "kayitgiris"; 

try {
     $db = new PDO("mysql:host=$host;dbname=$veritabani;charset=utf8", "$kullanici", "$sifre");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>


