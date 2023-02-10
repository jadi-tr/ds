<?php
// faça um programa que mostre na tela duas variaveis 
//o valaor de duas variaveis, depois troque o valor 
//das duas variaveis e mostre os novos valores das variaveis 
$a = 4;
$b = 2;

$trocar = $a;
$trocar2 = $b;

$b = $trocar;
$a = $trocar2;

echo $a, $b;

?>