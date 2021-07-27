<?php
    
    $nummer1 = rand(1, 100);
    $nummer2 = rand(1, 100);
    var_dump($nummer1, $nummer2);
     echo "<br>";
     echo "<br>";
    

        echo $nummer1 * $nummer2 . "<br>"; 
        echo $nummer1 + $nummer2 . "<br>"; 
        echo $nummer1 - $nummer2 . "<br>"; 
        echo $nummer1 / $nummer2 . "<br>"; 
        echo "<br>";


    function tafel($getal){
    for($i = 1; $i<=10; $i++){
        echo "$i x $getal = ", $i * $getal, "<br>";
    }
    echo "<br>";
}

        tafel(6);


        $getallen = [3, 5, 8, 12];

        foreach($getallen as $number){
            for($i = 1; $i<=10; $i++){
                echo "$i x $number = ", $i * $number, "<br>";
            }
            echo "<br>";
        }

    ?>
