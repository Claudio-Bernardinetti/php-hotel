
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>

    
    
    <?php 

    include 'hotels.php';

    foreach ($hotels as $hotel) {
        echo "Nome: " . $hotel['name'] . "<br>";
        echo "Description: " . $hotel['description'] . "<br>";
        echo "Parking: " . $hotel['parking'] . "<br>";
        echo "Vote: " . $hotel['vote'] . ' ' . "Stars" . "<br>";
        echo "Distance to center: " . $hotel['distance_to_center'] . ' ' . "Km" . "<br>";
        echo "<hr>"; 
    }
    
    
    ?>
</body>
</html>