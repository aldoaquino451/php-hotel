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
  $value['name'] . ': ' .
    $value['description'] . ', ' .
    $value['parking'] . ', ' .
    $value['vote'] . ' stelle, ' .
    $value['distance_to_center'] . ' km;' . '<br>';
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

    <div class="card p-3">
      <table class="table table-hover ">

        <thead class="table-dark">
          <tr>
            <? foreach ($hotels[0] as $key => $value) { ?>
              <th scope="col" class="text-capitalize">
                <? echo str_replace('_', ' ', $key) ?>
              </th>
            <? } ?>
          </tr>
        </thead>

        <tbody>
          <? foreach ($hotels as $hotel) { ?>
            <tr>
              <th scope="row">
                <? echo $hotel['name']; ?>
              </th>
              <td>
                <? echo $hotel['description']; ?>
              </td>
              <td>
                <? echo $hotel['parking'] ? '&check;' : '&cross;'; ?>
              </td>
              <td>
                <? echo $hotel['vote']; ?>
              </td>
              <td>
                <? echo $hotel['distance_to_center']; ?>
              </td>
            </tr>
          <? } ?>
        </tbody>

      </table>
    </div>

  </div>

</body>

</html>