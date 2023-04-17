<?php

class Users {
    use Model;
    protected $table = 'employee';
    public function get() {
        return $this->select();
    }

    public function check_user($email) {
        $sql = "SELECT * FROM employee WHERE Email = '$email'";
		$result = $this->query($sql);
		return $result;   
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM employee WHERE Email = '$email' and Password = '$password'";
		$result = $this->query($sql);
		return $result;    
    }

    public function signup() {
        // $email, $password, $phone, $address, $fullname
    }
    public function changepassword(){
        // $email, $newPassword
    }

    public function addUser($ID, $name, $CMND, $email, $tel, $password, $address, $gender, $role)
    {
        $sql = "select * from User where email = '$email'";
        $userItem = $this->executeResult($sql, true);
        if ($userItem != null) {
            return false;
        }
        $sql = "insert into user(ID, name, CMND, email, tel, password, address, gender, role) values ('$ID', '$name', '$CMND', '$email', '$tel', '$password', '$address', '$gender', '$role')";
        $this->execute($sql);
        return true;
    }
}