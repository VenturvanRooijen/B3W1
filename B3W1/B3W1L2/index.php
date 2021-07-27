<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hello World!</h1>



    <?php define("CONSTANTE", "Hello World!"); ?>

    <h1><?php echo CONSTANTE; ?></h1>
    


    <?php 
        $Poggers = "Learning PHP";
        $Poggers = CONSTANTE;
     ?>

     <h1><?php echo $Poggers;?></h1>



    <?php 
    $hello = "Hello";
    $world = " World!";
    ?>

    <h1><?php echo $hello; echo $world; ?></h1>


    <?php
   $zin = array("Hello", " World!")

    ?>

    <h1><?php  echo $zin[0] . $zin[1]; ?></h1>
    
</body>
</html>