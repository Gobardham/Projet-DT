<h1>Inscription</h1>

<div class="row">
    <div class="col-4 offset-4">
        <form action="./functions/compte.php?action=inscription" method="POST">
            <div class="form-group mb-3">
                <label for="first_name">Prénom</label>
                <input type="text" name="first_name" required class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="last_name">Nom</label>
                <input type="text" name="last_name" required class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password_confirm">Confirmation mot de passe</label>
                <input type="password" name="password_confirm" class="form-control">
            </div>
            <div class="text-end">
                <input type="submit" value="Inscription" class="btn btn-success">
            </div>
        </form>
        <hr class="my-3">
        <div class="text-center">
            <p>Déjà un compte ? <a href="index.php?page=connexion">Connectez-vous !</a></p>
        </div>
    </div>
</div>











