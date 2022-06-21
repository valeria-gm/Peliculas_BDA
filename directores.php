<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Mi primera página con estilo</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
</head>

    <body>
        <table>
            <tr>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Nacionalidad</th>
                <th>Sexo</th>

            </tr>
            <?php
            require_once('conexion.php');

            
            $ssql = 'SELECT * FROM pelianalitic.director'; #cadena de texto
            $rrsql = mysqli_query($conexion, $ssql); #operacion
            //print_r($rsql)

            // cambiar formato para usar
            $direct = mysqli_fetch_all($rrsql, MYSQLI_ASSOC);
            //print_r($songs);


            $result = mysqli_query($conexion, $ssql);

            if ($result->num_rows >0) {
                //while($row =  $rsql-> fetch_assoc()) {
                while($row =  mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['nombre_director'] . "</td><td>" . $row['apellidos_director'] . "</td><td>" . $row['nacionalidad'] . "</td><td>" . $row['sexo'] . "</td></tr>";
                }
            }
            else {
                echo "No Results";
            }
            mysqli_close($conexion);
            ?>


        </table>
    </body>


</html>