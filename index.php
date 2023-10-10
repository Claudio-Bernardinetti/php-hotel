
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
    <div class="container mt-5 bg-primary  border-primary">
    <h1 class="d-flex justify-content-center">PHP Hotels</h1>
    <hr>
    <form action="index.php" method="get">
        <div class="d-flex justify-content-around align-items-baseline p-4">
            <div>
                <label for="parking"><strong>Parking</strong></label>
                <input type="checkbox" id="parking" name="parking">
            </div>
            <div>
                <label for="vote"><strong>Vote (Stars)</strong></label>
                <input type="number" id="vote" name="vote" min="1" max="5">
            </div>
            <button class="btn btn-light"><strong>Submit</strong></button>
        </div>
        <hr>
    </form> 

        <?php 
        $parking = isset($_GET["parking"]);
        $vote = isset($_GET["vote"]) ? $_GET["vote"] : 0;
        include 'hotels.php';

        foreach ($hotels as $hotel) {
            if ((!$parking || $hotel['parking']) && $hotel['vote'] >= $vote)  {
                echo "Nome: " . $hotel['name'] . "<br>";
                echo "Description: " . $hotel['description'] . "<br>";
                echo "Parking: " . $hotel['parking'] . "<br>";
                echo "Vote: " . $hotel['vote'] . ' ' . "Stars" . "<br>";
                echo "Distance to Center: " . $hotel['distance_to_center'] . ' ' . "Km" . "<br>";
                echo "<hr>"; 
            }
        }
        
        ?>
    </div>

</body>
</html>