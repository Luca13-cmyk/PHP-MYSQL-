<form method="post">

<input type="text" name="busca" id="">
<button type="submit">Buscar</button>
</form>

<?php

// forma nao segura
// $_POST['busca'] = "<script> alert('hello world') </script>"; 

// if (isset($_POST["busca"]))
// {
//     echo $_POST["busca"];
// }


// forma segura

// $_POST['busca'] = "<b>tio<b/><script> alert('hello world') </script>"; 

if (isset($_POST["busca"]))
{
    // echo strip_tags($_POST["busca"]);
    // echo strip_tags($_POST["busca"], "<b>"); // permite somente marcacao "b"

    echo htmlentities($_POST["busca"]); // escapa as tags convertendo tudo em string
}

?>