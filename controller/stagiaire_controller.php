<?php
require_once 'model/stagiaire.php';
function listeAction(){//function index(){$stagi=latest();require_once 'view/liste_stagiaires.php'}
    $stagiaires = liste_stagiaires();
    require_once 'view/liste_stagiaires.php';
}
function createAction(){
    require_once 'view/create_stagiaires.php';
}
function storeAction(){
    create_stagiaire();
    header('location:index.php?action=list');
}
function ModifierAction(){
    $id = $_POST['id'];
     edit_stagiaire($id);
     header('location:index.php?action=list');
}
function editAction(){
     $id = $_GET['id'];
     $stag=view($id);
    require_once 'view/edit_stagiaires.php';
}
function deleteAction(){
    $id=$_GET['id'];
    require_once 'view/delete_stagiaires.php';
}
function supprimerAction(){
    $id=$_GET['id'];
    supprimer_stagiaire($id);
    header('location:index.php?action=list');
}
?>