<html>
<head>
  <meta charset="utf-8" />
  <title>Exercise</title>
</head>
<body>
  <p>Créer une variable age et l'initialiser avec une valeur. Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
  <?php
  $age = rand(15, 25);
  if ($age >= 18) {
      echo "Vous êtes majeur.";
  } else {
      echo "Vous êtes mineur.";
  }
  ?>
  <p><?php echo "Vous avez ".$age."."; ?></p>
</body>
</html>
