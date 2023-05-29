<?php 
include('database.php');
//session_start();
class SessionManager {

	
	
	
	public static function checklogin0($connection, $username, $password){

        session_destroy();
        $values =[
			'loginname'=>$username,
			'passweb'=>$password,
		];

        $sql = "select * from opduser where loginname = :loginname and passweb = upper(MD5(:passweb)) and (account_disable is null or account_disable <> 'Y') ";

		$stmt = $connection->prepare($sql);
		$stmt->execute($values);

		if($row = $stmt->fetch()){
			//set session
			//session_start();
			$_SESSION['loginname']=$row['loginname'];
			$_SESSION['name']=$row['name'];
			$_SESSION['doctorcode']=$row['doctorcode'];
			$_SESSION['groupname']=$row['groupname'];
			$_SESSION['accessright']=$row['accessright'];
			$_SESSION['entryposition']=$row['entryposition'];
			return true;
		} else {
			return false;
		}

    }

public function testlogin() {

	return true;

}

    public function checkLogin() {
       //session_start();
        if (!isset($_SESSION['username']) /*&& $_SESSION['loggedIn'] == true*/) {
          return false;
		  header("Location: login.php");
		  exit;
        } else {
          return true;
		  header("Location: index.php");
		  exit;
        }
      }

	  public  function checkLoginSession(){
		return isset($_SESSION['username0']);
	}

}




?>