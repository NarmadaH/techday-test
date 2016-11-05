<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 11/1/2016
 * Time: 3:51 AM
 */

include_once 'DBConnection.php';

function transition(){
    $conn=DBConnection::get_database_connection();
    $stmt = "SELECT * FROM `employees` WHERE is_present=1 order by updated_at ASC limit 10 ";
    $result = $conn->query($stmt);
    $employees = $result->fetch_all(MYSQLI_ASSOC);

    header('Content-Type', 'application/json');
    echo json_encode($employees);

}