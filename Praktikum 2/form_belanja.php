<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_belanja.php" style="margin:10px;">
<div style="width:30%;float:right;">
    <ul class="list-group">
      <li class="list-group-item active" aria-current="true">Daftar Harga</li>
      <li class="list-group-item">TV : 4.200.000</li>
      <li class="list-group-item">KULKAS : 3.100.000</li>
      <li class="list-group-item">MESIN CUCI : 3.800.000</li>
      <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
    </ul>
  </div>
  <div class="form-group row">
    <label for="nama_customer" class="col-3 col-form-label" style="text-align:center">Customer</label> 
    <div class="col-5">
      <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-3" style="text-align:center">Pilih Produk</label> 
    <div class="col-9">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-3 col-form-label" style="text-align:center">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-9">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>

<?php
    $nama_customer = isset ($_POST['nama_customer']) ? $_POST['nama_customer'] : "";
    $radio = isset ($_POST['radio']) ? $_POST['radio'] : "";
    $jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : "";
    // $total_belanja = '';

    // if($radio = 'TV'){
    //   $total_belanja = 'TV';
    // } elseif ($radio = 'KULKAS'){
    //   $total_belanja = 'KULKAS';
    // }elseif ($radio == 'MESIN CUCI'){
    //   $radio = 'MESIN CUCI';
    // }

    
   

    echo "Nama Customer : " .$nama_customer;
    echo "</br>Produk Pilihan : " .$radio;
    echo "</br>Jumlah Beli : " .$jumlah;
    
    // echo $total_belanja = $radio*$Jumlah;
    // echo "</br>Total Belanja : " .$total_belanja;
    if ($radio == 'TV') {
      echo '</br>Total Belanja : Rp.'.number_format($jumlah*4200000,0,',','.').',-';
    } 
    elseif($radio == 'KULKAS'){
      echo '</br>Total Belanja : Rp.'.number_format($jumlah*3100000,0,',','.').',-';
    } 
    elseif ($radio == 'MESIN CUCI'){
      echo '</br>Total Belanja : Rp.'.number_format($jumlah*3800000,0,',','.').',-';
    }
   

  


    // if($radio = 4.200.000{
    //   $radio = 'TV';
    // } elseif ($radio == 'KULKAS'){
    //   $radio = 'KULKAS';
    // }elseif ($radio == 'MESIN CUCI'){
    //   $radio = 'MESIN CUCI';
    // }

    // if($radio = 'TV'){
    //     $radio = 'TV';
    // } elseif ($jumlah > 80){
    //     $jumlah = 'B';
    // }elseif ($jumlah > 60){
    //     $jumlah = 'C';
    // }elseif ($jumlah > 20){
    //     $jumlah = "E";
    // }
    
    
    // if(!empty($proses)){
    //     echo "Lulus";
    // } else {
    //     echo "Tidak Lulus";
    // }
?>