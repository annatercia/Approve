<?php

$host= 'localhost';
$db = 'argos_usual';
$user = 'postgres';
$password = 'root'; 


	$dsn = "pgsql:host=$host;port=5432;dbname=$db;";
	
	// make a database connection
	$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($pdo) {
		//echo "<h6 class='label label-info'>Connected to the $db database successfully!</h6>";
	}


/*class Conexao extends PDO{    
    var $conexao;
    function __construct() {
        $this->conexao = new PDO('pgsql:host=$host;port=5432;dbname=$db;charset=utf8', 'postgres', 'root');
        parent::__construct('pgsql:host=$host;port=5432;dbname=$db;charset=utf8', 'postgres', 'root');
    }
}
*/


?>
