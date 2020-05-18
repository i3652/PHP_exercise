<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Inscrire un titre ici</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <?php
  //************************************************ */
  //Gestion des cookies
  //************************************************ */ 
  $langue = "fr";

  if (!empty($_COOKIE['lang'])) {
    $langue = $_COOKIE['lang'];
  }
  if (!empty($_GET['lang'])) {
    $langue = $_GET['lang'];
    setCookie("lang", $_GET['lang'], time() + 31536000);
  }
  //************************************************ */
  //Fin. Gestion des cookies
  //************************************************ */ 
  ?>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Mon premier site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home page</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="adminpanel.php">Administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>

      <div class="form-inline my-2 my-lg-0">
        <select class="form-control" onchange="location = this.value">
          <option <?php if ($langue == "fr") { ?> selected <?php } ?> value="?lang=fr">Français</option>
          <option <?php if ($langue == "es") { ?> selected <?php } ?> value="?lang=es">Espagnol</option>
          <option <?php if ($langue == "an") { ?> selected <?php } ?> value="?lang=an">Anglais</option>
          <option <?php if ($langue == "it") { ?> selected <?php } ?> value="?lang=it">Italien</option>
        </select>
      </div>

    </div>
  </nav>



  <main role="main" class="container">