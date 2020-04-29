<?php
defined('BASEPATH') or exit('No direct script access allowed');
// include('models/Sql_commands.php');

class index extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Sql_commands');
	}


	public function index()
	{
		$data['login_failure'] = 0;
		$this->load->view('login');
	}

	public function schedule($username)
	{
		$this->load->view('schedule');
	}

	public function verify_login()
	{

		$username = $_POST['username'];
		$password = $_POST['password'];

		$myDB =  new Sql_commands();
		$query = $this->Sql_commands->check_login_detail($username, $password);

		if ($query->num_rows() > 0) {

			echo ("entered if");
			foreach ($query->result_array() as $row)

				// echo ("=================")
				// echo ("username is : " . $row['USERNAME']);
				// echo ("=================");


				$data['login_failure'] = 0;
			set_cookie($username, $password, 300);
			$data['cookie'] = $this->input->cookie($username, true);
			// $data['loggedIn'] = $this->input->cookie(true, true);
			echo ("Cookie: " . $data['cookie']);

			$data['login_failure'] = true;
			$this->load->view('schedule', $data);
			$this->load->view('sidebar');

			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			echo ("session = " . $_SESSION['username']);
		} else {
			// Server-side validation is required (e.g., informing the user if the username is not registered in the database or if the password is incorrect).
			$data['login_failure'] = 1;
			$this->load->view('login', $data);
		}
	}

	public function register_login()
	{
		$this->load->view('register');
	}

	public function forgot_login()
	{
		$this->load->view('reset_password');
	}

	public function create_event()
	{
		echo "create event page";
	}

	public function validation()
	{	
		$value = $_POST['username'];
		$formfield = $_POST['formfield'];
		// Check Valid or Invalid user name when user enters user name in username input field.
		if ($formfield == "username") {
			if (strlen($value) < 4) {
				echo "Username must be 3+ letters";
			} else {
				echo "<span>Valid</span>";
			}
		}
		// Check Valid or Invalid password when user enters password in password input field.
		if ($formfield == "password") {
			if (strlen($value) < 6) {
				echo "Password too short";
			} else {
				echo "<span>Strong</span>";
			}
		}
		// Check Valid or Invalid email when user enters email in email input field.
		if ($formfield == "email") {
			if (!preg_match("/([w-]+@[w-]+.[w-]+)/", $value)) {
				echo "Invalid email";
			} else {
				echo "<span>Valid</span>";
			}
		}
		// Check Valid or Invalid address when user enters address in address input field.
		if ($formfield == "address") {
			if (strlen($value) == 0) {
				echo "Invalid address";
			} else {
				echo "<span>Valid</span>";
			}
		}
		// Check Valid or Invalid phone no when user enters phone no in phone no input field.
		if ($formfield == "phone_no") {
			if (strlen($value) == 0) {
				echo "Invalid phone_no";
			} else {
				echo "<span>Valid</span>";
			}
		}
	}

	public function validation1()
	{	
		$value = $_GET['query'];
		$formfield = $_GET['field'];
		// Check Valid or Invalid user name when user enters user name in username input field.
		if ($formfield == "username") {
			if (strlen($value) < 4) {
				echo "Username must be 3+ letters";
			} else {
				echo "<span>Valid</span>";
			}
		}
		// Check Valid or Invalid password when user enters password in password input field.
		if ($formfield == "password") {
			if (strlen($value) < 6) {
				echo "Password too short";
			} else {
				echo "<span>Strong</span>";
			}
		}
		// Check Valid or Invalid email when user enters email in email input field.
		if ($formfield == "email") {
			if (!preg_match("/([w-]+@[w-]+.[w-]+)/", $value)) {
				echo "Invalid email";
			} else {
				echo "<span>Valid</span>";
			}
		}
		// Check Valid or Invalid address when user enters address in address input field.
		if ($formfield == "address") {
			if (strlen($value) == 0) {
				echo "Invalid address";
			} else {
				echo "<span>Valid</span>";
			}
		}
		// Check Valid or Invalid phone no when user enters phone no in phone no input field.
		if ($formfield == "phone_no") {
			if (strlen($value) == 0) {
				echo "Invalid phone_no";
			} else {
				echo "<span>Valid</span>";
			}
		}
	}
}
