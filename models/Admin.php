<?php 
class Admin extends Connect{
    
        private $db;
        private $admins;
        public function __construct(){
            session_start();
            $this->db = Connect::connection();
        }
        public function comprobar_admin($name,$password) {
            $sql="SELECT count(*) contador FROM admins WHERE name='".$name."' and md5('".$password."')=password ";
            $query=$this->db->query($sql);
            $row = $query->fetch_assoc();
            if ($row['contador']>0){
                // $date = date('m/d/Y h:i:s', time());
                $sql ="UPDATE admins SET valor_cookie='".session_id()."',fecha_conexion=now() WHERE name LIKE '".$name."'";
                if ($this->db->query($sql) === TRUE) {
                      return true;
                } 		
                else {
                    return true;
                }
            }
            else
                {return false;}
        }
        public function borrar_conexion() {
            $sql="UPDATE admins SET valor_cookie='', fecha_conexion=null WHERE valor_cookie='".session_id()."'";
            if ($this->db->query($sql)) {
                return true;
            }
            else
                {return false;}
        }	
        public function identificado() {
            $sql = "SELECT count(*) contador FROM admins WHERE valor_cookie='".session_id()."' and date_add(fecha_conexion, INTERVAL 1 HOUR) > now()";
            $query=$this->db->query($sql);
            $row = $query->fetch_assoc();
            if ($row['contador']>0){
                return 'ok';
            }
            else
                {return 'ko';}
        }
}
?>