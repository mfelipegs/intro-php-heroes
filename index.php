<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Exercise</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    <?php
        $manufacturer = "Koenigsegg";
        $manufacturer_logo = ["assets/img/koenigsegg_logo.png"];
        $car = ["Agera R", "One:1", "CCX", "Agera RS"];
        $car_img = ["assets/img/agera_r.jpg", "assets/img/one.jpg", "assets/img/ccx.jpg", "assets/img/agera_rs.jpg"];
        
        $n = 6;
        
        echo "<div class='logo header'><img src=".$manufacturer_logo[0]."></div>";
        echo "<p class='header'>".$manufacturer." ".$car[0]."</p>";

        //print the first element of the array (Agera R)
        for($i = 0; $i <= $n-1; $i++) {
            echo "<div class='image_car'>
                    <img src='$car_img[0]'>
                  </div>" . "<br>";
        }
    ?>
    </div>
</body>
</html>