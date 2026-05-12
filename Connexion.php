<?php
// Initialisation des variables pour les messages
$message = "";
$messageClass = "";

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupération et nettoyage des données
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password']; // On ne nettoie pas le mot de passe pour ne pas risquer de modifier les caractères spéciaux

    if (!empty($email) && !empty($password)) {
        /* LOGIQUE DE CONNEXION :
           Ici, vous devriez normalement interroger votre base de données :
           1. Chercher l'utilisateur par son email.
           2. Vérifier le mot de passe avec password_verify().
        */

        // Exemple de succès fictif pour le test
        $message = "Connexion réussie ! Bienvenue dans votre espace prestige.";
        $messageClass = "success";
        
        // Redirection possible après succès :
        // header("Location: espace-client.php");
        // exit();
    } else {
        $message = "Veuillez saisir vos identifiants.";
        $messageClass = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Hôtel de Prestige</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f1ea; color: #333; }
        .container { max-width: 400px; margin: 80px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #b59410; border-bottom: 2px solid #b59410; padding-bottom: 10px; text-align: center; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #b59410; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; margin-top: 10px; }
        button:hover { background-color: #947a0d; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; text-align: center; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .footer-link { text-align: center; margin-top: 20px; font-size: 0.9em; }
        .footer-link a { color: #b59410; text-decoration: none; }
    </style>
</head>
<body>

<div class="container">
    <h2>Espace Membre</h2>

    <?php if ($message !== ""): ?>
        <div class="alert <?php echo $messageClass; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form action="connexion.php" method="post">
        <div class="form-group">
            <label for="email">Adresse E-mail</label>
            <input type="email" id="email" name="email" placeholder="votre@email.com" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="••••••••" required>
        </div>

        <button type="submit">Se connecter</button>
    </form>

    <div class="footer-link">
        Pas encore membre ? <a href="formulaire.php">Inscrivez-vous ici</a>
    </div>
</div>

</body>
</html>