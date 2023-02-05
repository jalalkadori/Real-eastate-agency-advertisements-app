<?php 
            try{
                $dbco = new PDO("mysql:host=127.0.0.1;dbname=gestion_immobilier;charset=utf8mb4;", 'root', '');
                
                $requeteS ="SELECT ImageAnnonce,TitreAnnonce,TypeAnnonce,SuperficieAnnonce,MontantAnnonce,AdresseAnnonce,DateAnnonce FROM annonce";
                $rest = $dbco->prepare($requeteS);
                $rest->execute();
                // $count = $rest->rowCount(); //nbre de ligne d'une requete
                 
                $requeteAjout = "INSERT INTO `annonce` (`TitreAnnonce`, `ImageAnnonce`, `DescriptionAnnonce`, `SuperficieAnnonce`, `AdresseAnnonce`, `MontantAnnonce`, `DateAnnonce`, `TypeAnnonce`) VALUES (?, ?, ?,?, ?, ?, ?, ?, ?)";

                $resultatRqAjout = $dbco->prepare($requeteAjout);
              
                
            }

            catch(PDOException $e){
              echo 'Erreur : ' . $e->getMessage();
            }

    ?>