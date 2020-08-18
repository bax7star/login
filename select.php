<?php
mb_internal_encoding("utf8");

//DB接続
$pdo = new PDO("mysql:dbname=Lesson01;host=localhost;","root","root");

//プリペアードステートメントでSQL文の型を作る
$stmt = $pdo->prepare("select * from login_mypage where mai; = ? && password = ?");

//bindValueを使用し、実際にwhere句に何を入れるかを記述
$stmt->bindValue(1,$_POST["mail"]);
$stmt->bindValue(2,$_POST["password"]);

//executeでクエリを実行。
$stmt->execute();
$pdo = NULL;

while($row = $stmt->fetch()){
	echo $row['mail'];
	echo $row['password'];
}
?>