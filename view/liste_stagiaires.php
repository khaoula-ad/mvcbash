<?php
    $title ='Liste des stagiaires';
    ob_start();
?>
    <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
    <table class="table table-striped" border = 1>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Login</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($stagiaires as $stagiaire):?>
                <tr>
                    <td><?= $stagiaire[0]?></td>
                    <td><?= $stagiaire[1]?></td>
                    <td><?= $stagiaire[2]?></td>
                    <td><?= $stagiaire[3]?></td>
                    <td><?= $stagiaire[4]?></td>
                    <td><a href="index.php?action=edit&id=<?php echo $stagiaire[0];?>" class="btn btn-primary btn-sm"> Modifier</a>
                    <a href="index.php?action=supprimer&id=<?php echo $stagiaire[0];?>" class="btn btn-danger btn-sm">Supprimer</a> 
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'view/layout.php';?>