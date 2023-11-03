<?php
$nota1 = rand(0,10);
$nota2 = rand(0,10);
$nota3 = rand(0,10);
$media = ($nota1 + $nota2 + $nota3)/ 3;
$mediaF = round($media);

if ($mediaF >= 7){
    $resultado =  "Aprovado!";
} else {
    $resultado = "Reprovado!";
}
echo "Com as notas: " . "$nota1, $nota2, $nota3" . "</br>" . "Você foi: " . $resultado . "</br>" .  "Sua média fechou em: " . $mediaF . "</br>" . "</br>";

//-----------------------------------------//

$idade = rand(1,30);
if ($idade >= 18){
    $adulto = "Você tem " . $idade . " anos, então é maior de idade!";
} else {
    $adulto = "Você tem " . $idade . " anos, então é menor de idade!";
}
echo $adulto . "</br>" . "</br>";

//-----------------------------------------//
$parim = rand(0,100);
    if ($parim % 2 != 0){
        $numparim = "O número é ímpar";
    } else {
        $numparim = "O número é par";
    }
echo $parim . "</br>" . $numparim . "</br>" . "</br>";

//-----------------------------------------//

$nupone = rand(-100,100);
    if ($nupone < 0){
    $pone = "O número é negativo";
    } elseif ($nupone == 0){
        $pone = "O zero é um não negativo e um não positivo";
    } else {
        $pone = "O número é positivo";
    }
echo $nupone . "</br>". $pone . "</br>" . "</br>";

//-----------------------------------------//

$valor = rand(20,150);
    if ($valor >= 100){
        $desconto = $valor - ($valor * 10/100);
        $descontoapp = "Você ganhou 10% de valor, seu preço passou de R$" . $valor . " para R$" . $desconto . "</br>" . "</br>";
    } else {
        $descontoapp = "Você não se aplica para o desconto, seu preço é R$" . $valor . "</br>" . "</br>";
    }
echo $descontoapp;

//-----------------------------------------//

$saldo = rand(0,100);
$ppreço = rand(0,100);
if ($saldo >= $ppreço){
    $compra = "Seu saldo é de R$" . $saldo . ", você comprou o produto de R$" . $ppreço;
} else {
    $compra = "Seu saldo é de R$" . $saldo . ", você não consegue comprar o produto de R$" . $ppreço;
}
echo $compra . "</br>" . "</br>";

//-----------------------------------------//

$nota = rand(0,10);
switch ($nota) {
    case ($nota >= 0 && $nota <= 3):
        echo "Nota entre 0 e 3";
        break;
    case ($nota >= 4 && $nota <= 6):
        echo "Nota entre 4 e 6";
        break;
    case ($nota >= 7 && $nota <= 8):
        echo "Nota entre 7 e 8";
        break;
    case ($nota >= 9 && $nota <= 10):
        echo "Nota entre 9 e 10";
        break;
    default:
        echo "Nota fora do intervalo permitido";
}
echo $nota . "</br>" . "</br>";

//-----------------------------------------//

$peso = rand(10,200);
$altura = rand(1.10,2.50);
$imc = $peso / ($altura * $altura);
if ($imc < 18.5) {
    $classificacao = "Abaixo do Peso";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    $classificacao = "Peso Normal";
} elseif ($imc >= 25 && $imc < 29.9) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obeso";
}
echo "Seu IMC é: " . number_format($imc, 2) . "</br>";
echo "Situação: " . $classificacao . "</br>";

//-----------------------------------------//

//-----------------------------------------//

//-----------------------------------------//
?>