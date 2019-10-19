<?php
// Exemplo 1


for ($i = 0; $i < 50; $i++){
    echo $i . "<br />";
}
for ($x = 0; $x < 1000; $x += 5){
    if ($x > 200 && $x < 800) continue; // ignora os numeros 196 a 799
    if ($x === 900) break;
    echo $x . "<br />";
}
echo "<select>";
for ($i=date("Y"); $i > date('Y') - 100; $i--) { 
    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";


?>