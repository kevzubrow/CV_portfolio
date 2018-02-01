<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Message recus depuis le CV portfolio en ligne</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $c['nom'] }}</li>
      <li><strong>Prénom</strong> : {{ $c['prenom'] }}</li>
      <li><strong>mail</strong> : {{ $c['mail'] }}</li>
      <li><strong>Sujet</strong> : {{ $c['sujet'] }}</li>
      <li><strong>Message</strong> : {{ $c['message'] }}</li>
    </ul>
  </body>
</html>