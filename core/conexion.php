<?php
function conexion(){
    $mysql = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME_DB);
    if (mysqli_connect_error()) {
        return false;
    }
    return $mysql;
}