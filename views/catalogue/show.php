<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fiche d’enchère</title>
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
        <link rel="stylesheet" type="text/css" href="{{asset}}/css/main_ficheenchere.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_grille.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}/css/composant_cartefiche.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_fiche.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_mediaqueryficheenchere.css"
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
    </head>
    <body>
    <nav class="flex-column">
            <div class="navigation_secondaire">
                <div>
                    <a class="bouton" href="">9 Live </a>
                </div>

                <div>
                    <form  method="post">
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
         
        </header>

    
        <section class="flex-column">
            <div class="carte-conteneur">
                <div class="titres rosarivo-regular-italic-grande">
                    <h3>{{ timbre.nametimbre }}</h3>
                            </div>
                        <div class="fiche-conteneur">
                    <a href=""
                        ><img
                            id="imagetimbrezoomin"
                            class="icon"
                            src="{{asset}}/images/zoomin.png"
                            alt="zoomin"
                    /></a>
                    <a href=""
                        ><img
                            class="icon"
                            src="{{asset}}/images/zoomout.png"
                            alt="zoomout"
                    /></a>
                    <a href=""
                        ><img
                            class="icon"
                            src="{{asset}}/images/maxpale.png"
                            alt="max"
                    /></a>
                </div>

                <div class="flex-block">
                {% if timbre.imageprimary %}
                    <img
                        id="mainimagezoom"
                        src="{{upload}}{{timbre.imageprimary}}"
                        alt="julesverne"
                    />
                    {% else %}
                    <p>pas disponible</p>
                    {% endif %}
                </div>

                <div class="fiche-conteneur">
                   
                    <a href=""
                        ><img
                            class="fiche-conteneur-image"
                            src="{{ upload }}{{ timbre.otherImages[0] }}"
                            alt="zoominImg1"
                    /></a>
                   
                    <a href=""
                        ><img
                            class="fiche-conteneur-image"
                            src="{{ upload }}{{ timbre.otherImages[1] }}"
                            alt="zoominImg2"
                    /></a>
                    <a href=""
                        ><img
                            class="fiche-conteneur-image"
                            src="{{ upload }}{{ timbre.otherImages[2] }}"
                            alt="zoominImg3"
                    /></a>
                
                </div>

                <div class="fiche-conteneur">
                            <a href=""
                            ><img
                            class="icon"
                            src="{{asset}}/images/enveloppe.png"
                            alt="enveloppe"
                            /></a>
                            <a href=""
                            ><img
                            class="icon"
                            src="{{asset}}/images/Partageiconbp.png"
                            alt="partager"
                            /></a>
                            <a href=""
                            ><img
                            class="icon"
                            src="{{asset}}/images/star.png"
                            alt="Favorites"
                            /></a>
                            </div>
                            </div>

                            <div class="fiche-tabs">
                            <input
                            type="radio"
                            class="fiche-tabs_radio"
                                name="tabs"
                                id="info"
                                checked
                                />
                                <label for="info" class="fiche-tabs_label">Info</label>
                                <div class="titres fiche-tabs_contenu rosarivo-regular">
                                <h3>Info</h3>
                            <article class="fiche-tabs-contenu-flex">
                            <div>
                            <div class="flex-row lato-regular">
                                <h4 class="h4">Date de creation:</h4>
                                <p>{{timbre.datecreationtimbre}}</p>
                            </div>

                            <div class="flex-row lato-regular">
                                <h4 class="h4">Couleur(s):</h4>
                                <p>{{timbre.coloridcolor}}</p>
                            </div>

                            <div class="flex-row lato-regular">
                                <h4 class="h4">Condition:</h4>
                                <p>{{timbre.conditionsidconditions}}</p>
                            </div>

                            <div class="flex-row lato-regular">
                                <h4 class="h4">Dimensions:</h4>
                                <p>{{timbre.dimensiontimbre}}</p>
                            </div>

                            <div class="flex-row lato-regular">
                                <h4 class="h4">Timbre Certifié</h4>
                                <p>{{timbre.certifietimbre}}</p>
                            </div>
                        </div>

                        <div>
                            <div class="flex-row lato-regular">
                                <h4 class="h4">Pays d'origine:</h4>
                                <p>{{timbre.countryidcountry}}</p>
                            </div>
                            
                            <div class="flex-row lato-regular">
                            {% if timbre.enchere %}
                                <h4 class="h4">Date de début:</h4>
                                <p>{{timbre.enchere.startdateperiod}}</p>
                                {% endif %}
                            </div>

                            <div class="flex-row lato-regular">
                            {% if timbre.enchere %}
                                <h4 class="h4">Date de fin:</h4>
                                <p>{{timbre.enchere.enddateperiod}}</p>
                                {% endif %}
                            </div>

                            <div class="flex-row lato-regular">
                                <h4 class="h4">Dernière offre:</h4>
                                <p></p>
                            </div>
                        </div>

                        <div>
                            <div class="flex-row lato-regular">
                                <h4 class="h4">Quantité de mises:</h4>
                                <p></p>
                            </div>

                            <div class="flex-row lato-regular">
                                <h4 class="h4">Coups de cœur du Lord:</h4>
                               
                            </div>
                            </div>
                                </article>
                                </div>

                            <input
                            type="radio"
                            class="fiche-tabs_radio"
                            name="tabs"
                            id="description"
                    
                            />
                            <label for="description" class="fiche-tabs_label"
                             >Description</label
                             >
                                <div class="titres fiche-tabs_contenu rosarivo-regular">
                                <h3>Description</h3>
                                <p>{{timbre.descriptiontimbre}}
                                </p>
                                </div>

                                <input
                                type="radio"
                            class="fiche-tabs_radio"
                            name="tabs"
                             id="valeur"
                    
                                />
                                <label for="valeur" class=" fiche-tabs_label"
                                >Valeur Historique</label
                                >
                                <div class=" titres fiche-tabs_contenu rosarivo-regular">
                                <h3>Valeur Historique</h3>
                                <p>{{timbre.historyvaluetimbre}}
                                </p>
                
                
                            </div>
                        </div>
                    </div>
                </div>      

           

                <div class="fiche-bouton-edit">
                    <a href="{{base}}/timbre/edit?idtimbre={{timbre.idtimbre}}" class="fiche-bouton-blue rosarivo-regular">Éditez</a>
                
                </div>

            </div>

        </section>

        <div class="payment">
            <div class="flex-column">
            <div class = "flex-row">
                <img class="icon" src="{{asset}}/images/clockbf.png" alt="clock" />
            
                <p>Enchère en direct: </p>
            </div>

                <div class="flex-row lato-regular">
                        {% if timbre.enchere %}
                                <h4 class="h4">Prix de base:</h4>
                                <p>$ {{timbre.enchere.priceenchere}} CAD</p>
                                {% endif %}

                </div>
                    <!-- <h4 class="h4">Offre actuelle:</h4>
                    <p>$60 CAD</p> -->

                <div>
                    <h4 class="h4">Favoris de Stampee: </h4>
                    <p></p>

                </div>

                <div class = "flex-row">
                    {% if timbre.enchere %}
                                <h4 class="h4">Date de début:</h4>
                                <p>{{timbre.enchere.startdateperiod}}</p>
                                {% endif %}
                </div>
                <div class = "flex-row">
                    {% if timbre.enchere %}
                                <h4 class="h4">Date de fin:</h4>
                                <p>{{timbre.enchere.enddateperiod}}</p>
                                {% endif %}
                </div>
                </div>
                <div>
            </div>

            <div class="flex-row">
                

                <div class="flex-row">
                
                    <form method="post">
               
                   
                
                         <div class="navigation-input-flex">
                            <label hidden for="Encherir" id="Encherir-label"
                                >Encherir</label
                            >
                            <input
                                type="text"
                                name="valeurdemise"
                                id="Encherir"
                                placeholder="$ Placer la mise"
                                class="navigation-recherche"
                                required
                                aria-labelledby="Encherir-label"
                            />
                        </div>
                        <div class="button-container">
                            <input type="submit" value="Enchérir"class="fiche-bouton-blue rosarivo-regular">
                        </div>
                   
                    </form>

        
               
                <div class="flex-row">
                    <h3 class="h3">Options de payment:</h3>
                    <a href=""
                        ><img
                            class="icon"
                            src="{{asset}}/images/master.png"
                            alt="MasterCard"
                    /></a>
                    <a href=""
                        ><img class="icon" src="{{asset}}/images/visa.png" alt="Visa"
                    /></a>
                    <a href=""
                        ><img
                            class="icon"
                            src="{{asset}}/images/paypal.png"
                            alt="PayPal"
                    /></a>
                </div>
            </div>

            <div class="flex-row">
                <a href=""
                    ><img
                        class="icon"
                        src="{{asset}}/images/Shield1.png"
                        alt="Protection"
                /></a>
                <h4 class="h4">Achetez plan de protection:</h4>
                <p>Frais de 4%</p>
            </div>

            <div class="flex-row">
                <a href=""
                    ><img
                        class="icon"
                        src="{{asset}}/images/shipping.png"
                        alt="Shipping"
                /></a>
                <h4 class="h4">Livraison:</h4>
                <a href="#">Estimer la livraison</a>
                <p>
                    La livraison est optionnelle, Vous pouvez recourir au
                    transporteur de votre choix
                </p>
            </div>

            <div class="flex-column">
                <h3 class="h3">
                    La clôture des enchères : Aujourd'hui à 16h04
                </h3>
                <div class="flex-row">
                    <p>phila.jack01</p>
                    <a href=""
                        ><img
                            class="icon"
                            src="assets/png/england.png"
                            alt="England"
                    /></a>
                    <p>$60 CAD</p>
                </div>
                <div class="flex-row">
                    <p>martyMcfly.121GW</p>
                    <a href=""
                        ><img
                            class="icon"
                            src="assets/png/canada.png"
                            alt="Canada"
                    /></a>
                    <p>$50 CAD</p>
                </div>
                <div class="flex-row">
                    <p>anakinSkywalker.66</p>
                    <a href=""
                        ><img
                            class="icon"
                            src="assets/png/drapeau.png"
                            alt="Canada"
                    /></a>
                    <p>$45 CAD</p>
                </div>
                <div class="flex-row">
                    <p>WebDeveloper.juan</p>
                    <a href=""
                        ><img
                            class="icon"
                            src="assets/png/canada.png"
                            alt="Canada"
                    /></a>
                    <p>$40 CAD</p>
                </div>
            </div>
        </div>


        <div class="carte_info"></div>

        <article class="rosarivo-regular-grand flex-column"></article>

        <div class="cartes-defilement">
            <div class="titres rosarivo-regular-italic">
                <h2>Ce qui pourrait vous intéresser</h2>
            </div>

            <div class="Grille">
                <article class="Carte">
                    <div class="titres rosarivo-regular-italic">
                        <h3>St-Bertrand</h3>
                    </div>

                    <picture>
                        <img
                            class="Carte-image"
                            src="{{asset}}/images/paristimbre2.png"
                            alt="La tour eiffel"
                        />
                    </picture>
                    <small>
                        Un'emblème de la France et symbole de l'ingénierie
                        française. <strong>Mar 2025, 2 CAD</strong>
                    </small>
                    <div>
                        <a class="bouton" href="">Voir plus</a>
                    </div>
                </article>

                <article class="Carte">
                    <div class="titres rosarivo-regular-italic">
                        <h3>Canada 5</h3>
                    </div>

                    <picture>
                        <img
                            class="Carte-image"
                            src="{{asset}}/images/canada5.png"
                            alt="Canada"
                        />
                    </picture>
                    <small
                        >Le drapeau canadien, symbole de l'unité et de
                        l'identité nationale. <strong>Apr 2025. 111 CAD</strong>
                    </small>
                    <div>
                        <a class="bouton" href="">Voir plus</a>
                    </div>
                </article>

                <article class="Carte">
                    <div class="titres rosarivo-regular-italic">
                        <h3>Le pont neuf</h3>
                    </div>

                    <picture>
                        <img
                            class="Carte-image"
                            src="{{asset}}/images/pontneuf.png"
                            alt="Pont Neuf"
                        />
                    </picture>
                    <small
                        >Ce timbre de 1978, le pont, le patrimoine historique de
                        la ville.<strong>Apr 2025. 29 CAD</strong>
                    </small>
                    <div>
                        <a class="bouton" href="">Voir plus</a>
                    </div>
                </article>

                <article class="Carte">
                    <div class="titres rosarivo-regular-italic">
                        <h3>Le bateau vert 1924</h3>
                    </div>

                    <picture>
                        <img
                            class="Carte-image"
                            src="{{asset}}/images/usapost1924.png"
                            alt="usa bateau 1924"
                        />
                    </picture>
                    <small
                        >Un vieux navire,l'histoire maritime et l'importance du
                        commerce aux États-Unis.
                        <strong>Fév 2025. 7 CAD</strong>
                    </small>
                    <div>
                        <a class="bouton" href="">Voir plus</a>
                    </div>
                </article>

                <article class="Carte">
                    <div class="titres rosarivo-regular-italic">
                        <h3>La Confédération</h3>
                    </div>

                    <picture>
                        <img
                            class="Carte-image"
                            src="{{asset}}/images/bateau.png"
                            alt="La Confédération canadienne "
                        />
                    </picture>
                    <small
                        >L'unification des provinces en 1867 et la naissance du
                        Canada. <strong>Fév 2025. 111 CAD</strong>
                    </small>
                    <div>
                        <a class="bouton" href="">Voir plus</a>
                    </div>
                </article>

                <article class="Carte">
                    <div class="titres rosarivo-regular-italic">
                        <h3>Airmail</h3>
                    </div>

                    <picture>
                        <img
                            class="Carte-image"
                            src="{{asset}}/images/laConfederation.png"
                            alt="liberte"
                        />
                    </picture>
                    <small
                        >Un timbre montrant la Statue de la Liberté, symbole de
                        liberté et d'amitié.
                        <strong>Fév 2025. 7 CAD</strong>
                    </small>
                    <div>
                        <a class="bouton" href="">Voir plus</a>
                    </div>
                </article>

                <article class="Carte">
                    <div class="titres rosarivo-regular-italic">
                        <h3>Le bateau bleu</h3>
                    </div>

                    <picture>
                        <img
                            class="Carte-image"
                            src="{{asset}}/images/airmail2.png"
                            alt="usa bateau bleu"
                        />
                    </picture>
                    <small
                        >Un timbre symbole d'aventure et d'exploration maritime.
                        <strong>Fév 2025. 7 CAD</strong>
                    </small>
                    <div>
                        <a class="bouton" href="">Voir plus</a>
                    </div>
                </article>
            </div>
        </div>

        {{ include('layouts/footer.php')}}