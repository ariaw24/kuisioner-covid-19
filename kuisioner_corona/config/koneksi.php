<?php 
$host="localhost";
$user='root';
$pass='';
$database='survey_corona';

$konek = mysqli_connect($host, $user, $pass);

mysqli_select_db($konek, $database);

?>