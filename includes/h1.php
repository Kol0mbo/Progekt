 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wars of Heroes</title>
	<link rel="stylesheet" href="../assets/css/s1.css">
	<link rel="stylesheet" href="../assets/css/style1.css">
</head>
<body>
<div class="header">
<div class="round">
	<?
echo $arr["level"];	
?>	
</div>
<?
echo $arr["log"];
?>
<img src="../assets/image/Без-имени-1.png" style="margin-left:10px; ">
<?
if($arr["power_fiz"]=="0")
{
	echo $arr["power_mag"];
}
else
{
	echo $arr["power_fiz"];
}
 ?>
	<a href="/?1" name="link1" style="margin-left: 89%; text-decoration: none; ">Вихід</a>
	 <?
        	if($_SERVER['QUERY_STRING'] == 1) {
        	 setcookie("log", " ");	
  			 setcookie("pas", " ");
  			 include 'log.php';
        }
            ?> 
   </div>
<div class="container">
<div class='nav'>
  <ul id="list">
    <li><a href='bag.php'>Рюкзак</a></li>
    <li><a href='map.php'>Карта</a></li>
  
    <li><a href='top.php'>Топ гравців</a></li>
    <li><a href='game.php'>Локація</a></li>
  </ul>
</div>
</div>
  <div class="container">


