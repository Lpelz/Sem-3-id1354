<?php

 namespace TastyRecipes\Integration;
 use TastyRecipes\Model\User;

 class UserDAO{
     private $connection;
     
      public function __construct(){
        $DB_SERVER = 'localhost';
        $DB_USERNAME = 'root';
        $DB_PASSWORD = '';
        $DB_NAME = 'TastyRecipes';
        $this->connection = new \mysqli($DB_SERVER, $DB_USERNAME,$DB_PASSWORD, $DB_NAME);   
      }
     
     public function getUserByUsername($username){ 
       $sql = "SELECT * FROM user WHERE username = '$username'";
       $result = $this->connection->query($sql);
       $row = $result->fetch_assoc();
       $user = new User($row['username'],$row['password']);
        
       return $user;
     }  
     public function createUser($username, $password){
       $stmt = $this->connection->prepare("INSERT INTO user (username,password) VALUES (?,?)");
       $stmt->bind_param(ss, $username, $password);
       $stmt->execute();
     }
 }
