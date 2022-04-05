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