<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01</title>
</head>
<body>

    <h1>Conta de luz</h1>

    <form action="">
        <label for="">Insira o valor da conta de luz</label>
        <input type="" name="valor">
    <?php
     if (isset($_GET["valor"]))
     {
    $valor = $_GET["valor"];
    
     if ($valor > 150)
     {
         echo "Você está gastando muito";
     }
     else
     {
         echo "Gasto normal";
     }
    }
    ?>
    </form>

    <h1>Cálculo de IMC com feedback</h1>

    <form action="">
        <label for="">Insira seu peso (kg)</label>
        <input type="text" name="peso">

        <label for="">Insira sua altura (m)</label>
        <input type="text" name="altura">

        <input type="submit">
    <?php

    if (isset($_GET["peso"]) && isset($_GET["altura"]))
    {
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];
    
        $imc = $peso / ($altura * $altura);

        echo $imc;

        if($imc < 18.5)
        {
            echo " abaixo do peso";
        }

        else if($imc < 18.5 && $imc < 24.99)
        {
            echo " normal";
        }
        else if($imc < 25 && $imc < 29.99)
        {
            echo " sobrepeso";
        }
        else if($imc > 30)
        {
            echo " obesidade";
        }
    }
    ?>
    </form>



</body>
</html>