<?php
$pdo = new PDO(
    "mysql:host=192.168.37.155;dbname=hotel;charset=utf8",
    "root",      // utilisateur
    "P@ssw0rd"           // mot de passe
);

<?php
try {
    $pdo = new PDO(
        "mysql:host=192.168.37.155;dbname=hotel;charset=utf8",
        "root",
        "P@ssw0rd"
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 1. Nombre de réservations par entreprise (societe)
    $stmtSociete = $pdo->query(
    "SELECT COUNT(*) FROM reservation");
    $statsEntreprises = $stmtSociete->fetchAll(PDO::FETCH_ASSOC);

    // 2. Nombre de demandes par ressource
    $stmtRessources = $pdo->query("
        SELECT rm.libelle, COUNT(cm.id) AS nb_demandes
        FROM ressources_materiels rm
        LEFT JOIN contenir_materiel cm ON cm.id = rm.id
        GROUP BY rm.id, rm.libelle
        ORDER BY nb_demandes DESC
    ");
    $statsRessources = $stmtRessources->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("❌ Erreur : " . $e->getMessage());
}
?>
