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
              <h3 style="text-align:center">Praktikum 5</h3>
              <?php
class Dispenser {
  protected $volume;
  protected $hargaSegelas;
  private $volumeGelas;
  public $namaMinum;

  public function isi($vol){
      $this->volume = $vol;
      return $vol;
  }
  public function harga($harga){
      $this->hargaSegelas = $harga;
      return $harga;
  }
  public function volumegelas($volge){
      $this->volumeGelas = $volge;
      return $volge;
  }
  public function nama($nama){
      $this->namaMinum = $nama;
      return $nama;
  }
  public function sisa(){
      $sisa = $this->volume-$this->volumeGelas;
      return "<br/>Sisa volume : ".$sisa;
  }
}


$nama = new Dispenser();
$vl = new Dispenser();
$hr = new Dispenser();

echo $nama -> nama('AQUA');
echo '<br/>Volume : ' .$vl -> isi('19000');
echo 'ml';
echo '<br/>Harga per gelas : ' .$hr -> harga('Rp 500,-');
echo ' (1 gelas : 250ml)';
echo '<br/>Membeli : ' .$vl -> volumegelas('250');
echo 'ml';
// echo '<br/>Sisa Kapasitas : ' .$gelas1 -> sisa();
echo $vl->sisa();
echo 'ml';
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