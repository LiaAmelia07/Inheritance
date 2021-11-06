<?php 

    class bangun_datar{
        public $luas;
        public $keliling;

    }

    class persegi extends bangun_datar{
        public function persegi($sisi){

            echo "<b><i>Menghitung Luas & Keliling Persegi</i></b><br>";
            echo "Nilai Sisi : $sisi <br><br>";
            echo "Rumus Luas : Sisi x Sisi <br>";
            $this->luas = $sisi * $sisi;
            echo "Luas Persegi : " .$this->luas ."<br><br>";

            echo "Rumus Keliling : Sisi x 4 <br>";
            $this->keliling = $sisi * 4;
            echo "Keliling Persegi : " .$this->keliling ."<br>";
            echo "<hr>";

        }
    }

    class persegipanjang extends bangun_datar{
        public function persegipanjang($panjang,$lebar){

            echo "<b><i>Menghitung Luas Persegi Panjang</i></b><br>";
            echo "Nilai Panjang : $panjang <br>";
            echo "Nilai Lebar : $lebar <br><br>";
            echo "Rumusnya : Panjang x Lebar <br>";
            $this->luas = $panjang * $lebar;
            echo "Luas Persegi Panjang : " .$this->luas . "<br><br>";

            echo "Rumus Keliling : 2 x (Panjang + Lebar) <br>";
            $this->keliling = 2 * ($panjang + $lebar);
            echo "Keliling Persegi : " .$this->keliling ."<br>";
            echo "<hr>";

        }
    }

    class segitiga extends bangun_datar{
        public function segitiga($alas,$tinggi){

            echo "<b><i>Menghitung Luas Segitiga</i></b><br>";
            echo "Nilai Alas : $alas <br>";
            echo "Nilai Tinggi : $tinggi <br><br>";
            echo "Rumusnya  : 1/2 x Alas x Tinggi <br>";
            $this->luas = $alas * $tinggi * 0.5;
            echo "Luas Segitiga : ".$this->luas ."<br><br>";

            echo "Rumus Keliling : 3 x Panjang Sisi (Alas) <br>";
            $this->keliling = 3 * $alas;
            echo "Keliling Persegi : " .$this->keliling ."<br>";
            echo "<hr>";

        }
    }

    class lingkaran extends bangun_datar{
        public function lingkaran($jari,$phi){

            echo "<b><i>Menghitung Luas Lingkaran</i></b><br>";
            echo "Nilai Jari-Jari : $jari <br>";
            echo "Nilai Phi : $phi <br><br>";
            echo "Rumusnya : Phi(22/7 atau 3.14) * Jari-Jari * Jari-Jari <br>";
            $this->luas = $phi * $jari * $jari;
            echo "Luas Lingkaran : ".$this->luas ."<br><br>";

            echo "Rumus Keliling : 2 x Phi(22/7 atau 3.14) x Jari-Jari <br>";
            $this->keliling = 2 * $phi * $jari;
            echo "Keliling Persegi : " .$this->keliling ."<br>";
            echo "<hr>";

        }
    }

    $cetak4 = new lingkaran();

    //==========================================================================
    $cetak4->lingkaran(10,3.14);

?>