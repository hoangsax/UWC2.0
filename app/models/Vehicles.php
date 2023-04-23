<?php

class Vehicles {
    use Model;
    protected $table = 'vehicle';

    public function get_vehicle(){
		global $db;
        $GLOBALS['db'] = $this->connect();
		$stmt = $db->query("SELECT * FROM vehicle");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_vehicle_w_id($id){
		global $db;
        $GLOBALS['db'] = $this->connect();
		$stmt = $db->query("SELECT * FROM vehicle WHERE ID == '$id'");
		return $stmt;
    }
}