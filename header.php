<?php
include "BiblioAccesBdd.php";
$bdd = seConnecter();
?>
<header data-bs-theme="primary">
<nav class="navbar navbar-expand-sm bg-primary navbar-primary">
  <a class="navbar-brand" href="index.php">Hotel Rabanov</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="formulaire.php">Formulaire</a>
      </li>
    </ul>
  </div>
</nav>
</header>