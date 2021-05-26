<?php
$medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ]
];

foreach($medewerkers as $person){
    echo $person['voornaam'] . "<br>";
    echo $person['achternaam'] . "<br>";
    echo $person['functie'] . "<br>";
}
?>
