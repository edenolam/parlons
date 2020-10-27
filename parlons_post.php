
    <?php include 'inc/header.inc.php';?>

<div class="container">
    <?php include 'inc/connexion.inc.php'; ?>
    <?php

    $req = $bdd->prepare('INSERT INTO messages (Expediteur, message) VALUES(?,?)');
    $req->execute(array($_POST['pseudo'], $_POST['message']));

    //redirection du visiteur vers la page parlons
    header('Location: parlons.php');
    ?>

</div>

    <? include 'inc/footer.inc.php';?>
