<?php

class Admin {
    use Controller;
    public function __construct(){
    }
    public function index() {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['logout_btn']))
                $this->logout();
        }
        if (isset($_SESSION["admin"])) {
            $data['admin'] = empty($_SESSION['admin']) ? 'admin' :$_SESSION['admin']['name'];
            if(isset($_POST['btn_del_employee'])) {
                $this->modal_delete_employee();
            }
            if(isset($_POST['detail_Task']) || isset($_POST['add_task'])){
                if (isset($_POST['add_task'])){
                    $this->modal_add_task();
                }
                $this->detailTask();
            }
            else $this->view('admin/index',$data);
        }
        else{
            redirect('home/index');
        }
    }

    public function data_table() {      //Select employee info
        $user= new Users;
        $task = new Tasks;
        $data['allUser']=$user->get_employee();
        $data['allTask'] = $task->get_task();
        $this->view('admin/data_table',$data);
    }
    public function detailTask() {  
        $user= new Users;
        $task = new Tasks;
        $mcp = new MCPs;
        $veh = new Vehicles;
        $data['allUser']=$user->get_employee();
        $data['allTask'] = $task->get_task();
        $data['allMCP'] = $mcp->get_mcp();
        $data['allVehicle'] = $veh->get_vehicle();
        $this->view('admin/detailTask', $data);

    }
    public function modal_add_employee($data) {
        if (isset($_SESSION["admin"])) {
            $check = true;
            $user = new Users;
            if(isset($_POST['btn_add_employee'])){
                $check = true;
                $id = $_POST['ID'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $gender = $_POST['gender'];
                $type = $_POST['type'];
                $result = $user->add_employee($id, $name, $email, $phone, $address, $gender,$type);
                if($result == 1)
                    echo "<script type=\"text/javascript\">alert(\"ID đã tồn tại\");</script>";
                elseif($result == 2)
                    echo "<script type=\"text/javascript\">alert(\"Số điện thoại đã tồn tại\");</script>";
                elseif($result == 3)
                    echo "<script type=\"text/javascript\">alert(\"Email đã tồn tại\");</script>";
                else
                    $this->reload_page();
            }
        }
        $this->view('admin/modal_add_employee',$data);
    }
    public function modal_delete_employee() {
        $user = new Users;
        $id = $_POST['btn_del_employee'];
        $user->delete_employee($id);   
    }
    // public function modal_edit_employee() {  
    //     $id = $_POST['edit_ID'];
    //     $name = $_POST['edit_name'];
    //     $email = $_POST['edit_email'];
    //     $phone = $_POST['edit_phone'];
    //     $address = $_POST['edit_address'];
    //     $gender = $_POST['edit_gender'];
    //     $type = $_POST['edit_type'];
    //     $result = $user->edit_employee($id, $name, $email, $phone, $address, $gender,$type);
    //     if($result == 1)
    //         echo "<script type=\"text/javascript\">alert(\"ID đã tồn tại\");</script>";
    //     elseif($result == 2)
    //         echo "<script type=\"text/javascript\">alert(\"Số điện thoại đã tồn tại\");</script>";
    //     elseif($result == 3)
    //         echo "<script type=\"text/javascript\">alert(\"Email đã tồn tại\");</script>";
    // }
    public function modal_delete_task() {  

    }
    public function modal_add_task() {  
        $task = new Tasks;
        if(isset($_POST['add_task'])){
            $check = true;
            $Assign_Date = $_POST['date'];
            $Vehicle_ID = $_POST['idvehicle'];
            $Start = $_POST['time'];
            $End = $_POST['time_end'];
            $MCP_List = $_POST['listMCP'];
            $Staff_ID = $_POST['add_task'];
            $result = $task->add_employee($Staff_ID, $MCP_List, "Pending", $Assign_Date, $Start,$End, $Vehicle_ID);
        }
    }

    public function modal_edit_task() {  
        $this->view('admin/modal_edit_task');
    }
    public function logout() {
        if (isset($_SESSION["admin"])) {
            unset($_SESSION["admin"]);
            redirect('home/index');
        }
    }
}    