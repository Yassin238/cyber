
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Ajout du lien vers le fichier CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method='POST' action='' class="mb-3">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type='email' name='email' class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type='password' name='password' class="form-control" id="password">
            </div>
            <button type="submit" name="Envoyer" class="btn btn-primary">Envoyer</button>
        </form>
        <a href="reset.php">reset password</a>
    </div>
    <?php
    if(isset($_POST['Envoyer']))
    {
        include('connexion.php');

        //sql injection
$email=addslashes($_POST['email']);
$password=addslashes($_POST['password']);

$sql="SELECT * from users where email='$email' and password='$password'";
$res=mysqli_query($connect,$sql);
if($row=mysqli_fetch_assoc($res))
{
    session_start();

    header("location:acceuil.php");
}
else
echo"erreur mdp";






    }
    ?>

    <!-- Ajout du lien vers le fichier JavaScript de Bootstrap (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
