<? include_once('bd.php');
 
	$name = $_POST['login'];
	$password = $_POST['password'];
	if($_COOKIE["log"] != null) $name = $_COOKIE["log"];
	if($_COOKIE["pas"] != null) $password = $_COOKIE["pas"];
	if($name != null){
			$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$name."'");
				$arr = $arr->fetch_assoc();
			if(count($arr) > 0){  
				if($password == $arr['pas']){
					SetCookie("log", $name);
					SetCookie("pas", $arr['pas']);
					header("Location: game.php");
				}else
				echo "<div id='eror'>Пароль не правельний";
 					
		}else
		echo "<div id='eror'>Даний логін не існує</div>";
	}


 ?>

 <? include_once 'header.php'; ?> 
<div class="container">

 <div class="image"><img src="../assets/image/осада.png" alt="">

 	<div class="main_content">
 		<p>
 			Браузерная Онлайн Игра
 		</p>
 		<form action="log.php"
 		method="POST">
 		<input class="buttons" type="text" name="login" placeholder="Логин" required />
 		<input class="buttons" type="password" name="password" placeholder="Пароль" required />
 		<input type="submit" class="buttons" value="Ввійти"> 
 		</form>
 	</div>
 </div>
</div>
<? include_once 'footer.php'; ?>
	
