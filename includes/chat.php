<? if($_POST['msg'] !=null)
{
	$msg=strip_tags($_POST['msg']);
	header ("Location: /chat.php");
}
$idchat = 1;
$msgs = $mysqli->query("SELECT * FROM `msg` WHERE `idchat`=".$idchat."");
while($msg = mysqli_fetch_assoc($msgs) )
{
	$msglist = "<span>".$msg['log']."</span>: ".$msg['msg']."</br>";
}
 ?>
<div id="chat">
<div id="cap">Чат</div>
<div id="log">
	<? echo $msglist; ?>
</div>
<form method="post"
action="/chat.php">
<div id="for">
	<input type="text" id="msg" name="msg" placeholder="Текст для повідомлення..."><input type="submit" id="submit" value="Відправити">
</div>
</form>
</div>