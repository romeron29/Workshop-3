<?php	
function getConnection(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "web2";
    $connect = mysqli_connect($host,$user,$pass);
    mysqli_select_db($connect,$database);
    return $connect;
};
?>