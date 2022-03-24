<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_nilai.php" style="margin:20px">
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div> -->
        </div> 
        <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
  include_once ("libfungsi.php");
    $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : "";
    $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : "";
    $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
    $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
    $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : "";


    echo "Nama Lengkap : " .$nama_lengkap;
    echo "</br>Mata Kuliah : " .$matkul;
    echo "</br>Nilai UTS : " .$nilai_uts;
    echo "</br>Nilai UAS : " .$nilai_uas;
    echo "</br>Nilai Tugas : " .$nilai_uas;
    $total_nilai = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;
    echo '<br/>Total Nilai : '.$total_nilai;
    $hasil = kelulusan($total_nilai);
    echo '<br/>Dinyatakan : '.$hasil;


    // switch ($nilai_uas) {
    //     case 'A':
    //         $info = "Sangat Memuaskan";
    //         # code...
    //         break;
    //     case 'B':
    //         $info = "Memuaskan";
    //         break;
    //     case 'C':
    //         $info = "Cukup";
    //         break;
    //     case 'D':
    //         $info = "Kurang";
    //         break;
    //     case 'E':
    //         $info = "Sangat Kurang";
    //         break;
    // }
        // default:
        //     # code...
        //     break;
    

    // if($nilai_uts > 90){
    //     $nilai_uts = 'A';
    // } elseif ($nilai_uts > 80){
    //     $nilai_uts = 'B';
    // }elseif ($nilai_uts > 60){
    //     $nilai_uts = 'C';
    // }elseif ($nilai_uts > 20){
    //     $nilai_uts = "E";
    // }

    // if($nilai_uts > 50){
    //     echo "Lulus";
    // } else {
    //     echo "Tidak Lulus";
    // }


