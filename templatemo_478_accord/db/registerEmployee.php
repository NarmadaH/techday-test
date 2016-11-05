<?php
/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 10/31/2016
 * Time: 11:35 PM
 */


include_once 'DBConnection.php';

function searchName(){
    $conn=DBConnection::get_database_connection();
    $username = $_GET['username'];
    $ext = "@millenniumit.com";
    $email = $username.$ext;
    $stmt = "SELECT * FROM `employees` WHERE email = '$email' ";
    $result = $conn->query($stmt);
    $user_details = $result->fetch_all(MYSQLI_ASSOC);

    header('Content-Type', 'application/json');
    echo json_encode($user_details);
    
}

function updateEntrance(){
    $conn=DBConnection::get_database_connection();
    $username = $_GET['username'];
    $ext = "@millenniumit.com";
    $email = $username.$ext;
    
    $stmt = "UPDATE `employees` SET is_present =1 WHERE email = 'achinih@millenniumit.com'";
    $result = $conn->query($stmt);
    
    header('Content-Type', 'application/json');
    echo json_encode('sucess');


}