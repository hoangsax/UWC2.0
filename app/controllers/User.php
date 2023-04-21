<?php

class User {
    use Controller;
	
    public function __construct(){
    }

    public function index(){  //user page
        if (isset($_SESSION["user"])) {
            $data['username'] = empty($_SESSION['user']) ? 'user' :$_SESSION['user']->name;
            $data['type'] = empty($_SESSION['user']) ? 'user' :$_SESSION['user']->type;
            $this->view('user/index',$data);
        }

    }
    public function notify_tab(){
        $this->view('user/notify_tab');
    }
    public function profile_tab(){
        if (isset($_SESSION["user"])) {
            $data['username'] = empty($_SESSION['user']) ? 'user' :$_SESSION['user']->name;
            $data['address'] = empty($_SESSION['user']) ? 'user' :$_SESSION['user']->address;
            $data['phone'] = empty($_SESSION['user']) ? 'user' :$_SESSION['user']->phone;
            $data['email'] = empty($_SESSION['user']) ? 'user' :$_SESSION['user']->email;  
            $data['gender'] = empty($_SESSION['user']) ? 'user' :$_SESSION['user']->gender;  
            $this->view('user/profile_tab',$data);
        }
    }
    public function calendar_tab(){
        $this->view('user/calendar_tab');
    }
    
    public function logout() {
        if (isset($_SESSION["user"])) {
            unset($_SESSION['user']);
            redirect('home/index');
        }
    }
}