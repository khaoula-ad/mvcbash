<?php
    $title ='Supprimer stagiaire';
    ob_start();
?>
<p>Voulez vous validez la suppression?</p>
<a class="btn btn-danger"href="index.php?action=destroy&id=<?php echo $id;?>">valider suppression</a>
<a class="btn btn-warning"href="index.php?action=list">annuler suppression</a>
<?php $content = ob_get_clean(); ?>
<?php include_once 'view/layout.php';?>