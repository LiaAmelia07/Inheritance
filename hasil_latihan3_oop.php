<table>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<?php 

if (isset($_POST['proses'])){
    $no = @$_POST['no'];
    $nama = @$_POST['nama'];
    $unit = @$_POST['unit'];
    $tanggal = @$_POST['tanggal'];
    $jabatan = @$_POST['jabatan'];
    $lama = @$_POST['lama'];
    $status = @$_POST['status'];
    $bpjs = @$_POST['bpjs'];
    $pinjaman = @$_POST['pinjaman'];
    $tabungan = @$_POST['tabungan'];
    $lainnya = @$_POST['lainnya'];

    class penggajihan{

        public $totalgaji;
        public $potongan;

        public function data($no,$nama,$unit,$tanggal){
            $this->no = $no;
            $this->nama = $nama;
            $this->unit = $unit;
            $this->tanggal = $tanggal;
        }

        public function tampilkan(){
            echo 
            "
            <tr>
                <td colspan=3><h3>Data Diri</h3></td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td>No</td>
                <td>:</td>
                <td>". $this->no ."</td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>". $this->nama ."</td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td>Unit</td>
                <td>:</td>
                <td>". $this->unit ."</td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>". $this->tanggal ."</td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            ";
        }
    }

    class gaji extends penggajihan{

        public function tampunggaji($jabatan,$lama,$status){
            
            $this->jabatan = $jabatan;
            $this->lama = $lama;
            $this->status = $status;
        }

        public function tampung_data($no,$nama,$unit,$tanggal){
            echo $this->data($no,$nama,$unit,$tanggal);
            echo $this->tampilkan();
        }

        public function tampilkangaji(){

            if ($this->jabatan == "Kepsek"){
                $jabatan = 5000000;
            }
            else if ($this->jabatan == "Guru"){
                $jabatan = 3000000;
            }
            else if ($this->jabatan == "Karyawan"){
                $jabatan = 1500000;
            }

            if ($this->lama >= 0 && $this->lama < 6){
                $lama = 250000;
            }
            else if ($this->lama > 5 && $this->lama < 11){
                $lama = 500000;
            }
            else if ($this->lama > 10){
                $lama = 1000000;
            }

            if ($this->status == "Tetap"){
                $status = 500000;
            }
            else if ($this->status == "Kontrak"){
                $status = 0;
            }

            $this->totalgaji = $jabatan + $lama + $status;

            echo 
            "
            <tr>
                <td colspan=3><h3>Gaji</h3></td>
            </tr>
            ";
            
            echo 
            "
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>". $this->jabatan ."</td>
            </tr>
            ";
            
            echo 
            "
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td>$jabatan</td>
            </tr>
            ";
            
            echo 
            "
            <tr>
                <td>Lama Kerja</td>
                <td>:</td>
                <td>". $this->lama ."</td>
            </tr>
            ";
            
            echo 
            "
            <tr>
                <td>Bonus Lama Kerja</td>
                <td>:</td>
                <td>$lama</td>
            </tr>
            ";
            
            echo 
            "
            <tr>
                <td>Status Kerja</td>
                <td>:</td>
                <td>". $this->status ."</td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td>Tunjangan Status Kerja</td>
                <td>:</td>
                <td>$status</td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td><b><i>Total Gaji</i></b></td>
                <td><b><i>:</i></h3></b>
                <td><b><i>Rp.". $this->totalgaji ."</i></b></td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            ";
        }
    }

    class potongan extends gaji{
        public function tampung_potongan($bpjs,$pinjaman,$tabungan,$lainnya){
            
            $this->bpjs = $bpjs;
            $this->pinjaman = $pinjaman;
            $this->tabungan = $tabungan;
            $this->lainnya = $lainnya;
        }

        public function tampung_gaji($jabatan,$lama,$status){
            echo $this->tampunggaji($jabatan,$lama,$status);
            echo $this->tampilkangaji();
        }

        public function tampilkan_potongan(){

            $this->totalpotongan = $this->bpjs + $this->pinjaman + $this->tabungan + $this->lainnya;

            echo 
            "
            <tr>
                <td colspan=3><h3>Potongan</h3></td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td>BPJS</td>
                <td>:</td>
                <td>". $this->bpjs ."</td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td>". $this->pinjaman ."</td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td>Tabungan</td>
                <td>:</td>
                <td>". $this->tabungan ."</td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td>Lainnya</td>
                <td>:</td>
                <td>". $this->lainnya ."</td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td><b><i>Total Potongan</i></b></td>
                <td><b><i>:</i></h3></b>
                <td><b><i> Rp.". $this->totalpotongan ."</i></b></td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            ";
        }

        public function sisa(){
            $sisa = $this->totalgaji - $this->totalpotongan;
            echo 
            "
            <tr>
                <td><h4><i>Gaji Yang Diterima</i></h4></td>
                <td><h4><i>:</i></h4></td>
                <td><h4><i>Rp.$sisa</i></h4></td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            ";
        }
    }

    $out = new potongan();
    $out->tampung_data($no,$nama,$unit,$tanggal);
    $out->tampung_gaji($jabatan,$lama,$status);
    $out->tampung_potongan($bpjs,$pinjaman,$tabungan,$lainnya);
    $out->tampilkan_potongan();
    $out->sisa();
}

?>
</table>