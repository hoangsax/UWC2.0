<?php
class BackOfficer extends Controller
{

    // public $userModel;

    // public function __construct()
    // {
    //     $this->userModel = $this->model("Users");
    // }
    // public function GetPage()
    // {
    //     $allUser = $this->userModel->getAllUser();
    //     $this->view("user/userAdmin", [
    //         "allUser" => $allUser
    //     ]);
    // }

    public function getAllUser()
    {
        $sql = "select User.*, Role.name as role_name from User left join Role on User.role_id = Role.id where User.deleted = 0";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function AddUser()
    {
        if(isset($_POST))
        {
            $ID = $_GET['ID'];
            $name = $_GET['name'];
            $CMND = $_GET['CMND'];
            $email = $_GET['email'];
            $tel = $_GET['tel'];
            $password = $_GET['password'];
            $address = $_GET['address'];
            $gender = $_GET['gender'];
            $role = $_GET['role'];
        }
        
    }
}