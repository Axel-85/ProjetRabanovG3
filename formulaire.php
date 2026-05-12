<?php
$nom = "";
$prenom = "";
$email = "";
$tel = "";
$numerocb = "";
$codesecret = "";
$dateex = "";
$siret = "";
$message = "";
$messageClass = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom       = htmlspecialchars($_POST['nom'] ?? '');
    $prenom    = htmlspecialchars($_POST['prenom'] ?? '');
    $email     = htmlspecialchars($_POST['email'] ?? '');
    $tel       = htmlspecialchars($_POST['telephone'] ?? '');
    $numerocb  = htmlspecialchars($_POST['numerocb'] ?? '');
    $codesecret = htmlspecialchars($_POST['code_securite'] ?? '');
    $dateex    = htmlspecialchars($_POST['date_expiration'] ?? '');
    $siret     = htmlspecialchars($_POST['siret'] ?? '');

    if ($nom && $prenom && $email && $tel) {
        $message = "Inscription réussie !";
        $messageClass = "success";
    } else {
        $message = "Veuillez remplir tous les champs obligatoires.";
        $messageClass = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Client</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f1ea; color: #333; }
        .container { max-width: 400px; margin: 80px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #b59410; border-bottom: 2px solid #b59410; padding-bottom: 10px; text-align: center; }
        h3 { color: #b59410; margin-top: 20px; }
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
    <h2>Inscription Client</h2>

    <?php if ($message !== ""): ?>
        <div class="alert <?php echo $messageClass; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form action="formulaire.php" method="post">

        <h3>Information Personnelle</h3>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom"
                   value="<?php echo $nom; ?>"
                   placeholder="Ex: De La Tour" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom"
                   value="<?php echo $prenom; ?>"
                   placeholder="Ex: Jean-Christophe" required>
        </div>
        <div class="form-group">
            <label for="email">Adresse E-mail</label>
            <input type="email" id="email" name="email"
                   value="<?php echo $email; ?>"
                   placeholder="contact@exemple.com" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone"
                   value="<?php echo $tel; ?>"
                   placeholder="0120321232" required>
        </div>

        <h3>Informations bancaires</h3>

        <div class="form-group">
            <label for="numerocb">Numéro de carte bancaire</label>
            <input type="text" id="numerocb" name="numerocb"
                   value="<?php echo $numerocb; ?>"
                   placeholder="1234 5678 9012 3456" maxlength="16">
        </div>
        <div class="form-group">
            <label for="code_securite">Code de sécurité (CVV)</label>
            <input type="text" id="code_securite" name="code_securite"
                   value="<?php echo $codesecret; ?>"
                   placeholder="123" maxlength="3">
        </div>
        <div class="form-group">
            <label for="date_expiration">Date d'expiration</label>
            <input type="date" id="date_expiration" name="date_expiration"
                   value="<?php echo $dateex; ?>">
        </div>

        <h3>Information de la société</h3>

        <div class="form-group">
            <label for="siret">Numéro SIRET</label>
            <input type="text" id="siret" name="siret"
                   value="<?php echo $siret; ?>"
                   placeholder="123 456 789 00013" maxlength="14">
        </div>

        <button type="submit">Finaliser l'adhésion</button>
    </form>

    <div class="footer-link">
        <a href="connexion.php">Déjà inscrit ? Se connecter</a>
    </div>
</div>
</body>
</html>
