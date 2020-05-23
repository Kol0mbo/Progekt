<? include_once('bd.php');

	$name = $_POST['login'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	if (isset($_POST['v'])){
    $Sex = $_POST['v'];
    if($Sex=="v1")
    {
    	if($name != null){
		if($password == $password1){
			$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$name."'");
				$arr = $arr->fetch_array();
			if(count($arr)<= 0){
				$sql = "INSERT INTO base(`id`,`log`, `pas`, `level`, `hp`, `mana`, `gold`, `silver`,  `power_fiz`, `power_mag`, `defend`, `speed`, `ex`, `stat`)    VALUES (NULL, '".$name."', '".$password."', '1', '215', '80', '0',  '100', '0', '12', '3', '15', '0', 'mag')";
				$mysqli->query($sql);
			}
			else{
				echo "<div id='eror'>Даний логін зайнятий</div>";
			}
		}else{
		echo "<div id='eror'> Паролі не співпадають</div>";
	}
    	
    }
}
    if($Sex=="v2")
    {
    	if($name != null){
		if($password == $password1){
			$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$name."'");
				$arr = $arr->fetch_array();
			if(count($arr)<= 0){
				$sql = "INSERT INTO base(`id`,`log`, `pas`, `level`, `hp`, `mana`, `gold`, `silver`,  `power_fiz`, `power_mag`, `defend`, `speed`, `ex`, `stat`)    VALUES (NULL, '".$name."', '".$password."', '1', '255', '50', '0', '100', '5', '0', '10', '15', '0', 'fighter')";
				$mysqli->query($sql);
			}
			else{
				echo "<div id='eror'>Даний логін зайнятий</div>";
			}
		}else{
		echo "<div id='eror'> Паролі не співпадають</div>";
	}
    	}
    }
    if($Sex=="v3")
    {
    	if($name != null){
		if($password == $password1){
			$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$name."'");
				$arr = $arr->fetch_array();
			if(count($arr)<= 0){
				$sql = "INSERT INTO base(`id`,`log`, `pas`, `level`, `hp`, `mana`, `gold`, `silver`,  `power_fiz`, `power_mag`, `defend`, `speed`, `ex`, `stat`)    VALUES (NULL, '".$name."', '".$password."', '1', '230', '63', '0',  '100', '8', '0', '3', '15', '0', 'mm')";
				$mysqli->query($sql);
			}
			else{
				echo "<div id='eror'>Даний логін зайнятий</div>";
			}
		}else{
		echo "<div id='eror'> Паролі не співпадають</div>";
	}
    	}
    }
    if($Sex=="v4")
    {
    	if($name != null){
		if($password == $password1){
			$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$name."'");
				$arr = $arr->fetch_array();
			if(count($arr)<= 0){
				$sql = "INSERT INTO base(`id`,`log`, `pas`, `level`, `hp`, `mana`, `gold`, `silver`,  `power_fiz`, `power_mag`, `defend`, `speed`, `ex`, `stat`)    VALUES (NULL, '".$name."', '".$password."', '1', '205', '70',  '0', '100', '12', '0', '2', '15', '0', 'assasin')";
				$mysqli->query($sql);
			}
			else{
				echo "<div id='eror'>Даний логін зайнятий</div>";
			}
		}else{
		echo "<div id='eror'> Паролі не співпадають</div>";
	}
    }
}
	if($_COOKIE["log"] != null && $_COOKIE["pas"] != null) {
		header("Location: game.php");
	}
}
	
 ?>
<? include_once 'header.php'; ?> 
<div class="container">

 <div class="image"><img src="../assets/image/осада.png" alt="">

 	<div class="main_content">
 		<p>
 			Браузерная Онлайн Игра
 		</p>

 		<form action="regis.php"
 		method="POST">
 		<input class="buttons" type="text" name="login" placeholder="Логин" required />
 		<input class="buttons" type="password" name="password" placeholder="Пароль" required />
 		<input class="buttons" type="password" name="password1" placeholder="Повторіть пароль" required /> 	
 		
 		<p style="text-align: center">
 			Виберіль стиль ігри
 		</p>	
 		<div class="rasa"><input name="v" type="radio" value="v1">Чаклун
 		<img src="../assets/image/harit-statja.gif" alt=""></div>
        <div class="rasa"><input name="v" type="radio" value="v2">Рицарь
        <img src="../assets/image/танк.gif" alt=""></div>        
        <div class="rasa"><input name="v" type="radio" value="v3">Стрілок
        <img src="../assets/image/мiz.gif" alt=""></div>
        <div class="rasa"><input name="v" type="radio" value="v4">Вбивця
        <img src="../assets/image/alukar-n.gif" alt=""></div>
 		<input type="submit" class="buttons" value="Зареєстуватися">
 	</form>
 	</div>
 </div>
</div>
<? include_once 'footer.php'; ?>
