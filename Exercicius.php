<?php
$frase = "eu preciso de um psíquiatra, eu não aguento mais";
$senha = "40028922";
$taman = strlen($senha);
$resul = substr($senha, -2);
$ocul = str_repeat("*", $taman - 2);

echo $frase;
echo "</br>";
echo strlen($frase);
echo "</br>";
echo str_word_count($frase);
echo "</br>";
echo $ocul;


?>