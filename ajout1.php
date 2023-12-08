<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Ajout du lien vers le fichier CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="ajout2.php" method="post">
        Nom : <input type='text' name='nom' class="form-control"><br>
        Prénom : <input type='text' name='prenom' class="form-control"><br>
        Email : <input type='email' name='email' class="form-control"><br>
        Password : <input type='password' name='password' class="form-control"><br>
        <input type='submit' name='envoyer' value='Envoyer' class="btn btn-primary"> <br>
    </form>

    <!-- Ajout du lien vers le fichier JavaScript de Bootstrap (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
