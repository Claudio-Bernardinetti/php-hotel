
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- Title -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap -->
</head>
<body>
    <div class="container mt-5 bg-primary ">
        <?php 

        include 'hotels.php';

        foreach ($hotels as $hotel) {
            echo "Nome: " . $hotel['name'] . "<br>";
            echo "Description: " . $hotel['description'] . "<br>";
            echo "Parking: " . $hotel['parking'] . "<br>";
            echo "Vote: " . $hotel['vote'] . ' ' . "Stars" . "<br>";
            echo "Distance to Center: " . $hotel['distance_to_center'] . ' ' . "Km" . "<br>";
            echo "<hr>"; 
        }
        
        ?>
    </div>

</body>
</html>