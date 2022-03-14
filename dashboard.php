<?php  

// menampilkan array

$datapaket = array(

            array("paket"=>"cuci mobil kecil","mobil"=>"suzuki karimun,toyota agya,swift,ayla,jazz","harga"=>40000),

            array("paket"=>"cuci mobil sedang","mobil"=>"crv,hrv,mobilio,civic","harga"=>45000),

            array("paket"=>"cuci mobil besar","mobil"=>"fortuner,pajero,rubicon","harga"=>50000),

            array("paket"=>"cuci mobil sangat besar","mobil"=>"alpard,lexus,vellfire","harga"=>55000)
        );

?>

 <form action="proses.php" method="get">
 <thead class="table-dark">
                <tr>
                    <th class="text-md-center align-middle">No</th>
                    <th class=" align-middle">Nama paket</th>
                    <th class=" align-middle">Kategori</th>
                    <th class=" align-middle">Harga</th>
                    <th class="text-md-center align-middle">Opsi</th>
                </tr>
            </thead>

            <tbody class="">
                <?php $i = 1;?>
                <?php foreach($datapaket as $item) : ?>
                    <tr>
                        <td class="text-md-center"><?= $i ?></td>
                        <td class=""><?= $item["paket"]; ?></td>
                        <td class=""><?= $item["mobil"]; ?></td>
                        <td class=""><?= $item["harga"]; ?></td>

                        <td>
                                <a href="transaksi.php?page=transaksi&id=<?= $item ['paket']; ?>"class="btn btn-success" ><i class='bi bi-eye'></i>Detail</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>



