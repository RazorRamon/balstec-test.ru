<?php
session_start();
if($_POST['capcha'] != $_SESSION['capcha']) {
	//echo "Текст с картинки введен не верно!";
	$_SESSION['status_captha']=1;
	header('Location: http://balstec.diviertest.tmweb.ru/feedback/'); 
	exit;
}
else {
	$_SESSION['status_captha']=2;
	if ((isset($_POST['event']))&&($_POST['event']=="sviaz")) {
		$name=$_POST['name'];
		$phone=$_POST['tel'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		
		if(isset($_POST["vitrina"]) && $_POST["vitrina"]=="1"){$vitrina="Выбрано!";}
		else $vitrina="-";

		if(isset($_POST["prilavok"]) && $_POST["prilavok"]=="1"){$prilavok="Выбрано!";}
		else $prilavok="-";

		if(isset($_POST["kiosk"]) && $_POST["kiosk"]=="1"){$kiosk="Выбрано!";}
		else $kiosk="-";
		
		if(isset($_POST["pavilon"]) && $_POST["pavilon"]=="1"){$pavilon="Выбрано!";}
		else $pavilon="-";
		
		if(isset($_POST["peregorodka"]) && $_POST["peregorodka"]=="1"){$peregorodka="Выбрано!";}
		else $peregorodka="-";
		
		if(isset($_POST["stellag"]) && $_POST["stellag"]=="1"){$stellag="Выбрано!";}
		else $stellag="-";
		
		if(isset($_POST["joker"]) && $_POST["joker"]=="1"){$joker="Выбрано!";}
		else $joker="-";
		
		if(isset($_POST["kasskab"]) && $_POST["kasskab"]=="1"){$kasskab="Выбрано!";}
		else $kasskab="-";

		$mailheaders = "Content-Type: text/html; charset=utf-8\r\n";
		$mailheaders.= "From: ".$name." <".$email.">\r\n";
		$mailheaders.= "Reply-To: ".$name." <".$email.">\r\n";
		$mailheaders.= "X-Mailer: PHP/".phpversion()."";
		$subject = "Поступило новое сообщение из формы обратной связи balstec.ru";
		$msg="<span style=\"font-size: 12px; color: #333333; font-family: Tahoma\"><b>Имя:</b> ".$name."<br><b>E-mail:</b> ".$email."<br><b>Телефон:</b> ".$phone."<br><br><b>Сообщение:</b><br>".$message."<br><br><b>Витрина:</b> ".$vitrina."<br><br><b>Прилавок:</b> ".$prilavok."<br><br><b>Киоск:</b> ".$kiosk."<br><br><b>Павильон:</b> ".$pavilon."<br><br><b>Перегородка:</b> ".$peregorodka."<br><br><b>Стеллаж:</b> ".$stellag."<br><br><b>Конструкция из струб системы Джокер:</b> ".$joker."<br><br><b>Кассовая кабина:</b> ".$kasskab."</span>";
		mail("loky_vgu@mail.ru", $subject, $msg, $mailheaders);
		header('Location: http://balstec.diviertest.tmweb.ru/feedback/'); 
		exit;
	}
	echo"Access denied!";
} ?>