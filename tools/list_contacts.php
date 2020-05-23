<?php
include('../tools/conexion.php');
    $query = "SELECT * FROM contacts ORDER BY contact_id;";
    $list = mysqli_query($conexion,$query) or die("Cannot execute query");
    $data = $list->fetch_all(PDO::FETCH_ASSOC);
    print json_encode($data,JSON_UNESCAPED_UNICODE);
mysqli_close($conexion);
?>