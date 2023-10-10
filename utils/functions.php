<?php
include('connection.php');
/**
 *  Gets the provinces from the database
 */
function getProvinces() {
  $conn = getConnection();
  $provincesArray = array();
 
  $sql = "select * from province;";
  
  $provinces = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($provinces)){
    $provincesArray[$row['id_provincia']] = $row['nombre_provincia'];
  };
  mysqli_free_result($provinces);
  mysqli_close($conn);
  return $provincesArray;
};

/*
Get users from database 
*/
function getUsers() {
  $conn = getConnection();
  $provincesArray = array();
 
  $sql = "select id_user, firstname, lastname, email, role,  nombre_provincia from user 
  inner join province 
  on user.province = province.id_provincia;";
  
  $users = mysqli_query($conn, $sql);
  mysqli_close($conn);
  return $users;
};

/**
 * Saves an specific user into the database
 */
function saveUser($user){

  $conn = getConnection();
  $firstName = $user['firstName'];
  $lastName = $user['lastName'];
  $username = $user['email'];
  $province = $user['province_id'];
  $password = $user['password'];

  $sql = "INSERT INTO user (firstname, lastname, email, province, user_password) VALUES('$firstName', '$lastName', '$username','$province','$password')";

  mysqli_query($conn, $sql);
  return true;
};


?>