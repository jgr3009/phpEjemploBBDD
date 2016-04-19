<?php
    include('./funciones.php');
    $mysqli = conectaBBDD();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $consulta_equipos = $mysqli -> query("SELECT * FROM equipos");
            
            $num_equipos = $consulta_equipos -> num_rows;
            
            for ($i = 0; $i < $num_equipos; $i++){
               $fila = $consulta_equipos -> fetch_array();
               $id_equipo = $fila['id_equipo'];
               $nombre_equipo = $fila['nombre'];
               $ciudad_equipo = $fila['ciudad'];
               echo ' id equipo: '.$id_equipo;
               echo ' nombre equipo: '.$nombre_equipo;
               echo ' ciudad equipo: '.$ciudad_equipo;
               echo '<br>';
            }
            
        ?>
    </body>
</html>
