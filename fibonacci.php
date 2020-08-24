<?php

    $quant = $_GET["quant"];
    $vetor = array();

    for($i = 2; $i <= $quant; $i++){
        $vetor[0] = 0;
        $vetor[1] = 1;
        $vetor[$i] = $vetor[$i-1]+$vetor[$i-2];
    }
    echo"<center>";
    echo"<p> Quantidade de numeros requeridos: $quant </p>";
    echo"<p>Sequencia de Fibonacci</p> <br/>";
    for($i= 1; $i<= $quant; $i++){
        echo"$vetor[$i]<br/>";
    }
    echo"</center>";
?>
