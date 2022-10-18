<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * from member where username = ?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();

if(!empty($row)) : ?>
username : <?=$row["username"]?> <br>
name : <?=$row["name"]?> <br>
address : <?=$row["address"]?> <br>
mobile : <?=$row["mobile"]?> <br>
email : <?=$row["email"]?> <br>
<?php endif ?>