<?php
if (isset($_GET['paket']) AND isset($_GET['mobil']) isset($_GET['harga']))
{
   echo $_GET['paket'];
   echo $_GET['mobil'];
   echo $_GET['harga'];
}
else
{
   echo "Maaf, anda harus mengakses halaman ini dari form.html";
}
?>