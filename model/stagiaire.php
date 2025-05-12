<?php
function database_connection(){
    return new PDO('mysql:host=localhost;dbname=tpmvc','root','');
}
function liste_stagiaires(){
    $con = database_connection();
    $req = "select * from stagiaire";
    $res = $con ->query($req);
    return $res->fetchAll();
    //on peut ajouter des condition comme order by ...
}
function create_stagiaire(){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $login = $_POST['login'];
    $mdp = $_POST['motdepasse'];
    $con = database_connection();
    $sql =$con->prepare('insert into stagiaire values(null,?,?,?,?,?)');
    return $sql->execute([$nom,$prenom,$age,$login,$mdp]);
}
function view($id){
    $con = database_connection();
    $req = "select * from stagiaire where id=$id";
    $res = $con ->query($req);
    return $res->fetch();
}
function edit_stagiaire($id){
    $con = database_connection(); 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $login = $_POST['login'];
    $mdp = $_POST['motdepasse'];
    $sql =$con->prepare('update stagiaire 
                        set nom=?,prenom = ? ,age= ? ,login=?,password = ? 
                        where id=?');
    return $sql->execute([$nom,$prenom,$age,$login,$mdp,$id]);
}
function supprimer_stagiaire($id){
     $con = database_connection(); 
    //on peut utiliser prepare ici avec? 
     return  $con->query("delete from stagiaire where id =$id");
}