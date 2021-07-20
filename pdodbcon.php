
<?php
$host='localhost';
$user='root';
$password='';
$dbname='phppdodb';

try{
$dbcn='mysql:host='.$host.'; dbname='.$dbname;
$pdodbcon=new PDO($dbcn,$user,$password);

$pdodbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

//echo 'Database Connection';
}
catch(PDOException $error){
$error->getMessage();
echo 'Database Failed to Connect';
}

?>