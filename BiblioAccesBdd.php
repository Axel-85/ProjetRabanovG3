function seConnecter()
{
   $serveur = 'mysql:host=192.168.37.155;port=3306';
   $bdd = 'dbname=hotel';
   $user = 'user';
   $mdp = 'P@ssw0rd';
   try {
      return new PDO($serveur . ';' . $bdd . ';charset=UTF8', $user, $mdp);
   } catch (PDOException $e) {
      echo 'Erreur : ' . $e->getMessage();
   }
   
}

function getClient($bdd)
{
   $req = "select * from client"
   $res = $bdd->query($req);
   return $res->fetchAll();
}

function getMateriel($bdd)
{
   $req = "select * from materiel"
   $res = $bdd->query($req);
   return $res->fetchAll();
}

function getReservation($bdd)
{
   $req = "select * from reservation"
   $res = $bdd->query($req);
   return $res->fetchAll();
}

function getSociete($bdd)
{
   $req = "select * from societe"
   $res = $bdd->query($req);
 azeaze    return $res->fetchAll();
}

function insertUser($bdd)
{
      $req = "INSERT INTO client 
            (id, id_effectuer, numerosiret, nom, prenom, mail, telephone, identifiant_wifi, numerocb, code_securite, date_expiration)
        VALUES 
            ('$id', '$id_effectuer', '$siret', '$nom', '$prenom', '$email', $tel, NULL, $numerocb, $codesecret, '$dateex')";
      $res = $bdd->query($req);
      return $res->fetchAll();
} 