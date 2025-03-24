<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-with, initial-scale=1.0">
        <title>modifier</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class=""></header>
        <nav class="nav"> 
                <ul class="" id=""> 
                    <li class="">
                        <a class="" href="index.html">Accueil</a>
                    </li>  
                    <li class="">
                        <a class="" href="events.html">| Events</a>
                    </li>
                    <li class="">
                        <a class="" href="register.html">| Inscription</a>
                    </li>
                    <li class="">
                        <a class="" href="login.html">| Profile</a>
                    </li>
                    <li class="">
                        <a class="" href="#">| Contact</a>
                    </li>
                </ul> 
        </nav>
        <?php
        session_start();
        echo'
            <form class="formulaire1" method="post">
                <div>
                    <label for="">Nom :</label>
                    <input type="text" value= "'.$_SESSION['nom'].'">
                </div>
                <div>
                    <label for="">Email :</label>
                    <input id="email" type="text" value="'.$_SESSION['email'].'">
                </div>
                <div>
                    <button type="submit" name="modifier">modifier</button>
                </div>
            </form>'
        if(isset($_POST[]))
        ?>
        <footer>
            <div class="foot">
                <div class="copy">
                    <p>&copy Designed by Dupont Inc</p>
                </div>
                <div class="localisation">
                    <p>99 rue de Sainte Anne</p>
                    <p>87000 Limoges</p>
                </div>
            </div>
        </footer>
    </body>
</html>
