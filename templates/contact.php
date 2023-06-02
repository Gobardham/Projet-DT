<h1>Contact</h1>

<form action="./functions/traitement.php?action=contact" method="POST">
    <div class="row mb-3">
        <div class="col-3 offset-3">
            <label for="first_name">Prénom</label>
            <input type="text" name="first_name" maxlenght='45' required class="form-control">
        </div>
        <div class="col-3">
            <label for="last_name">Nom</label>
            <input type="text" name="last_name" maxlenght='45' required class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-3 offset-3">
            <label for="email">Email</label>
            <input type="email" name="email" maxlenght='180' required class="form-control">
        </div>
        <div class="col-3">
            <label for="object">Objet</label>
            <select name="object" required class="form-control">
                <option value="">-- sélectionner --</option>
                <option value="info">informations</option>
                <option value="emploi">postuler</option>
                <option value="bug">signaler un bug</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-6 offset-3">
            <label for="message">Message</label>
            <textarea name="message" maxlength="1000" required class="form-control"></textarea>
        </div>
    </div>
    <div class="row text-end">
        <div class="col-6 offset-3">
            <input type="submit" value="Envoyer" class="btn btn-success">
        </div>
    </div>
</form>
