<?php
    function multiArray(){
        $nomes = ["Juan", "Marquinhos", "Lewandowski", "Xico", "Nacim"];
        foreach ($nomes as $nome) {
            echo $nome . "</br>";
        }
        echo "<br>";
    }

    //-------------------------------------------------//

    function Foreachum(){
        $nums = [0, 1, 2, 3, 4, 5];
        $soma = 0;

        foreach ($nums as $num) {
            $soma += $num;
            echo "A soma é: " . $soma . "</br>";
        }
        echo "<br>";
    }

    //-------------------------------------------------//

    function ForeachDois(){
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        foreach ($numeros as $numPar) {
            if ($numPar % 2 == 0) {
                echo "Número par: " . $numPar . "<br>";
            }
        }
        echo "<br>";
    }

    //-------------------------------------------------//

    echo multiArray();
    echo ForeachUm(); 
    echo ForeachDois();
    
     //-------------------------------------------------//

    function somar($num1, $num2) {
        $soma = $num1 + $num2;
        return $soma;
    }
    $resultado = somar(5, 3);
    echo "A soma é: " . $resultado . "<br>";

    //-------------------------------------------------//
    

?> 