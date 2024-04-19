<?php

require_once 'database.php';

Class SimpleForm{
    //attributes

    public $name;
    public $age;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO SimpleForm (name, age) VALUES (:name, :age);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':age', $this->age);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }
    
}

?>