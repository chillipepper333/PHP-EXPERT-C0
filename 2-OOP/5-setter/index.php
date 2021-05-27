<?php 

class lamp{
    public $kleur;
    public $helderheid;
    public $isAan;
    public function setStatus($status){
        $this->isAan = $status;
    }
}

$woonkamerLamp = new lamp;
$keukenLamp = new lamp;

$woonkamerLamp->kleur ='geel';
$woonkamerLamp->helderheid ='zacht';
$woonkamerLamp->isAan ='true';

$keukenLamp->kleur ='wit';
$keukenLamp->helderheid ='vel';
$keukenLamp->isAan ='false';

$woonkamerLamp->setStatus('false');
echo $woonkamerLamp->isAan;
?>