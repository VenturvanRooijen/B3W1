
<?php
    date_default_timezone_set("Europe/Amsterdam");

    
    function getTime(){

        $time = date("H:i");
        $style = "images/";

            if($time >= 6 && $time < 12){
                $style = $style . "morning.jpg";
                define("TIME", "Goedemorgen!");
            }
            elseif($time >= 12 && $time < 18){
                $style = $style . "afternoon.jpg";
                define('TIME', 'Goedemiddag!');
                
            }
            elseif($time >= 18 && $time < 0){
                $style = $style . "evening.jpg";
                define('TIME', 'Goedenavond!');
                
            }
            else{
                $style = $style . "night.jpg";
                define('TIME', 'Goedenacht!');
                
            };
            echo $style;
        };

        getTime();

        $bgimg = "images/morning.jpg";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <img src="<?php echo $bgimg; ?>" alt="bgimg">

    <div class="text">
    <h1><?php echo TIME; ?></h1>
    <h1><?php echo "het is nu " . $time; ?></h1>
    </div>
    </section>
</body>
</html>