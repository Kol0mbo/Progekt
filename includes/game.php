<? 
include_once("bd.php");
if($_COOKIE["log"] == null || $_COOKIE["pas"] == null) {
		header("Location: log.php");
	}
	if($nick != null){
			$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$nick."'");
				$arr = $arr->fetch_assoc();
			if(count($arr) > 0){  
				if($password == $arr[`pas`]){
					SetCookie("log", $nick);
					SetCookie("pas", $arr[`pas`]);
					header("Location: game.php");
				}else
				echo "<div id='eror'>Пароль не правельний";
 					
		}else
		echo "<div id='eror'>Даний логін не існує</div>";
	}

$nick = $_COOKIE['log'];
$pass = $_COOKIE['pas'];
$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$nick."'");
$arr = $arr->fetch_assoc();

 if($_POST['msg'] !=null)
{
	$msg=strip_tags($_POST['msg']);
	$sql = "INSERT INTO `msg` (`id`, `name`, `idname`, `msg`, `idchat`) VALUES (NULL, '".$nick."', '".$arr['id']."', '".$msg."', '".$idchat."')";
	header ("Location: /game.php");
}
$idchat = 1;
$msgs = $mysqli->query("SELECT * FROM `msg` WHERE `idchat`=".$idchat);
while($msg = mysqli_fetch_assoc($msgs) )
{
	$msglist .= "<span>".$msg['name']."</span>: ".$msg['msg']."</br>";
}
 
?>
<? include_once 'h1.php'; ?> 
<div style="height: 430px"><img src="../assets/image/1.png" alt="" align="left">
	<h1 style="text-indent: -300px; padding-top: 50px; size: 20px;" > <a href="maz.php" style="text-decoration: none; color: white">>Магазин</a> </h1>
</div>
<div id="chat">
<div id="cap">Чат</div>
<div id="log">
	<? echo $msglist; ?>
</div>
<form method="post"
action="/game.php">
<div id="for">
	<input type="text" id="msg" name="msg" placeholder="Текст для повідомлення..."><input type="submit" id="submit" value="Відправити">
</div>
</form>
</div>
 </div>
<? include_once 'footer.php'; ?>