<?php 
            try{
                $dbco = new PDO("mysql:host=127.0.0.1;dbname=gestion_immobilier;charset=utf8mb4;", 'root', '');
                echo "connexion reussite <br>";
               
              

            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
    ?>