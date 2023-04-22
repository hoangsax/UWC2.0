<?php

class Users {
    use Model;
    protected $table = 'users';

    protected $allowedColumns = [
        'email',
        'password'
    ];
    public function get() {
        return $this->select();
    }
    public function validate($data){
        $this->errors = [];

        if(empty($data['phone'])){
            $this->errors['phone'] = "Yêu cầu nhập số điện thoại!";
        }

        if(empty($data['password'])){
            $this->errors['password'] = "Yêu cầu nhập mật khẩu!";
        }

        if(empty($data['email'])){
            $this->errors['email'] = "Yêu cầu nhập email!";
        }

        if(empty($data['address'])){
            $this->errors['address'] = "Yêu cầu nhập địa chỉ!";
        }

        if(empty($this->errors)){
            return true;
        }
        
        return false;
    }
    public function data_table() { //get table employee info
        $sql = "SELECT * FROM users";
		$result = $this->query($sql);
		return $result; 

    }
    public function get_employee(){
		global $db;
        $GLOBALS['db'] = $this->connect();
		$stmt = $db->query("SELECT * FROM users");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add_employee($id, $name, $email, $phone, $address, $gender,$type){
        global $db;
        $GLOBALS['db'] = $this->connect();
        //Check ID
        $stmt = $db->query("SELECT * FROM users WHERE id = '$id'");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result)  return 1;
        //Check phone
        $stmt = $db->query("SELECT * FROM users WHERE phone = '$phone'");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result)  return 2;
        //Check email
        $stmt = $db->query("SELECT * FROM users WHERE email = '$email'");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result)  return 3;
        $stmt = $db->prepare("INSERT INTO users (id, name, email, phone, address, gender,type) VALUES (?, ?,?,?,?,?,?)");
        $stmt->execute(array($id, $name, $email, $phone, $address, $gender,$type));
        // $stmt = $db->query("INSERT INTO users (id, name, username, birthday, address, email, phone, gender, password, type) VALUES (NULL, 'Cong Hoang', '', '0000-00-00', '12312312', '123@cc.cc', '01020304051', 'male', '', 'Janitor')");
        
        return 0;
    }
    // public function edit_employee($id, $name, $email, $phone, $address, $gender,$type){
	// 	global $db;
    //     $GLOBALS['db'] = $this->connect();
    //     //Check ID
    //     $stmt = $db->query("SELECT * FROM users WHERE id = '$id'");
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     if ($result)  return 1;
    //     //Check phone
    //     $stmt = $db->query("SELECT * FROM users WHERE phone = '$phone'");
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     if ($result)  return 2;
    //     //Check email
    //     $stmt = $db->query("SELECT * FROM users WHERE email = '$email'");
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     if ($result)  return 3;
	// 	$stmt = $db->prepare("UPDATE users SET name = ?, email = ?, phone =?, address =?, gender =?, type =? WHERE id = ? ");
	// 	$stmt->execute(array($name, $email, $phone, $address, $gender,$type, $id));
	// 	return 0;
    // }
    public function delete_employee($id){
        global $db;
        $stmt = $db->prepare("DELETE FROM users WHERE id = ? ");
        $stmt->execute(array($id));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}