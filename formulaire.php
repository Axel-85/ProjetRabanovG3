<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Hôtel de Prestige</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form asp-action="Inscription" method="post">
    <!-- SECTION 1 : INFORMATIONS PERSONNELLES -->
    <h2 class="text-gold">Informations personnelles</h2>
    
    <div class="form-group">
        <label asp-for="Nom"></label>
        <input asp-for="Nom" class="form-control" placeholder="Votre nom" />
        <span asp-validation-for="Nom" class="text-danger"></span>
    </div>

    <div class="form-group">
        <label asp-for="Prenom"></label>
        <input asp-for="Prenom" class="form-control" placeholder="Votre prénom" />
        <span asp-validation-for="Prenom" class="text-danger"></span>
    </div>

    <div class="form-group">
        <label asp-for="Telephone"></label>
        <input asp-for="Telephone" class="form-control" placeholder="06 00 00 00 00" />
        <span asp-validation-for="Telephone" class="text-danger"></span>
    </div>

    <div class="form-group">
        <label asp-for="Email"></label>
        <input asp-for="Email" class="form-control" placeholder="email@exemple.com" />
        <span asp-validation-for="Email" class="text-danger"></span>
    </div>

    <hr> <!-- Séparation visuelle -->

    <!-- SECTION 2 : INFORMATIONS BANCAIRES -->
    <h2 class="text-gold">Informations Bancaires</h2>

    <div class="form-group">
        <label asp-for="NumeroCarte">Numéro de la carte</label>
        <input asp-for="NumeroCarte" class="form-control" placeholder="XXXX XXXX XXXX XXXX" />
        <span asp-validation-for="NumeroCarte" class="text-danger"></span>
    </div>

    <div class="form-group">
        <label asp-for="CodeSecurite">Code de sécurité (CVV)</label>
        <input asp-for="CodeSecurite" class="form-control" placeholder="123" />
        <span asp-validation-for="CodeSecurite" class="text-danger"></span>
    </div>

    <div class="form-group">
        <label asp-for="DateExpiration">Date d'expiration</label>
        <input asp-for="DateExpiration" type="month" class="form-control" />
        <span asp-validation-for="DateExpiration" class="text-danger"></span>
    </div>

    <hr>

    <!-- SECTION 3 : SOCIÉTÉ (Optionnel) -->
    <h2 class="text-gold">Société</h2>
    <div class="form-group">
        <label asp-for="NumeroSiret">Numéro SIRET</label>
        <input asp-for="NumeroSiret" class="form-control" placeholder="123 456 789 00012" />
        <span asp-validation-for="NumeroSiret" class="text-danger"></span>
    </div>

    <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary">Finaliser mon inscription</button>
    </div>
</form>

</body>
</html>