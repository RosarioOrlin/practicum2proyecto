<?php
    function conectar(){
        $servername = "localhost";
        $database = "ejemplo3";
        $username = "root";
        $password = "";
        // Establecer conexión
        $con = mysqli_connect($servername, $username, $password, $database);
        // Verificar conexión
        if (!$con) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        echo "Conectado exitosamente";
        mysqli_close($con);
    }
?>