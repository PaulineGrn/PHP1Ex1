<!-- Avant la déclaration de HTML on met le PHP ici pour tout se qui ne s'affiche pas sur la page -->
<?php
// Toujours utiliser les simples côtes dans le PHP + déclaration de la variable object
$object='objet du message';
// Déclaration de la variable message
$message="contenu";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP1Ex1</title>
  </head>
  <body>
    <h1>Exercice 1</h1>
    <p>
    <!-- Pour l'affichage le PHP se trouve dans le BODY -->
    <!-- Echo permet d'afficher la variable en question -->
    <?php echo $object;?>
  </p>
  </body>
</html>
