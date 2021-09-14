<?php
// DATABASE INFO
$db_server_name = "localhost";
$db_user_name = "username";
$db_password ="password";
$db_name = "db";
$db_table_name = "tabble";
// Connect
$mysqli = new mysqli($db_server_name, $db_user_name, $db_password, $db_name);

// BASIC SQL
$select = "SELECT * FROM $db_table_name";
$result = mysqli_query($mysqli, $select);
$row = mysqli_fetch_assoc($result);

?>