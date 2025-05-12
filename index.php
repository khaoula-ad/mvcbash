<?php
require 'controller/stagiaire_controller.php';
    if(isset($_Get['action'])){
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
    }
    
    
?>