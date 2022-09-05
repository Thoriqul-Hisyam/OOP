<?php

    class Kalkulator{
        public float $daya =0;

        public function isidaya($dayaMasuk){
            $this->daya = $this->daya +$dayaMasuk;
        }


        public function tambah($angka1,$angka2){
            echo($this->cekDaya(10) == true ? $angka1 +$angka2.PHP_EOL  : "");
        }

        public function kurang($angka1,$angka2){
            if($this->cekDaya(10) == true){
                echo $angka1 - $angka2.PHP_EOL;
            }
        }

        public function kali($angka1,$angka2){
            if($this->cekDaya(10) == true){
                echo $angka1*$angka2.PHP_EOL;
            }
        }

        public function bagi($angka1,$angka2){
            if($this->cekDaya(10) == true){
                echo $angka1/$angka2.PHP_EOL;
            }else{
                echo "Tidak bisa dilakukan dengan pembagian dengan angka 0".PHP_EOL;
            }
        }

        function pangkat($angka1, $angka2)
        {
            if($this->cekDaya(10) == true){
                $bilangan = $angka1;
                for($i=0;$i<($angka2-1);$i++)
                {
                    $bilangan = $bilangan * $angka1;
                }            
                if($bilangan > 1000000){

                    echo "Nilai diluar batas ditentukan".PHP_EOL;
                }else{
                    echo $bilangan.PHP_EOL;
                }
            }
        }

        public function cekDaya($konsumsiDaya){         
            if($this->daya >= $konsumsiDaya){
                $this->daya -= $konsumsiDaya;
                echo "  Sisa daya ".$this->daya.", Hasil = ";
                return true;
              
            }
            echo "Daya tidak cukup".PHP_EOL;

            return false;
        }

    }
    class KalkulatorHemat extends Kalkulator{


        public function tambah($angka1,$angka2){
            return parent::tambah($angka1,$angka2);
        }

        public function kurang($angka1,$angka2){
            return parent::kurang($angka1,$angka2);
        
        }

        public function kali($angka1,$angka2){
            return parent::kali($angka1,$angka2);
        
        }

        public function bagi($angka1,$angka2){
            return parent::bagi($angka1,$angka2);
        
        }

        public function pangkat($angka1,$angka2){
            return parent::pangkat($angka1,$angka2);
            
        }
        public function cekDaya($konsumsiDaya){
            return parent::cekDaya(5);
        }
        
    }        



$kalkulator_hemat = new KalkulatorHemat();
$kalkulator_hemat->isidaya(100);
$kalkulator_hemat->tambah(2,3);
$kalkulator_hemat->kurang(4,3);

$objekKalkulator1 = new Kalkulator();
$objekKalkulator1 -> isidaya(100);
$objekKalkulator1 -> tambah(10,5);
$objekKalkulator1 -> pangkat(10,5);
?>
