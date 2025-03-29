<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profil</title>
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
        <!-- <link rel="stylesheet" type="text/css" href="{{asset}}css/main.css" /> -->
      

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_mediaquery.css"
        />

    
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_entete.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_navigation.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_pieDePage.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_profil.css"
        />

        <link rel="stylesheet" type="text/css" href="{{asset}}css/composant_usercreate.css">
      
    </head>
    <body>
        <nav class="flex-column">
            <div class="navigation_secondaire">
                <div>
                    <a class="bouton" href="">9 Live </a>
                </div>

                <div>
                    <form action="index.html" method="get">
                        <div class="navigation-input-flex">
                            <label hidden for="recherche" id="recherche-label"
                                >recherche</label
                            >
                            <input
                                type="text"
                                name="recherche"
                                id="recherche"
                                placeholder="Recherche LordStampee.com"
                                class="navigation-recherche"
                                required
                                aria-labelledby="recherche-label"
                            />
                            <img
                                class="png"
                                src="{{asset}}/images/lupe2.png"
                                alt="Search Icon"
                            />
                        </div>
                    </form>
                </div>

                <div class="navigation_secondaire-droite">
                    <div class="icons">
                        <img
                            class="png"
                            src="{{asset}}/images/star.png"
                            alt="favorites"
                        />
                        <a href="{{ base }}/user/profil">
                        <img
                        class="png"
                        src="{{asset}}/images/compte.png"
                            alt="votrecompte"
                            />
                            </a>
                    </div>

                    <div>
                        <p>$CAD▼</p>
                    </div>

                    <div class="icons">
                        <img
                            class="drapeau"
                            src="{{asset}}/images/drapeau.png"
                            alt="drapeau"
                        />
                        <p>FR▼</p>
                    </div>

                    <div>
                        <a class="bouton" href="{{ base }}/user/accueil/logout">Déconnexion</a>
                    </div>
                </div>
            </div>

            <div class="navigation_principal rosarivo-regular-italic">
              
                <ul class="flex-row">
                    <li><a href="{{base}}/user/catalogue">Le Catalogue</a></li>
                    <li><a href="">Archive</a></li>
                    <li><a href="{{base}}/user/timbre/create">Créer un enchère</a></li>
                </ul>

                <img
                    class="logo"
                    src="{{asset}}/images/logolsb.png"
                    alt="logoStampee"
                />

                <ul class="flex-row">
                    <li><a href="">Actualités</a></li>
                    <li><a href="">Contactez nous</a></li>
                    <li class="navigation-menu-deroulant">
                        <a class="navigation-gachette" href=""
                            >Fonctionnement</a
                        >
                        <ul class="navigation-conteneur-menu">
                            <li><a href="">Termes et conditions</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <header>
            <!-- <div class="entete-fildariane">
                <div class="entete-plus">
                    <div class="main-plus">
                        <div class="main-plus-conteneur entete-fildariane-plus">
                            <a class="main-button-next" href="">◀</a>
                        </div>
                        <div class="main-plus-conteneur entete-fildariane-plus">
                            <a class="main-button-next" href="">▶</a>
                        </div>
                    </div>

                </div>
            </div> -->
        </header>
<main>


