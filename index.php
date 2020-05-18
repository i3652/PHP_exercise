<?php include("inc/header.inc.php"); ?>

<div class="starter-template"> 

        <?php

        switch ($langue) {
                case 'fr': ?>
                        <h1>Ceci est ma page d'accueil.</h1>
                        <p class="lead">Utilisez ce document comme un moyen de démarrer rapidement tout nouveau projet.</p>
                <?php break;
                case 'es': ?>
                        <h1>Esta es mi página de inicio.</h1>
                        <p class="lead">Use este documento como una forma de comenzar rápidamente cualquier proyecto nuevo.</p>
                <?php break;
                case 'an': ?>
                        <h1>This is my home page.</h1>
                        <p class="lead">Use this document as a way to quickly start any new project.</p>
                <?php break;
                case 'it': ?>
                        <h1>Questa è la mia home page.</h1>
                        <p class="lead">Utilizzare questo documento come modo per avviare rapidamente qualsiasi nuovo progetto.</p>
                <?php break;
        }

        ?>
</div>

<?php

// session_start();

// $_SESSION["prenom"] = "Quentin";
// $_SESSION["nom"] = "fdsfd" ;
// unset($_SESSION["nom"]);
// session_destroy();

// var_dump($_SESSION);

?>

<?php include("inc/footer.inc.php"); ?>

