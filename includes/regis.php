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
	if($_COOKIE["log"] != null && $_COOKIE["pas"] != null) {
		header("Location: game.php");
	}
}
 ?>
<? include_once 'header.php'; ?> 
<section class="container">
    <div class="login">
      <h1>Registration</h1>
      <form method="post" action="log.php">
        <p>
      	<input type="text" name="login" value="" placeholder="Username" required></p>
        <p><input type="password" name="password" value="" placeholder="Password" required></p>
        <p><input type="password" name="password1" value="" placeholder="Repеat password" required></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
  </section>	
<? include_once 'footer.php'; ?>
