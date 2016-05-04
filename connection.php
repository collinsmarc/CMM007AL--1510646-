<!--simple connection script to be used throughout site-->

<?php
define ('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define ('DB_USERNAME','b4f37ec3582045');
define('DB_PASSWORD', 'd2510593');
define('DB_DATABASE', 'CMM007ALDB-1510646');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
