<?php

$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],
];
// var_dump($hotels);

foreach ($hotels as $value) {
  echo " $value[name] : $value[description], $value[parking] parcheggio, $value[vote] stelle, $value[distance_to_center] km; <br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- cdnjs -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.css'
    integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A=='
    crossorigin='anonymous' />

  <!-- titolo -->
  <title>PHP Hotel</title>

</head>

<body>

  <div class="container my-5 ">

    <? ?>
    <div>
      <h4>
        <? echo $hotels[0]['name']; ?>
      </h4>
      <ul>
        <li>
          <? echo $hotels[0]['description']; ?>
        </li>
        <li>
          <? echo $hotels[0]['parking']; ?>
        </li>
        <li>
          <? echo $hotels[0]['vote']; ?>
        </li>
        <li>
          <? echo $hotels[0]['distance_to_center']; ?>
        </li>
      </ul>
    </div>

  </div>

</body>

</html>