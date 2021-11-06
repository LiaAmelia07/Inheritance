<?php 

    // class utama
    class manusia
    {
        public $teman = "jjxvrby";
        protected function berinama()
        {
            echo "Nama Saya Lia Amelia  <br>";
        }

    }

    //class turunan
    class teman extends manusia
    {
        public function berinamateman()
        {
            echo $this->berinama();
            echo "Nama Teman Saya " . $this->teman .  "<br>";
        }   
    }

    //instansiasi
    $cetak = new teman();
    $cetak->berinamateman();

?>