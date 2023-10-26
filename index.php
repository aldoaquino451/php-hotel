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

$star_icon = "<i class='fa-solid fa-star'></i>";

$hotels_parking = array_filter($hotels, function ($hotel) {
  $parking_select = $_GET['parking'];

  if ($parking_select == 'true')
    return $hotel['parking'] == true;

  if ($parking_select == 'false')
    return $hotel['parking'] == false;

  return $hotel;
});

$hotels_stars = array_filter($hotels_parking, function ($hotel) {
  $stars_select = $_GET['stars'];
  return $hotel['vote'] >= $stars_select;
});

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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css'
    integrity='sha512-KOWhIs2d8WrPgR4lTaFgxI35LLOp5PRki/DxQvb7mlP29YZ5iJ5v8tiLWF7JLk5nDBlgPP1gHzw96cZ77oD7zQ=='
    crossorigin='anonymous' />

  <link rel="stylesheet" href="./css/style.css" />

  <!-- titolo -->
  <title>PHP Hotel</title>

</head>

<body>

  <div class="container my-5">

    <h4>Puoi scegliere tra gli hotel con o senza il parcheggio e in base al voto dei clienti</h4>

    <form action="index.php" method="get">

      <div class="my-3">
        <label for="">Parcheggio</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="parking" id="parking" value='all' checked>
          <label class="form-check-label" for="parking">
            Non Importa
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="parking" id="parking" value='true'>
          <label class=" form-check-label" for="parking">
            Sì
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="parking" id="parking" value='false'>
          <label class="form-check-label" for="parking">
            No
          </label>
        </div>
      </div>

      <div id="stars-selection" class="my-3">
        <label for="">Voto</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="stars" id="radios1" value="1" checked>
          <label class="form-check-label" for="radios1">
            <? for ($i = 1; $i <= 1; $i++): ?>
              <? echo $star_icon ?>
            <? endfor; ?>
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="stars" id="radios2" value="2">
          <label class="form-check-label" for="radios2">
            <? for ($i = 1; $i <= 2; $i++): ?>
              <? echo $star_icon ?>
            <? endfor; ?>
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="stars" id="radios3" value="3">
          <label class="form-check-label" for="radios3">
            <? for ($i = 1; $i <= 3; $i++): ?>
              <? echo $star_icon ?>
            <? endfor; ?>
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="stars" id="radios4" value="4">
          <label class="form-check-label" for="radios4">
            <? for ($i = 1; $i <= 4; $i++): ?>
              <? echo $star_icon ?>
            <? endfor; ?>
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="stars" id="radios5" value="5">
          <label class="form-check-label" for="radios5">
            <? for ($i = 1; $i <= 5; $i++): ?>
              <? echo $star_icon ?>
            <? endfor; ?>
          </label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary my-3">Cerca</button>
    </form>

  </div>

  <div class="container my-5 ">

    <div class="card p-3">
      <table class="table table-hover ">

        <thead class="table-dark">
          <tr>
            <?php foreach ($hotels[0] as $key => $value): ?>
              <th scope='col' class='text-capitalize'>
                <?php echo str_replace('_', ' ', $key) ?>
              </th>
            <?php endforeach; ?>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($hotels_stars as $hotel) { ?>
            <tr>
              <th scope="row">
                <?php echo $hotel['name'] ?>
              </th>
              <td>
                <?php echo $hotel['description'] ?>
              </td>
              <td class="<?php echo $hotel['parking'] ? 'text_green' : 'text-danger' ?>">
                <?php echo $hotel['parking'] ? '&check;' : '&cross;' ?>
              </td>
              <td>
                <?php echo $hotel['vote'] ?>
              </td>
              <td>
                <?php echo $hotel['distance_to_center'] ?> km
              </td>
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>

  </div>

</body>

</html>