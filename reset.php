<?php
// Fonction pour générer une chaîne aléatoire
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['Envoyer'])) {
    // Vérification de l'existence et de la validité de l'e-mail
    if(isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        include('connexion.php');
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        
        // Requête préparée pour éviter les injections SQL
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        
       // ...
if($row = mysqli_fetch_assoc($res)) {
    $id = $row['id'];
    $rand = generateRandomString();
    
    $sql = "INSERT INTO reset VALUES ('', ?, ?,0)";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "si", $rand, $id);
    
    if(mysqli_stmt_execute($stmt)) {
        // Insertion réussie
        $insertedRows = mysqli_stmt_affected_rows($stmt);
        if($insertedRows > 0) {
            // Inséré avec succès dans la base de données
            // Envoi d'e-mail ici
            
            $to = $email; // Adresse e-mail récupérée
            $subject = "Réinitialisation de mot de passe";
            $message = "Votre code de réinitialisation est : $rand";
            $headers = "From: ahmed.hmila@polytechnicien.tn"; // Adresse e-mail de l'expéditeur

            // Envoi de l'e-mail
            if(mail($to, $subject, $message, $headers)) {
                echo "E-mail envoyé avec succès.";
            } else {
                echo "Erreur lors de l'envoi de l'e-mail.";
            }
 
        } else {
            echo "Aucune ligne insérée dans la table 'reset'.";
        }
    } else {
        echo "Erreur lors de l'exécution de la requête d'insertion : " . mysqli_error($connect);
    }
} else {
    echo "Aucun utilisateur trouvé avec cet e-mail.";
}
    }
   
}
?>
