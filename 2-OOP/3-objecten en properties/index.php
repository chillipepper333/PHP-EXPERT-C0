<?php 

class product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;
}

$dweil = new product;
$stofzuiger = new product;

$dweil->merk = 'hema';
$dweil->prijs = '10';
$dweil->type = 'lang';
$dweil->kleur = 'rood';

$stofzuiger->merk = 'aegon';
$stofzuiger->prijs = '50'; 
$stofzuiger->type = 'gfs505';
$stofzuiger->kleur = 'grijs';

echo $dweil->merk . "<br>";
echo $dweil->prijs . "<br>";
echo $dweil->type . "<br>";
echo $dweil->kleur . "<br>" . "<br>";

echo $stofzuiger->merk . "<br>";
echo $stofzuiger->prijs . "<br>";
echo $stofzuiger->type . "<br>";
echo $stofzuiger->kleur . "<br>";
?>