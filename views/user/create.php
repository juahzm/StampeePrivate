<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Create</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Rosarivo:ital@0;1&display=swap"
            rel="stylesheet"
        />

    <link rel="stylesheet" type="text/css" href="{{asset}}css/composant_usercreate.css" />
</head>
<body>


<div class="body-create">
<form method="post">
            <div class="titres rosarivo-regular-italic">
            <img
                    class="logo"
                    src="{{asset}}/images/logolsPrussian.png"
                    alt="logoStampee"
                />
                <h1>Bienvenue, philatéliste ! Veuillez créer votre compte.</h1>
                
               
            </div>

        <div class="lato-regular usercreatecontainer">


            <label>Nom
                <input type="text" name="nameuser" value="{{user.nameuser}}" >
            </label>
            <span class="errors"> {{errors.nameuser}}</span>
            <label>Nom d'utilisateur
                <input type="text" name="usernameuser" value="{{user.usernameuser}}" >
            </label>
            <span class="errors"> {{errors.usernameuser}}</span>
            <label>Mot de passe
                <input type="password" name="passworduser" value="{{user.passworduser}}" >
            </label>
            <span class="errors"> {{errors.passworduser}}</span>
            <label>Adresse courriel
                <input type="email" name="emailuser" value="{{user.emailuser}}" >
            </label>
            <span class="errors" > {{errors.emailuser}}</span>
            <input type="submit" value="Soumettre"class="bouton">

        </div>  


</form>
</div>
    
</body>
</html>