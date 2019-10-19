<?php
$br = "<br>";
echo date("d/m/Y H:i:s"); // dia | mes | ano | horas | minutos | segundos
echo $br;
echo date("d/m/Y H:i:s", 1571322309); // congela nos segundos passados no segundo argumento

echo "<br>";
echo time(); // quantidade de segundos desde 1970

echo $br;
$ts = strtotime("2001-09-11");
$ts = strtotime("+1  day");
$ts = strtotime("+1  week");
$ts = strtotime("now");


echo date("l, d/m/Y", $ts);

echo $br;

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
echo ucwords(strftime("%A %B"));
echo $br;


$dt = new DateTime(); // crinado instancia do objeto date
$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);
echo $br;

echo $dt->format("d/m/Y H:i:s");





?>