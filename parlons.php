<?php

//Recupération des dix derniers messages
$reponse = $bdd->query('SELECT Expediteur, message FROM messages ORDER BY ID DESC LIMIT 0, 10');

//affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' .
        htmlspecialchars($donnees['message']) . '</p>';
}
$reponse->closeCursor();
?>
<?php include 'inc/header.inc.php';?>
        <div class="container">
              <form action="parlons_post.php" method="post">
                  <p>
                      <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="xav" /><br/>
                      <label for="message">Message</label> : <input type="text" name="message" id="message" /><br/>
                      <input type="submit" value="Envoyer"/>
                 </p>
              </form>
        </div>
            <?php include 'inc/footer.inc.php';?>


