<?php 
    $nom =htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email'], FILTER_SANITIZE_EMAIL);
    $tel = htmlspecialchars($_POST['Tel']);
    $numerocb = htmlspecialchars($_POST['numerocb']);
    $codesecret = htmlspecialchars($_POST['code-s']);
    $dateex = htmlspecialchars($_POST['dateex']);
    $siret = htmlspecialchars($_POST['siret']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inscriptions</title>
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

    <h2>Inscription Client</h2>

    <?php if ($message !== ""): ?>
        <div class="alert <?php echo $messageClass; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form action="formulaire.php" method="post">
        <h2> Information Personelle </h2>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Ex: De La Tour" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Ex: Jean-Christophe" required>
        </div>

        <div class="form-group">
            <label for="email">Adresse E-mail</label>
            <input type="email" id="email" name="email" placeholder="contact@exemple.com" required>
        </div>

        <div class="form-group">
            <label for="Tel">Telephone</label>
            <input type="text" id="Tel" name="telephone" placeholder="0120321232" required>
        </div>
        <h2> Informations bancaires</h2>
        <div class="form-group">
            <label for="numerocb">numero-cartebanciare</label>
            <input type="text" id="nb-cb" name="numerocb" placeholder="123 456 789 369">
        </div>
        <div class="form-group">
            <label for="code-s">code securite</label>
            <input type="" id="code-s" name="code_securite">
        </div>
         <div class="form-group">
            <label for="date-ex">date expiration</label>
            <input type="date" id="date-ex" name="date-expiration">
        </div>
        <h2>Information de la societé</h2>
       <div class="form-group">
            <label for="siret">Numéro SIRET</label>
            <input type="text" id="siret" name="siret" placeholder="123 456 789 00013">
        </div>
        <button type="submit">Finaliser l'adhésion</button>
    </form>
</div>
</body>
</html>
