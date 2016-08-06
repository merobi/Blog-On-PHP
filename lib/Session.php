 <?php
 /**
 * Session class
 */
 class Session 
 {
 	
 	public static function init(){
 		session_start();
 	}
 	public static function set($key,$val){
       $_SESSION['$Key']=$val;  
 	}
 	public static function get($key){
 		if (isset($_SESSION['$Key'])) {
 			return $_SESSION ['$Key'];
 		}else{
 			return false;
 		}
 	}
 	
 	public static function checkSession(){
 		self::init();
 		if (self::get("login")==false) {
 			self::destroy();
 			header("Location:login.php");
 		}
 	}
 	public static function destroy(){
 		session_destroy();
 		header("Location:login.php");
 	}
 }
 ?>