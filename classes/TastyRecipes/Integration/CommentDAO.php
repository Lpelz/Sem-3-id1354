<?php

 namespace TastyRecipes\Integration;
 use TastyRecipes\Model\Comment;


 class CommentDAO{
     private $connection;
     
    public function __construct(){
        $DB_SERVER = 'localhost';
        $DB_USERNAME = 'root';
        $DB_PASSWORD = '';
        $DB_NAME = 'TastyRecipes';
        $this->connection = new \mysqli($DB_SERVER, $DB_USERNAME,$DB_PASSWORD, $DB_NAME);  
    }
     
    public function getComments($recipe){
         $sql ="SELECT * FROM comments where page= '$recipe'";
         $result = $this->connection->query($sql); 
         $comments = array();
         while( $row = $result->fetch_assoc()){
             $comments[] = new Comment($row['comment'],$row['writer'],$row['page'],$row['timestamp']);
         }

         return $comments;    
    }
     public function deleteComment($timestamp){                      
        $stmt = $this->connection->prepare("DELETE FROM comments WHERE timestamp = ?");
        $stmt->bind_param(s,$timestamp);
        $stmt->execute();
     }
     public function addComment($username,$recipe,$comment){         
      $stmt = $this->connection->prepare("INSERT INTO comments (comment,writer,page) VALUES (?,?,?)");
      $stmt->bind_param(sss,$comment,$username,$recipe);
      $stmt->execute();  
     }  
 }
