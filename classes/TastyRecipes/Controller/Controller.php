<?php

namespace TastyRecipes\Controller;
use TastyRecipes\Model\User;
use TastyRecipes\Integration\UserDAO;
use TastyRecipes\Integration\CommentDAO;


class Controller{
     
   public function login($username,$password){
      $userDAO = new UserDAO();
     
      $user = $userDAO->getUserByUsername($username);
      return $user->checkLogin($password);
   }
   public function signup($username,$password){
       $user = new User($username,$password);
       $user->signup();
   }
   public function addComment($username,$recipe,$comment){
      $commentDAO = new CommentDAO();
      $commentDAO->addComment($username,$recipe,$comment);
   }
   public function deleteComment($timestamp){
       $commentDAO = new CommentDAO();
       $commentDAO->deleteComment($timestamp);
   }
   public function getComments($recipe){
       $commentDAO = new CommentDAO();
       return $commentDAO->getComments($recipe);
   }
}

