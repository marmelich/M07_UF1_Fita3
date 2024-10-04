<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 3 - Ex1</title>
</head>
<body>

    <form method="post" action="ex32.php">
        <p>Introdueix dades</p>
        <textarea name="comentari"></textarea><br>
        <label for="separador">Separador</label>
        <input type="text" name="separador"/>

        <input type="submit"/>
    </form>

    <?php
        if(isset($_POST["comentari"])){
            $comentari = $_POST["comentari"];
            $separador = $_POST["separador"];
            $comentari2 = str_replace(" ",$separador, $comentari);

            fwrite(fopen("comentaris.txt", "a+"), $comentari2);
        }

    ?>

    



</body>
</html>