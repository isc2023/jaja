<?php
if (!empty($_GET['id'])) {
    require("../servidor/conexion.php");
    $clave = $_GET['id'];
    $query_delete = mysqli_query($conn, "DELETE FROM datosgen WHERE id = $clave");
    mysqli_close($conn);
    header("location: ../cliente/Cliente_Regis.php");
}
?>