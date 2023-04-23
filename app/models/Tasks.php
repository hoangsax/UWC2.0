<?php

class Tasks {
    use Model;
    protected $table = 'task';

    public function get_task(){
		global $db;
        $GLOBALS['db'] = $this->connect();
		$stmt = $db->query("SELECT * FROM task");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_task_w_id($id){
		global $db;
        $GLOBALS['db'] = $this->connect();
		$stmt = $db->query("SELECT * FROM task WHERE Staff_ID == '$id'");
		return $stmt;
    }

    public function add_employee($Staff_ID, $MCP_List, $Status, $Assign_Date, $Start,$End, $Vehicle_ID){
      global $db;
      $GLOBALS['db'] = $this->connect();
      //Check ID
      $stmt = $db->prepare("INSERT INTO task (ID, Staff_ID, MCP_List, Status, Assign_Date, Start,End, Vehicle_ID, Route_ID) VALUES (?, ?,?,?,?,?,?,?,?)");
      return $stmt->execute(array(NULL, $Staff_ID, $MCP_List, $Status, $Assign_Date, $Start,$End, $Vehicle_ID, NULL));
  }
}