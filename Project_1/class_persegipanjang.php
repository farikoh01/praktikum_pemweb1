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
               <h3 style="text-align:center">Praktikum 4</h3>
              <?php
    class persegipanjang{
      public $panjang;
      public $lebar;

      public function luas(){
          $luas = $this->panjang * $this->lebar;
          return "<br/>Luas = ".$luas;
      }
      public function keliling(){
          $keliling = 2 * ($this->panjang + $this->lebar);
          return "<br/>Keliling = ".$keliling;
      }

      public function setpanjang($panjang){
          return $this->panjang = $panjang;
      }
      public function setlebar($lebar){
          return $this->lebar = $lebar;
      }
      
  }
  $LuasPersegi = new persegipanjang();
  echo "Diketahui :";
  echo "<br/>P = ".$LuasPersegi->setpanjang(15);
  echo "<br/>L = ".$LuasPersegi->setlebar(10);
  echo "<br/>Hitung Luas dan Kelilingnya?";
  echo $LuasPersegi->luas();
  echo $LuasPersegi->keliling();

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