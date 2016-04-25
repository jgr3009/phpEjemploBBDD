<?php

    include('./funciones.php');
    $mysqli = conectaBBDD();

    $nombreUsuario = $_POST['nombreUsuario'];
    $pass = $_POST['pass'];
            
    $consulta = $mysqli -> query("SELECT * FROM usuario where codigo = '$nombreUsuario' and pass= '$pass';");

    $num_filas = $consulta -> num_rows;
    
    if ($num_filas > 0){
        session_start();
        $_SESSION['usuario'] = $nombreUsuario;
        $resultado = $consulta ->fetch_array();
        $tipo = $resultado['tipo'];
        echo $tipo;
        switch ($tipo) {
            case 0 : require 'menuUsuario.php'; break;
            case 1 : require 'menuAdmin.php'; break;
        }
        
    }
    else {
        echo '<h1> anda y que te peinen  </h1>';
    }
    ?>
