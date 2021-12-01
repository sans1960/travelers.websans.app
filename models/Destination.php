<?php
class Destination extends Connect{
    private $db;
    private $destinations;
    public function __construct(){
		$this->db = Connect::connection();
		$this->destinations = array();
	}
    public function get_destinations(){
		$query = $this->db->query("SELECT * FROM destinations");
		while ($rows = $query->fetch_assoc()){
			$this->destinations[] = $rows;
		}
		return $this->destinations;
	}
    public function get_destination($id) {
		$sql="SELECT * FROM destinations WHERE id=".$id;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;
    }
	public function set_destination($name){
		$sql = "INSERT INTO destinations (name) VALUES ('" . $name . "')";
		if ($this->db->query($sql)) { 
			return ($this->db->insert_id);
		 }
		 else {
			 return false;
		 }

	}
}