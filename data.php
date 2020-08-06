<?php


//echo $data->format('d-m-Y H:i:s') . PHP_EOL;

/*
-> P representação de periodo: vem antes de dia, mês, ano e semana
Y  anos
M  meses
D  dias
W  semanas
-> T  representação de tempo: vem antes de hora, minuito e segundo
H  horas
M  minutos
S  segundos
*/

$data = new DateTime();

$intervalo = new DateInterval('PT5M'); // adiciona um intervalo de 5 minutos
$data->add($intervalo);

var_dump($data);
