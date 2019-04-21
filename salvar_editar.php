<?php
$nome = $_GET['nome'];
$data = $_GET['data'];
$salario = $_GET['salario'];
$id = $_GET['id'];

$dsn = 'mysql:dbname=aulaphp11;host=127.0.0.1';
$user = 'root'; 
$password = '';


try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$count = $dbh->exec("update exemplo1 set
                nome='$nome',  
                data=$data
                salario=$salario 
                where id=$id ");

echo "<p>$count registro foi alterado</p>";
echo "<br><br><a href=index.php>Voltar</a>  ";
?>
