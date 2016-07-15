
<?php

$dsn='mysql:dbname=phpkiso;host=localhost';
$user='root';
$password='';
$dbn=new PDO($dsn,$user,$password);
$dbn->query('SET NAMES utf8');


$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);

print$nickname;
print'様<br/>';
print'ご意見ありがとうございました。<br>';
print'頂いたご意見「';
print$goiken;
print'」<br/>';
print$email;
print'にメールを送りましたのでご確認下さい。';

$sql='INSERT INTO anketo(nickname,email,goiken)VALUES("'.$nickname.'","'.$email.'","'.$goiken.'")';
$stmt=$dbn->prepare($sql);
$stmt->execute();

$dbn=null;


?>