<?php
    require_once './config/bdd.php';
    $req = $bdd->query('SELECT * FROM blog');
    $blogs = $req->fetchAll();
?>


<div class="row">

    <?php foreach ($blogs as $blog): ?>
        <div class="col-md-4">
            <div class="card mb-4">
            <img src="./assets/img/<?= $blog['image'] ?>" class="card-img-top" style="padding: 10px;">
                <div class="card-body">
                <p class="card-text"><?= substr($blog['text'], 0, 255) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach ?>

</div>
