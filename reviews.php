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
                <th>ID película</th>
                <th>ID usuario</th>
                <th>Calificación</th>
                <th>Reseña</th>
                <th>Fecha</th>

            </tr>
            <?php
            require_once('conexion.php');

            
            $ssql = 'SELECT * FROM pelianalitic.review'; #cadena de texto
            $rrsql = mysqli_query($conexion, $ssql); #operacion
            //print_r($rsql)

            // cambiar formato para usar
            $direct = mysqli_fetch_all($rrsql, MYSQLI_ASSOC);
            //print_r($songs);


            $result = mysqli_query($conexion, $ssql);

            if ($result->num_rows >0) {
                //while($row =  $rsql-> fetch_assoc()) {
                while($row =  mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['pelicula_id'] . "</td><td>" . $row['usuario_id'] . "</td><td>" . $row['calificacion'] . "</td><td>" . $row['resena'] .  "</td><td>"  . $row['fecha'] ."</td></tr>";
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