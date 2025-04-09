            <!doctype html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Catalogue</title>
                <link rel="preconnect" href="https://fonts.googleapis.com" />
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                <script src="/projetwebcopy/public/js/main.js" type="module"></script>


                <link
                    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
                    rel="stylesheet" />
                <link
                    href="https://fonts.googleapis.com/css2?family=Rosarivo:ital@0;1&display=swap"
                    rel="stylesheet" />


                <link
                    rel="stylesheet"
                    type="text/css"
                    href="{{asset}}css/composant_cartecatalogue.css" />

                <link
                    rel="stylesheet"
                    type="text/css"
                    href="{{asset}}css/composant_mediaquerycatalogue.css" />



                <link
                    rel="stylesheet"
                    type="text/css"
                    href="{{asset}}css/composant_entete.css" />
                <link
                    rel="stylesheet"
                    type="text/css"
                    href="{{asset}}css/composant_navigation.css" />

                <link
                    rel="stylesheet"
                    type="text/css"
                    href="{{asset}}css/composant_pieDePage.css" />

                <link
                    rel="stylesheet"
                    type="text/css"
                    href="{{asset}}css/composant_filtres.css" />

                <link
                    rel="stylesheet"
                    type="text/css"
                    href="{{asset}}css/composant_profil.css" />

                <link rel="stylesheet" type="text/css" href="{{asset}}css/main_catalogue.css">

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
                                    <label hidden for="recherche" id="recherche-label">recherche</label>
                                    <input
                                        type="text"
                                        name="recherche"
                                        id="recherche"
                                        placeholder="Recherche LordStampee.com"
                                        class="navigation-recherche"
                                        required
                                        aria-labelledby="recherche-label" />
                                    <img
                                        class="png"
                                        src="{{asset}}/images/lupe2.png"
                                        alt="Search Icon" />
                                </div>
                            </form>
                        </div>

                        <div class="navigation_secondaire-droite">
                            <div class="icons">
                                <img
                                    class="png"
                                    src="{{asset}}/images/star.png"
                                    alt="favorites" />
                                <a href="{{ base }}/user/profil">
                                    <img
                                        class="png"
                                        src="{{asset}}/images/compte.png"
                                        alt="votrecompte" />
                                </a>
                            </div>

                            <div>
                                <p>$CAD▼</p>
                            </div>

                            <div class="icons">
                                <img
                                    class="drapeau"
                                    src="{{asset}}/images/drapeau.png"
                                    alt="drapeau" />
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
                            alt="logoStampee" />

                        <ul class="flex-row">
                            <li><a href="">Actualités</a></li>
                            <li><a href="">Contactez nous</a></li>
                            <li class="navigation-menu-deroulant">
                                <a class="navigation-gachette" href="">Fonctionnement</a>
                                <ul class="navigation-conteneur-menu">
                                    <li><a href="">Termes et conditions</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <header>
                    <div class="entete-fildariane">
                        <div class="entete-plus">
                            <div class="main-plus">

                            </div>

                            <div>
                                <p>Accueil > Le catalogue</p>
                            </div>
                            <div>
                                <p>1-12 sur plus de 333 résultats</p>
                            </div>
                            <div class="main-plus">
                                <div class="main-plus-conteneur"><a href="">1</a></div>
                                <div class="main-plus-conteneur"><a href="">2</a></div>
                                <div class="main-plus-conteneur"><a href="">3</a></div>
                                <div class="main-plus-conteneur">
                                    <a class="main-button-next" href="">▶</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="titres rosarivo-regular-italic">
                        <h2>Le catalogue</h2>
                    </div>

                </header>

                <aside>

                    <form action="" method="POST">

                        <div class="filtres-conteneur-archive">
                            <div class="titres rosarivo-regular">
                                <h3>filtres</h3>
                            </div>

                            <div class="filtres-conteneur">

                                <details open>
                                    <summary>
                                        <span>Couleur</span>
                                    </summary>
                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="rouge" />
                                            <label id="rouge">Rouge</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="bleu" />
                                            <label id="bleu">Bleu</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="jaune" />
                                            <label id="jaune">Jaune</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="orange" />
                                            <label id="orange">Orange</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="gris" />
                                            <label id="gris">Gris</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="vert" />
                                            <label id="vert">Vert</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="titres">
                                        <button type="button" id="applyColorBtn" class="filtres-bouton">Appliquer</button>
                                    </div>
                                </details>

                            </div>


                        </div>




                        <div class="filtres-conteneur-archive">
                            <div class="titres rosarivo-regular">
                                <h3></h3>
                            </div>

                            <div class="filtres-conteneur">

                                <details open>
                                    <summary>
                                        <span>Condition</span>
                                    </summary>
                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="parfaite" />
                                            <label id="parfaite">Parfaite</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="excellente" />
                                            <label id="excellente">Excellente</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="bonne" />
                                            <label id="bonne">Bonne</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="moyenne" />
                                            <label id="moyenne">Moyenne</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="endommage" />
                                            <label id="endommage">endommage</label>
                                        </div>
                                        <div></div>
                                    </div>


                                    <div class="titres">
                                        <button type="submit" class="filtres-bouton">Appliquer</button>
                                    </div>
                                </details>

                            </div>


                        </div>




                        <div class="filtres-conteneur-archive">
                            <div class="titres rosarivo-regular">
                                <h3></h3>
                            </div>

                            <div class="filtres-conteneur">

                                <details open>
                                    <summary>
                                        <span>Pays</span>
                                    </summary>
                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="angleterre" />
                                            <label id="angleterre">Angleterre</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="france" />
                                            <label id="france">France</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="etatsunis" />
                                            <label id="etatsunis">Etats Unis</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="canada" />
                                            <label id="canada">Canada</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="allemagne" />
                                            <label id="allemagne">Allemagne</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="filtre-flex-row">
                                        <div class="flex-row">
                                            <input
                                                type="checkbox"
                                                aria-labelledby="pologne" />
                                            <label id="pologne">Pologne</label>
                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="titres">
                                        <button type="submit" class="filtres-bouton">Appliquer</button>
                                    </div>
                                </details>

                            </div>


                        </div>














                    </form>


                </aside>




                <main id="main" class="main-conteneur-principal">

                    <!-- 
                    <div>

                        <article class="Carte">
                            <div class="Carte-titre titres rosarivo-regular-italic">
                                <h3></h3>
                            </div>

                            <img
                                class="Carte-image"
                                src=""
                                alt="image" />

                            <small></small>
                            <small>Date de début: <strong></strong></small>
                            <small>Date de fin: <strong></strong></small>
                            <small>Prix de base: <strong></strong></small>


                           
                            <div class="flex-row">
                                
                                <a class="bouton" href="{{base}}/user/catalogue/show?idtimbre={{timbre.idtimbre}}">Voir</a>
                            </div>
                        </article>

                    </div> -->


                    <!-- 
                    {% for timbre in timbres %}

                    <div class="main-Grille">




                        <article class="Carte">
                            <div class="Carte-titre titres rosarivo-regular-italic">
                                <h3>{{timbre.nametimbre}}</h3>
                            </div>

                            {% if timbre.Imageurl %}
                            <picture>
                                <img
                                    class="Carte-image"
                                    src="{{upload}}{{timbre.Imageurl}}"
                                    alt="image" />
                            </picture>
                            {% else %}
                            <p>pas disponible</p>
                            {% endif %}


                            <small>{{timbre.descriptiontimbre}}</small>

                            {% for enchere in timbre.encheres %}
                            <div>
                                <small>Date de début: <strong>{{enchere.startdateperiod}}</strong></small>
                            </div>
                            {% endfor %}

                            {% for enchere in timbre.encheres %}
                            <div>
                                <small>Date de fin: <strong>{{enchere.enddateperiod}}</strong></small>
                            </div>
                            {% endfor %}

                            {% for enchere in timbre.encheres %}
                            <div>
                                <small>Prix de base: <strong>$ {{enchere.priceenchere}} CAD</strong></small>
                            </div>
                            {% endfor %}

                            <a href="your-link-here">
                                <img class="fiche-icon" src="{{asset}}/images/star.png" alt="etoile" />
                            </a>
                            <div class="flex-row">
                                <p>⏱︎ 05:2:60:11</p>
                                <a class="bouton" href="{{base}}/user/catalogue/show?idtimbre={{timbre.idtimbre}}">Voir</a>
                            </div>
                        </article>
                    </div>

                    {% endfor %}










 -->




                    {{ include('layouts/footer.php')}}