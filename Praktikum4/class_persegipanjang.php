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