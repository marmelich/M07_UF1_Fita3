<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 3 - Ex3</title>
</head>
<body>

    <?php
    if(isset($_POST["textarea"])){
        if ($_POST["textarea"] != ""){
            $comentari = "\n".$_POST["textarea"];
            fwrite(fopen("ex33.txt", "a+"), $comentari);
        }
    }
    $txt = $arraycontactos = file("ex33.txt");
    for ($i = 0; $i < count($txt); $i++){
        $valor = $txt[$i];
        echo "<p> $valor </p> <hr>";
    }
    ?>

    <form method="post" action="ex33pagina1.php">
        <h2>Introdueix dades</h2>
        <textarea name="textarea"></textarea>
        <input type="submit"/>
    </form>

    
    
</body>
</html>