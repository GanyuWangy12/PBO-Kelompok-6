<?php

class Lingkaran {
    private $keliling;
    
    public function __construct($diameter){
    	$this->keliling = 3.14 * 2 * $diameter;
    }
    
    public function getKeliling(){
    	return $this->keliling;
    }
    
    public function __destruct(){
    	echo "<br>Object lingkaran dihapus";
    }
    
}

$obj = new Lingkaran(5);
echo "Keliling lingkaran dengan diamater 5 : " . $obj->getKeliling();
