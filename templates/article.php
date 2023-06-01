<?php
    require_once './config/bdd.php';

   if (isset($_GET['id']) && !empty($_GET['id'])) {

            $req = $bdd->prepare('SELECT * FROM article WHERE id = :id');
            $req->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
            $req->execute();
            $article = $req->fetch();
           
   } else {
            include_once './templates/erreur500.php';
            
   }

   if($article){
                ?>

                <h1><?= $article['titre'] ?></h1>
                    <!-- reste de l'affichage -->
                <?php
            }else {

                include_once './templates/erreur500.php';
            }

    
?>