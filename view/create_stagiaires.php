<?php
    $title ='Ajouter stagiaires';
    ob_start();
?>
<div class="container mt-5">
    <h2>Ajouter un stagiaire</h2>
    <form action="index.php?action=store" method="post"> 
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Âge :</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>

        <div class="mb-3">
            <label for="login" class="form-label">Login :</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>

        <div class="mb-3">
            <label for="motdepasse" class="form-label">Mot de passe :</label>
            <input type="password" class="form-control" id="motdepasse" name="motdepasse" required>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php include_once 'view/layout.php';?>