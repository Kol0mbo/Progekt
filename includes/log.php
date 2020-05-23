 <? include_once 'header.php'; ?> 
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
	}
 ?>
<section class="container">
    <div class="login">
      <h1>Log</h1>
      <form method="post" action="log.php">
        <p>
      	<input type="text" name="login" value="" placeholder="Username" required></p>
      	 <? if(count($arr) > 0)
      	 {
      	 	echo "Даний логін не існує" ;
      	 }
      	 ?>
        <p>
        <input type="password" name="password" value="" placeholder="Password" required></p>
        <? if($password != $arr['pas'])
        {
		echo "Пароль не правельний" ;
    	}
        ?>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
  </section>			
<? include_once 'footer.php'; ?>
	
