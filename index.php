<?php
//Variáveis:
 $numP = rand(0,100);
 $numS = rand(0,100);
 $maior = max($numP, $numS);
 $raiz = sqrt($numP);
 $raizD = sqrt($numS);
 $redondo  = round($raiz);
 $redondoD  = round($raizD);
 $vProd = rand(0, 100);
 $vPorc = rand(0, 100);
 $valor = $vProd - ($vProd * ($vPorc/ 100));
 $faren = rand(-128, 136);
 $farCel = ($faren - 32) * 5/9;
 $semVir = number_format($farCel, 2);
 

//Prints: 
echo "Primeiro número: " . $numP . "</br>" . "Segundo número: " . $numS . "</br>" . "Maior valor: " . $maior . "</br>";
echo "</br>";
echo "Raiz do primeiro número: " . $raiz . "</br>" . "Raiz do segundo número: " . $raizD . "</br>";
echo "</br>";
echo "Arredondamento do primeiro número: " . $redondo . "</br>" . "Arredodondamento do segundo número: " . $redondoD . "</br>";
echo "</br>";
echo "Valor do produto: R$ " . $vProd . "</br>" . "Valor da porcentagem: " . $vPorc . "</br>" . "Valor com desconto: " . $valor . "</br>";
echo "</br>";
echo "Fahrenheit: " . $faren . "°" . "</br>" . "Valor em Celsius: " . $semVir . "°" . "</br>";
echo "</br>";

?>
