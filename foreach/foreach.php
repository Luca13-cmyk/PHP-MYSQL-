<form >
    <input type="text" name="nome" id="nome">
    <input type="date" name="nascimento" id="nascimento">
    <input type="submit" value="OK">

</form>
<?php
$arr = [4, 5, 7];
foreach ($arr as $index => $num) {
    echo "Indice: $index <br>";
    echo "Numero: ".$num." <br>";
}
$i = 0;
foreach ($arr as $index => $value) {
    global $i;
    $i = $index + 1;
}
echo $i;

if (isset($_GET)){
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: $key";
        echo "Valor do campo: $value";
        echo "<hr>";
    }
}




?>