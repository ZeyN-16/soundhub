<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>SoundHub</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <header class="header">
        <div class="logo">
            <img src="../img/logo.png" alt="Logo">
        </div>
        
        <div class="search-bar">
            <form action="/search" method="GET" class="search-form">
                <input type="text" name="query" placeholder="Rechercher...">
                <button type="submit">Rechercher</button>
            </form>
        </div>
        <nav class="bouton-connexion">
            <a href="#">Connexion</a>        
        </nav>
            <nav class="bouton-inscription">
                <a href="../php/inscription.html">Insciption</a>        
            </nav>
    </header>
    <body>
        <?php include 'menunavigation.php?'; ?>

        <p>Prénom : <?= $prenom;?></p>
        <p>Nom : <?= $nom;?></p>
        <p>Pseudo : <?= $pseudo;?></p>
        <p>Email : <?= $email;?></p>
        <p>Mot de passe : <?= $motdepasse;?></p>

        <form method="post">
            <input type="text" name="prénom" id="prénom" placeholder="Prénom">
            <input type="text" name="nom" id="nom" placeholder="Nom">
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
            <input type="email" name="mail" id="mail" placeholder="Email">
            <input type="password" name="mot de passe" id="mot de passe" placeholder="Mot de passe">
            <input type="submit" name="formsend" id="formsend">
        </form>

        <?php
        
            if(isset($_POST['formsend'])){
                echo "Votre formulaire a bien été envoyé !";
            }
        ?>
    </body>
</html>