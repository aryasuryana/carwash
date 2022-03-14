<?php  

// menampilkan array

$datapaket = array(

            array("paket"=>"cuci mobil kecil","mobil1"=>"suzuki karimun,toyota agya,swift,ayla,jazz","harga"=>40000),

        );
?>


<div class="container">
<div class="spacer">
<div class="row ">
  <!-- <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 "> -->
  <form>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No Transaksi</label>
    <div class="col-sm-10">
      <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="No Transaksi">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="colFormLabel" placeholder="tanggal">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Pemilik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Nama Pemilik">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Pilihan Paket</label>
    <div class="col-sm-10"> 
      <?php 
      foreach ($datapaket as $data) {

        echo " ".$data["paket"]."<br/>";

    }

?>


 

    </div>
  </div>
 <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Harga Paket</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="colFormLabel" placeholder="Harga Paket">
    </div>
  </div>
</form>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Tidak Ada Tambahan -Rp.0
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Wax -Rp 10.000
  </label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
  <label class="form-check-label" for="flexRadioDefault3">
    fogging -Rp 20.000
  </label>
</div>
          


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>