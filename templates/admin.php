<?php
    require_once './config/bdd.php';

    $reqArticles = $bdd->query('SELECT article.id , titre, date_publication, categorie.nom AS nom_categorie
                                FROM article 
                                INNER JOIN categorie 
                                ON article.category_id = categorie.id
                                ORDER BY article.id DESC
    
      ');
    $articles = $reqArticles->fetchAll();
    $reqcategories = $bdd->query('SELECT * FROM categorie');
    $categories = $reqcategories->fetchAll();
    

?>



<h1>Espace administrateur</h1>

<h2>Articles</h2>

<table class="table table-over">
    <thead>
        <tr>
            <th>N°</th>
            <th>TITRE</th>
            <th>DATE DE PUBLICATION</th>
            <th>CATEGORIE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if (!empty($articles)) {
                 foreach ($articles as $article):
        ?>           
                    <tr>
                        <td><?= $article['id'] ?></td>
                        <td><?= $article['titre'] ?></td>
                        <td><?= $article['date_publication'] ?></td>
                        <td><?= $article['nom_categorie'] ?></td>
                        <td>
                            <a href="#"><i class="bi bi-pencil-square"></i></a>
                            <a href="./functions/traitement.php?action=article-delete&id=<?=$article['id'] ?>" class="text-danger"><i class="bi bi-trash"></i></a>

                        </td>
                    </tr> 
<?php
                endforeach;
                    
            } else {
                echo '
                    <tr>
                        <td colspan=5>Aucun article trouvé</td>
                    </tr>
                ';
            }
?>    
    <!-- liste des articles -->
    </tbody>
</table>

<!-- formulaire article -->

<h2>Catégories</h2>

<table class="table table-over text-center my-5">
    <thead class= "table-dark">
        <tr>
            <th>N°</th>
            <th>NOM</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $categorie): ?>
        <tr>
            <td><?=$categorie['id'] ?></td>
            <td><?=$categorie['nom'] ?></td>
            <td>
                <a href="#"><i class="bi bi-pencil-square"></i></a>
                <a href="./functions/traitement.php?action=category-delete&id=<?= $categorie['id'] ?>" class="text-danger"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<form action="./functions/traitement.php?action=category-create" method="POST">
    <label for="name">Nom</label>
    <input type="text" name="name" maxlenght="45" required>
    <input type="submit" value="Créer une catégorie">
</form>

<a href="./functions/traitement.php?action=article-delete&id=<?= $article['id'] ?>" class="text-danger"><i class="bi bi-trash"></i></a>