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
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inscriptions</title>
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