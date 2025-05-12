<?php
require 'controller/stagiaire_controller.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);
    if(isset($_GET['action'])){
        $action=$_GET['action'];
        switch($action){
            case  'create':
                createAction();
            break;
            case 'list':
                listeAction();
            break;
            case 'destroy':
                supprimerAction();
            break;
            case 'edit':
                editAction();
            break;
            case 'store':
                storeAction();
            break;
            case 'modifier':
               ModifierAction();
            break;
            case 'supprimer':
               deleteAction();
            break;
        }
    }else{
        listeAction();
    }
    
    
?>