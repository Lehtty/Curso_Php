<?php

echo '<span style= "color: blue;"> Aula 4 </span>';
echo "</br>" . "</br>";
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 a 100 é: " . $soma . "</br>" . "</br>";
//------------------------------------------------//

$num = 5;
while ($num >= 0){
    echo $num . ", ";
    $num--;
}
echo "FELIZ ANO NOVO!!!" . "</br>" . "FIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIILLLLLL
</br>
PAPAPAPAPAPAPAPAPAPAPAPAPAPAPAPA
TRATRATRATRATRATRATRATRA
</br>
TRA
</br>
POOOOOOOOOOOOUUUUUUUWWWW" . "</br>" . "</br>";
//-----------------------------------------------//
$somar = 0;
$numero = 1;

do {
    $somar += $numero;
    $numero++;
} while ($numero <= 100);
echo "Soma: " . $somar . "</br>" . "</br>";
//-----------------------------------------------//

$lista = [
    "Fruta1" => "Macuraja", 
    "Fruta2" => "Abaxaki", 
    "Fruta3" => "Ralanja",
    "Fruta4" => "Mãomão"
];
var_dump($lista["Fruta2"]);

echo "</br>" . "</br>";

$pessoa = [
    "Nome" => "Leticia",
    "Idade" => 18,
    "Cidade" => "Lauro Müller"
];
var_dump($pessoa["Nome"])
?>