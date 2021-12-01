<?php

class Country extends Connect{
    private $db;
    private $countries;
    public function __construct(){
		$this->db = Connect::connection();
		$this->countries = array();
	}
	public function get_allcountries(){
		$query = $this->db->query("SELECT countries.id id,countries.name name,destinations.name dest FROM countries,destinations WHERE countries.destination_id=destinations.id  ");
		while ($rows = $query->fetch_assoc()){
			$this->countries[] = $rows;
		}
		return $this->countries;
	}
	public function get_count(){
		$query = $this->db->query("SELECT * FROM countries");
		while ($rows = $query->fetch_assoc()){
			$this->countries[] = $rows;
		}
		return $this->countries;
	}

    public function get_countries($destination_id){
		$query = $this->db->query("SELECT destinations.id dest_id, destinations.name dest,countries.id id,countries.name name FROM countries, destinations WHERE destination_id=$destination_id AND destinations.id = $destination_id ");
		while ($rows = $query->fetch_assoc()){
			$this->countries[] = $rows;
		}
		return $this->countries;
	}
    public function get_country($id) {
		$sql="SELECT * FROM countries WHERE id=".$id;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;
    }
	public function set_country($name,$destination_id){
		$sql = "INSERT INTO countries (name,destination_id) VALUES ('" . $name . "','".$destination_id."')";
		if ($this->db->query($sql)) { 
			return ($this->db->insert_id);
		 }
		 else {
			 return false;
		 }
	}
}






?>