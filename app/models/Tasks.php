<?php

class Tasks {
    use Model;

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
}