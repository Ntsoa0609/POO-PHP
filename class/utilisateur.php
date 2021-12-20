<?php

require_once("class/humain.php");

class utilisateur extends humain{
          private $email;
          private $password;
         
          public function __construct($nom, $prenom,$age,$email,$password){
            parent ::__construct($nom,$prenom,$age);
              $this->email = $email;
              $this->password = $password; 
          }

          public function setEmail($email){
              $this->email = $email;
          }

          public function getEmail(){
               return $this->email;
          }

          public function setPassword($password){
             $this->password = $password;
          }

          public function getPassword(){
               return $this->password;
          }

          public function authentification($email,$password){
            
               if($email == "ntsoarandria77@gmail.com" && $password =="1234"){
                     echo "connection success bienvenue " .$this->nom ." ". $this->prenom;
                     include ('page/principale.html');
               }

          }

          public function af_uti($nom){
              echo $this->nom = $nom;
          }
      } 

      


       
?>