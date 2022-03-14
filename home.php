<?php  

// menampilkan array

$datapaket = array(

            array("cuci mobil kecil","suzuki karimun,toyotaagya,swift,ayla,jazz",40000),

            array("cuci mobil sedang","crv,hrv,mobilio,civic",45000),

            array("cuci mobil besar","fortuner,pajero,rubicon",50000),

            array("cuci mobil sangat besar","alpard,lexus,vellfire",55000)
        );


/* tampilkan variabel array */
print_r( $datapaket );



?>



foreach($datapaket as $post){
    echo  "<a href=transaksi.php a>";


    echo "<h2>".$post["paket"]."</h2>";
    echo "<p>".$post["mobil"]."<p>";
    echo "<p>".$post["harga"]."<p>";
    echo "<hr>";
}

