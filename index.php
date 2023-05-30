<!DOCTYPE html>
<html lang="fr">
<head>
   <?php require_once "./templates/_partials/head.php"?>
</head>
<body>
    <header>
    <?php require_once "./templates/_partials/header.php"?>
    </header>

    <main>
        <?php 
            if(isset($_GET['page']) && !empty(($_GET['page']))) {//s'il y a l'information "page dans l'url et n'est pas vide 
                if (file_exists("./templates/" . $_GET['page'] . ".php")) {// si le fichier demandé existe 
                    include_once "./templates/" . $_GET['page'] . ".php";//inclut le fichier demandé 
                } else {
                    include_once "./templates/erreur404.php.php";// affiche un page erreur 404
                }
            } else { // sinon (pas d'information "page" dans l'URL ou page est vide)
                include_once "./templates/accueil.php"; // affiche la page d'accueil
            }
        ?>
    </main>

    <footer>
    <?php require_once "./templates/_partials/footer.php"?>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>

