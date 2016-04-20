<?php
    include('./funciones.php');
    $mysqli = conectaBBDD();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    </head>
    <body>
        <?php
            $consulta_equipos = $mysqli -> query("SELECT * FROM equipos");
            
            $num_equipos = $consulta_equipos -> num_rows;
            echo '<table border="1">';
            echo '<tr>';
            echo '<th> id equipo</th>';
            echo '<th> nombre equipo</th>';
            echo '<th> ciudad equipo</th>';
            echo '</tr>';
            for ($i = 0; $i < $num_equipos; $i++){
               $fila = $consulta_equipos -> fetch_array();
               $id_equipo = $fila['id_equipo'];
               $nombre_equipo = $fila['nombre'];
               $ciudad_equipo = $fila['ciudad'];
               echo '<tr>';
               echo '<td>'.$id_equipo . '</td>';
               echo '<td>'.$nombre_equipo. '</td>';
               echo '<td>'.$ciudad_equipo. '</td>';
               echo '</tr>';
            }
            echo '</table>'
            
        ?>
    </body>
</html>
