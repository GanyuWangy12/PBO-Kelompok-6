<?php
class GR_YARIS {
    // atribut
    public $tangki=5;
    private $kecepatan=150;
    protected $merek;

    // method
    public function nyalakanMesin(){
        if($this->tangki > 0){
            echo "Mesin menyala...";
        }
    }
    public function matikanMesin(){
        if($this->tangki > 0){
            echo "Mesin tidak bisa dimatikan karena GR Yaris sedang berjalan";
        } else {
            echo "Mesin dimatikan...";
        }
    }

    public function belokKanan(){
        $this->kecepatan--;
        echo "GR Yaris berbelok ke kanan";
        // belok ke mana? perlu dicek :)
    }

    public function belokKiri(){
        $this->tangki--;
        echo "GR Yaris berbelok ke kiri";
        // belok ke mana? perlu dicek :)
    }
    public function maju(){
        $this->kecepatan--;
        echo "GR Yaris melaju ke depan";
        $this->kecepatan++;
    }

    public function mundur(){
        $this->kecepatan--;
        echo "GR Yaris mundur";
        $this->kecepatan++;
    }
}

$mobil1=new GR_YARIS();
echo $mobil1->nyalakanMesin();
echo"<br>";
echo $mobil1->maju();
echo"<br>";
echo $mobil1->mundur();