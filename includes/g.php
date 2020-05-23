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
					header("Location: g.php");
				}else
				echo "<div id='eror'>Пароль не правельний";
 					
		}else
		echo "<div id='eror'>Даний логін не існує</div>";
	}

$nick = $_COOKIE['log'];
$pass = $_COOKIE['pas'];
$arr = $mysqli->query("SELECT * FROM `base` WHERE `log`='".$nick."'");
$arr = $arr->fetch_assoc();
?>
<? include_once"h1.php"?>
<? include_once"footer.php"?>