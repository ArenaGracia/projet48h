<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <form action="<?php echo site_url('Subscription_user') ?>" method="post">
    
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br>
    
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required><br>
    
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required><br>
    
    <label for="mdp">Mot de passe :</label>
    <input type="password" name="mdp" id="mdp" required><br>
    
    <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
