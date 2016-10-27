<?php 
$host = 'localhost';
$password = '';
$username = 'root';

function testdb_connect ($host, $username, $password){
    $db = new PDO("mysql:host=$host;dbname=tehsil", $username, $password);
    return $db;
}

try {
    $db = testdb_connect ($host, $username, $password);
    // echo 'qosuldu';
} catch(PDOException $e) {
    echo $e->getMessage();
} 

?>


<!-- 
SELECT sagird.sinif_id, sinif.name FROM sagird LEFT JOIN sinif ON sagird.sinif_id=sinif.name ORDER BY sagird.sinif_id -->