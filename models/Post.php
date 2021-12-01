<?php
class Post extends Connect{
    private $db;
    private $posts;
    public function __construct(){
		$this->db = Connect::connection();
		$this->posts = array();
	}
    public function get_posts($country_id){
        $query = $this->db->query("SELECT countries.id cont_id, countries.name name,posts.id id,posts.title title,posts.extract extract,posts.image image,posts.date date,categories.id cat_id,categories.name category FROM countries, posts,categories WHERE country_id=$country_id AND posts.category_id =categories.id AND countries.id =$country_id ");
		while ($rows = $query->fetch_assoc()){
			$this->posts[] = $rows;
		}
		return $this->posts;
    }
	public function get_destination_posts($destination_id){
		$query = $this->db->query("SELECT posts.id id,posts.title title,posts.extract extract,posts.image image,countries.name country,destinations.name name,categories.id cat_id,categories.name category FROM posts,destinations,countries,categories WHERE posts.destination_id = countries.destination_id AND destinations.id = posts.destination_id AND destinations.id = countries.destination_id AND countries.id = posts.country_id AND posts.category_id = categories.id AND posts.destination_id=$destination_id ");

		
		while ($rows = $query->fetch_assoc()){
			$this->posts[] = $rows;
		}
		return $this->posts;

	}
	public function get_category_posts($category_id){
		$query = $this->db->query("SELECT posts.id id,posts.title title,posts.extract extract,posts.image image,countries.name country,destinations.name name,categories.id cat_id,categories.name category FROM posts,destinations,countries,categories WHERE posts.destination_id = countries.destination_id AND destinations.id = posts.destination_id AND destinations.id = countries.destination_id AND countries.id = posts.country_id AND posts.category_id = categories.id AND posts.category_id=$category_id ");
		while ($rows = $query->fetch_assoc()){
			$this->posts[] = $rows;
		}
		return $this->posts;

	}
    public function get_post($id) {
		$sql="SELECT * FROM posts WHERE id=".$id;
		$query = $this->db->query($sql);
		$row = $query->fetch_assoc();
		return $row;
    }
	public function get_allposts(){
		$query = $this->db->query("SELECT posts.id id,posts.title title,posts.date date,countries.name country,destinations.name name,categories.id cat_id,categories.name category FROM posts,destinations,countries,categories WHERE posts.destination_id = countries.destination_id AND destinations.id = posts.destination_id AND destinations.id = countries.destination_id AND countries.id = posts.country_id AND posts.destination_id=destinations.id AND posts.category_id = categories.id  ");
		while ($rows = $query->fetch_assoc()){
			$this->posts[] = $rows;
		}
		return $this->posts;
	}
    public function set_post($title,$extract,$body,$image,$destination_id,$country_id,$category_id,$date){
		$sql = "INSERT INTO posts (title,extract,body,image,destination_id,country_id,category_id,date) VALUES ('" . $title . "','".$extract."','".$body."','".$image."','".$destination_id."','".$country_id."','".$category_id."','".$date."')";
		if ($this->db->query($sql)) { 
			return ($this->db->insert_id);
		 }
		 else {
			 return false;
		 }
	}
}