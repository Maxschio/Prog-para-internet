<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Crie uma função randomize() que imprima no HTML um 
valor numérico aleatório.-->

    <?php
        function numA(){
            $numA= rand(1,1000);

            echo "<p>$numA</p>";
        }

        numA();
    ?>



</body>
</html>