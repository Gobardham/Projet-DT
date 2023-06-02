<?php
require_once './config/bdd.php';

$req = $bdd->query('SELECT * FROM artiste LIMIT 3');
$artistes = $req->fetchAll();
?>


<div class="d-flex flex-row">
    <?php foreach ($artistes as $artiste): ?>
        <div class="card mx-3" style="width: 18rem;">
            <img src="./assets/img/<?= $artiste['image'] ?>" class="card-img-top" style="padding: 10px;">
            <div class="card-body">
                <h5 class="card-title"><?= $artiste['nom'] ?></h5>
                <p class="card-text"><?= substr($artiste['description'], 0, 100) ?></p>
                <a href="index.php?page=blog&id=<?= $artiste['id'] ?>" class="btn btn-primary">Plus d'infos</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
