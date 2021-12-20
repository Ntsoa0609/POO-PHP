<?php
    
     class humain{
          public $nom;
          public $prenom;
          private $age;

         public function __construct($nom,$prenom,$age){
               $this->nom = $nom;
               $this->prenom = $prenom;
               $this->age = $age;
          }

          function affichier(){
            echo "salut " .$this->nom ." " . $this->prenom   ;
          }

          public function getAge(){
          
                return $this->age; 
          
              
          }

          public function setAge($age){
              $this->age = $age;
          }
  
       
        }

       
       
   
       
      
?>