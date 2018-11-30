<?php

namespace TastyRecipes\Model;

class Comment{
        
    private $username;
    private $recipe;
    private $comment;
    private $timestamp;
    
    public function __construct($comment,$username,$recipe,$timestamp){
        $this->comment = $comment;
        $this->username = $username;
        $this->recipe = $recipe;
        $this->timestamp = $timestamp;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getRecipe(){
        return $this->recipe;
    }
    public function getTimestamp(){
        return $this->timestamp;
    }
}

