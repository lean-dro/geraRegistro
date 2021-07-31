<?php 
function gerarDia(){
$dia = random_int(1,31);
$mes = random_int(1,12);
$ano = random_int(1960,2000);

$dia=strval($dia);
if (strlen($dia)<2) {
    $dia = "0".$dia;
}

$mes = strval($mes);
if (strlen($mes)<2) {
    $mes = "0".$mes;
}
echo ("$dia/$mes/$ano");

}
?>