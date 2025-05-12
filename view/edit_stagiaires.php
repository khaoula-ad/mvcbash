<?php
    $title ='Modifier stagiaires';
    ob_start();
?>
<div class="container mt-5">
    <h2>Modifier un stagiaire</h2>
    <form action="index.php?action=modifier" method="post"> 
        <div class="mb-3">
            <label for="id" class="form-label"></label>
            <input type="hidden" class="form-control" id="id" name="id" value =<?=$stag['id']?>>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" value =<?=$stag['nom']?>>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom"value =<?=$stag['prenom']?>>
        </div>

        <div class="mb-3">                         
            <label for="age" class="form-label">Âge :</label>
            <input type="number" class="form-control" id="age" name="age" value =<?=$stag['age']?> >
        </div>

        <div class="mb-3">
            <label for="login" class="form-label">Login :</label>
            <input type="text" class="form-control" id="login" name="login" value =<?=$stag['login']?>>
        </div>

        <div class="mb-3">
            <label for="motdepasse" class="form-label">Mot de passe :</label>
            <input type="password" class="form-control" id="motdepasse" name="motdepasse"value =<?=$stag['password']?> >
        </div>

        <button type="submit" class="btn btn-primary" value ="Modifier">Modifier</button>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php include_once 'view/layout.php';?>