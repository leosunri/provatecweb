<?php
$nome = $_GET['nome'];
$data = $_GET['data'];
$salario = $_GET['salario'];

$dsn = 'mysql:dbname=aulaphp11;host=127.0.0.1';
$user = 'root'; 
$password = '';

try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}


$count = $dbh->exec("insert into exemplo1(nome, data, salario) 
                values('$nome', '$data','$salario') ");
echo "<p>$count registro foi incluído</p>";
echo "<br><br><a href=index.php>Voltar</a>  ";
?>
