<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'api');
define('DB_USERNAME', 'sammy');
define('DB_PASSWORD', 'password');
define('ERROR_MESSAGE', 'Oops, we ran into a problem here :(');

try {
$odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
}
catch( PDOException $Exception ) {
	error_log('ERROR: '.$Exception->getMessage().' - '.$_SERVER['REQUEST_URI'].' at '.date('l jS \of F, Y, h:i:s A')."\n", 3, 'error.log');
	die(ERROR_MESSAGE);
}

function error($string)
{
return '<div class="alert alert-danger alert-dismissable"></button><strong>ERROR:</strong> '.$string.'</div>';
}

function success($string)
{
return '<div class="alert alert-success alert-dismissable"></button><strong>SUCCESS:</strong> '.$string.'</div>';
}
?>
