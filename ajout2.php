<?php
include('connexion.php');

if(isset($_POST['envoyer'])){
    
    $nom = $_POST['nom'];

    $prenom =$_POST['prenom'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    
    $sql = "INSERT INTO users VALUES ('', '$nom', '$prenom', '$email', '$password')";

    if($connect->query($sql)===TRUE){
        echo "Succès";
    }else{
         echo "Erreur: " . mysqli_error($connect);
    }
}
?>
