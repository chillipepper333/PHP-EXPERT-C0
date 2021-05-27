<?php 

class robot{
    public $naam;
    public $geluid;
    public $voortstuwing;
    public function getSound(){
        return $this->geluid;
    }
}

$wally = new robot;
$wolly = new robot;

$wally->naam ='wal-e';
$wally->geluid ='beepboop';
$wally->voortstuwing ='rollend';

$wolly->naam ='wol-e';
$wolly->geluid ='boopbeep';
$wolly->voortstuwing ='lopend';

echo $wally->getSound();
echo $wolly->getSound();

?>