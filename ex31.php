<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 3 - Ex1</title>
</head>
<body>
    <h1>Processa contactes</h1>

    <table style="border: 1px solid black; border-collapse: collapse;">
    <?php
        $arraycontactos = file("contactes31.txt");
        for ($i = 0; $i < count($arraycontactos); $i++){
            echo"<tr>";
            $arraycontactos2 .= str_replace(",", "#", $arraycontactos[$i]);
            $contacto = explode(",", $arraycontactos[$i]);
            
            for ($j = 0; $j < count($contacto); $j++){
                $valor = $contacto[$j];
                echo "<td style='border: 1px solid black; padding: 5px'> $valor</td>";
            
            }
            echo"</tr>";
        }

        file_put_contents( "contactes31b.txt", $arraycontactos2);

    ?>

    </table>

</body>
</html>