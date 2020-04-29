<?php
class Sql_commands extends CI_Model 
{
   function __construct()
   {
	   
   }

	function check_login_detail($username, $password)
	{
	// $query= $this->db->query("select * from webuser where username="."'".$username."'"." and password="."'".$password."'");
	$sql = "select * from webuser where username="."'".$username."'"." and pass_word="."'".$password."'";
	$result = $this->db->query($sql);
	
	// if ($result->num_rows() > 0) {
	// 	return $result;
	// }
	// else {
	// 	return 0;
	// }
	return $result;
	}

	function add_user($username, $password, $address, $email, $phone_no){
		// check if values are legit in controller
		$sql = "INSERT INTO 'webuser' ('USER_ID', 'USERNAME', 
		'PASS_WORD', 'ADDRESS', 'EMAIL', 'PHONE_NO', 'BALANCE') 
		VALUES (NULL,".$username.", ".$password.", ".$address.", ".$email.", ".$phone_no.", "."0.00)";
		
	}

	function update_user($username, $password, $address, $email, $phone_no){
		// check if values are legit in controller
		$sql = "UPDATE 'webuser' SET 'pass_word' = ".$password.", "."'address' = ".$address.", "."'email' = ".$email.", "."'phone_no' = ".$phone_no.
		"WHERE 'username' = ".$username;
	}
	
} 

?>