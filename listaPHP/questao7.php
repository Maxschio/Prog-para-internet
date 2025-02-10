<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<body>
    <form action="" method="get">
    <label for="n">Numero</label>
    <input type="text" name="n" value=<?php 
    if(isset($_GET['n'])){
        echo $_GET['n'];
    }else{
        echo "-";
    }
    ?>>
    <input type="submit">
    <?php
    if(isset($_GET['n'])){
        $valor=$_GET['n'];
        for ($i=0; $i <=10 ; $i++) { 
         ?>
            <p><?php echo "$i *".$valor."=".$i* $valor ?>
        </p>
        <?php
        }
    }
    ?>

    </form>
</body>
</html>