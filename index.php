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
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Futurama',
        'description' => 'Hotel Futurama Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Bellanova',
        'description' => 'Hotel bellanova Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
    // ciclo il mio arrey
    foreach($hotels as $hotel) {
    var_dump($hotel);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php hotel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php  foreach($hotels as $hotel) {?>
                    <table class="table">
                         <thead>
                           <tr>
                             <th scope="col">Nome</th>
                             <th class="text-center width" scope="col">Descrizione</th>
                             <th scope="col width-parking">Parcheggio</th>
                             <th scope="col text-center">Voto</th>
                             <th scope="col text-center">Distanza dal centro</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th scope="row"><?php echo $hotel ["name"]; ?></th>
                             <td class="text-center width"><?php echo $hotel ["description"]; ?></td>
                             <td class="width-parking"><?php echo $hotel ["parking"] ? "ha il parcheggio" : "non ha il parcheggio"; ?></td>
                             <td><?php echo $hotel ["vote"]; ?></td>
                             <td><?php echo $hotel ["distance_to_center"]; ?></td>
                           </tr>
                         </tbody>
                       </table>
                    <?php } ?>
               </div>
          </div>
      </div>
  </body>
</html>