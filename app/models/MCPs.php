<?php

class MCPs {
    use Model;
    protected $table = 'mcp';

    public function get_mcp(){
		global $db;
        $GLOBALS['db'] = $this->connect();
		$stmt = $db->query("SELECT * FROM mcp");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_mcp_w_id($id){
		global $db;
        $GLOBALS['db'] = $this->connect();
		$stmt = $db->query("SELECT * FROM mcp WHERE ID == '$id'");
		return $stmt;
    }

//     public function add_employee($Staff_ID, $MCP_List, $Status, $Assign_Date, $Start,$End, $Vehicle_ID){
//       global $db;
//       $GLOBALS['db'] = $this->connect();
//       //Check ID
//       $stmt = $db->prepare("INSERT INTO task (ID, Staff_ID, MCP_List, Status, Assign_Date, Start,End, Vehicle_ID, Route_ID) VALUES (?, ?,?,?,?,?,?,?,?)");
//       return $stmt->execute(array(NULL, $Staff_ID, $MCP_List, $Status, $Assign_Date, $Start,$End, $Vehicle_ID, NULL));
//   }
}