<?php
require_once ("class/utilisateur.php");

       $email = array();
       $password = array();
       $nom = array("rabe","koto","jean","randria");
       $prenom = array("luc","miora","mirana","ntsoa");
       $email = array("ntsoa","ntsoarandria77@gmail.com","ntsoarandria77@gmail.com","ntsoarandria77@gmail.com");
       $password = array("147852","1234","445678","123456");
       $age = array(42,15,44,22);
       $nb = 0; 
  
        while ($nb<4){
          $personne = new utilisateur($nom[$nb],$prenom[$nb],$age[$nb],$email[$nb],$password[$nb]);
          $email[$nb] = $personne->getEmail(); 
          $password[$nb] = $personne->getPassword();
        
           $personne->authentification($email[$nb],$password[$nb]);
            $nb = $nb+1;
           
        }

      
?>