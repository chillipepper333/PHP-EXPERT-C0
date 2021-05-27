<?php 

class scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;
    public function checkInhoud(){
        if($this->inhoudTank == 6){
            echo "de tank is vol!";
        }
        else{
            echo "het is niet vol";
        }
    }    	
}

$piago = new scooter;
$peugeot = new scooter;

$piago->kleur ='rood';
$piago->merk ='Piago';
$piago->inhoudTank ='6';

$peugeot->kleur ='Puegeot';
$peugeot->merk ='zwart';
$peugeot->inhoudTank ='7';

$piago->checkInhoud();


?>