<?php
include('../tools/conexion.php');

    $query = "SELECT product_id,name,description,photo,price FROM products WHERE status = 1 ORDER BY product_id;";
    $list = mysqli_query($conexion,$query) or die("Cannot execute query");
    $data = $list->fetch_all(PDO::FETCH_ASSOC);
    print json_encode($data,JSON_UNESCAPED_UNICODE);
    mysqli_close($conexion);
?>