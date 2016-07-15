<?php 
//http://localhost/anketo/index.php
//$=$_POST[''];

$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];


if($nickname=='')
	{
	print'ニックネームが入力されてません。<br>';
	}
else
	{
		print'ようこそ、';
		print$nickname;
		print'様';
		print'<br/>';
	}

if($email=='')
	{
	print'メアドがありません。<br>';
	}
else
	{
		print'メールアドレス:';
		print$email;
		print'<br/>';
	}

if($goiken=='')
	{
	print'ご意見が入力されてません。<br><br>';
	}
else
	{
		print'ご意見「';
		print$goiken;
		print'」<br>';
	}


$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);



			
if($nickname==''|| $email==''|| $goiken=='')
{
	print'<form>';
	print'<input type="button" onclick="history.back()" value="戻る">';
	print'</form>';
}

else
{
	print'<form method="post" action="thanks.php">';
	print'<input name="nickname" type="hidenn" value="'.$nickname.'"></br>';
	print'<input name="email" type="hidenn" value="'.$email.'"></br>';
	print'<input name="goiken" type="hidenn" value="'.$goiken.'"></br>';
	print'<input type="button" onclick="history.back()" 
	value="戻る">'; 
	print'<input type="submit" value="OK">';
	print'</from>';
}



?>
