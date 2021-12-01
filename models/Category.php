<?php
class Category extends Connect{
    private $db;
    private $categories;
    public function __construct(){
		$this->db = Connect::connection();
		$this->categories = array();
	}
    public function get_categories(){
		$query = $this->db->query("SELECT * FROM categories");
		while ($rows = $query->fetch_assoc()){
			$this->categories[] = $rows;
		}
		return $this->categories;
	}
    public function get_category($id) {
		$sql="SELECT * FROM categories WHERE id=".$id;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;
    }
	public function set_category($name){
		$sql = "INSERT INTO categories (name) VALUES ('" . $name . "')";
		if ($this->db->query($sql)) { 
			return ($this->db->insert_id);
		 }
		 else {
			 return false;
		 }

	}
}