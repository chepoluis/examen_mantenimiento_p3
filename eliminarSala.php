<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["id"])) {
    $id = $_GET["id"];


                $query = 'DELETE FROM sala_remota WHERE id_sala_remota='.$id;
                mysql_query($query) or die(mysql_error());
}

   header('Location: listar.php');
?>