<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <h4>Praktikum 2</h4>
    <h3 style="text-align:center"> Belanja Online</h3>
    <br/>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
        <form method="POST" action="form_belanja.php">
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


<?php 

  // error_reporting(0);
  $nama_customer = isset ($_POST['nama_customer']) ? $_POST['nama_customer'] : "";
  $radio = isset ($_POST['radio']) ? $_POST['radio'] : "";
  $jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : "";

  echo "Nama Customer : " .$nama_customer;
  echo "</br>Produk Pilihan : " .$radio;
  echo "</br>Jumlah Beli : " .$jumlah;

  if ($radio == 'TV') {
    echo '</br>Total Belanja : Rp.'.number_format($jumlah*4200000,0,',','.').',-';
  } 
  elseif($radio == 'KULKAS'){
    echo '</br>Total Belanja : Rp.'.number_format($jumlah*3100000,0,',','.').',-';
  } 
  elseif ($radio == 'MESIN CUCI'){
    echo '</br>Total Belanja : Rp.'.number_format($jumlah*3800000,0,',','.').',-';
  }
  ?>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
    include_once "footer.php";
?>