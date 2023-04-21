<?php

Trait Model {
    use Database;

    protected $limit 		= 10;
	protected $offset 		= 0;
    public $errors = [];
    public function select($data = []) {
        $query = "select * from $this->table";
        if (count($data)) {
            $query .= " where ";
            $keys = array_keys($data);
            foreach ($keys as $key) { 
                $query .= $key ." = :". $key . " && ";
                //it means "where id =:id && date = now()"
            }

            $query = trim($query, " && ");
        }
        return $this->query($query, $data);
    }

    public function insert($data) {
        $keys = array_keys($data);
        $query = "insert into $this->table (".implode(",", $keys).") values (:".implode(",:", $keys).")";//implode là phân tách chuỗi keys
        return $this->query($query, $data);
    }
	public function first($data, $data_not = [])
	{
		$keys = array_keys($data);
		$keys_not = array_keys($data_not);
		$query = "select * from $this->table where ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :". $key . " && ";
		}
		
		$query = trim($query," && ");

		$query .= " limit $this->limit offset $this->offset";
		$data = array_merge($data, $data_not);
		
		$result = $this->query($query, $data);
		if($result)
			return $result[0];

		return false;
	}



}