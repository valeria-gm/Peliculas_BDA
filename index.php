
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
                <th>Titulo</th>
                <!--
                <th>Poster Link</th>
                <th>Año</th>
                <th>Certificación</th>
                <th>Duración</th>
                <th>IMDB rating</th>
                <th>Resumen</th>
                <th>Calificación de la crítica</th> -->

            </tr>
            <?php
            require_once('conexion.php');

            $result = mysqli_query($conexion, $sql);

            if ($result->num_rows >0) {
                //while($row =  $rsql-> fetch_assoc()) {
                while($row =  mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['poster_link'] . "</td><td>" . $row['titulo'] . "</td></tr>";
                     /* . "</td><td>" . $row['anio'] . "</td><td>" . $row['certificado'] . "</td><td>" . $row['duracion'] . "</td><td>". $row['IMBD_rating'] . "</td><td>" . $row['resumen'] . "</td><td>" . $row['calificacion_critica']  . */
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
