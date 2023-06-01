<?php
    // base de données
    require_once './config/bdd.php';

    // récupération des données
    $reqCategories = $bdd->query('SELECT * FROM categorie');
    $categories = $reqCategories->fetchAll();
?>

<h1>Rédiger un article</h1>

<form action="./functions/traitement.php?action=article-create" method="POST" enctype="multipart/form-data" class="my-5">

    <div class="row">
        <div class="col-4 offset-2">
            <div class="form-group mb-3">
                <label for="title">Titre</label>
                <input type="text" name="title" mawlength="100" required class="form-control">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group mb-3">
                <label for="author">Auteur</label>
                <input type="text" name="author" mawlength="100" required class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <div class="form-group mb-3">
                <label for="content">Contenu</label>
                <textarea name="content" required class="form-control"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 offset-2">
            <div class="form-group mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" accept="image/*" class="form-control">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group mb-3">
                <label for="alt">Texte alternatif</label>
                <input type="text" name="alt" mawlength="255" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 offset-2">
            <div class="form-group mb-3">
                <label for="published">Publié</label>
                <select name="published" required class="form-control">
                    <option value="">-- choisir --</option>
                    <option value="true">oui</option>
                    <option value="false">non</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group mb-3">
                <label for="category">Catégorie</label>
                <select name="category" required class="form-control">
                    <option value="">-- choisir --</option>
                    <?php foreach ($categories as $categorie): ?>
                        <option value="<?= $categorie['id'] ?>"><?= $categorie['nom'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group text-end">
        <div class="col-8 offset-2">
            <input type="submit" value="Valider" class="btn btn-success">
        </div>
    </div>

</form>

