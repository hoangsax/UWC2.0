<?php

class Home {
    use Controller;
	
    public function __construct(){
    }

    public function index(){  //login page
        if (isset($_SESSION['admin'])){
            redirect('admin/index');
        }
		if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user = new Users;
            $row = $user->get_employee_phone($_POST['phone']);
            //check passwork
            if($row){
                echo $row[0]['name'];
                if($row[0]['password'] == $_POST['password']){
                    echo $row[0]['password'];
                    if ($row[0]['type'] != "Admin"){
                        $_SESSION['user'] = $row[0];
                        redirect('user/index');
                    }
                    else {
                        $_SESSION['admin'] = $row[0];
                        redirect('admin/index');
                    }
                }
            }
            else{
                echo "<script type=\"text/javascript\">alert(\"Số điện thoại không hợp lệ\");</script>";
            }
        }
        $this->view('home/index');
    }


    public function signup() {
		$user = new Users;
		if($user->validate($_POST)){
			$user->insert($_POST);
			redirect('home/index');
		}
		$data['errors'] = $user->errors;
        $this->view('home/signup',$data);
    }
}