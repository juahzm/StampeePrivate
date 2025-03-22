<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Accueil</title>
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


        <link rel="stylesheet" type="text/css" href="{{asset}}css/main.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_pieDePage.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_main.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_header.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_mediaquery.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_carte.css"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset}}css/composant_grille.css"
        />
    </head>
    <body>
        <nav>
            <p>FR▼</p>
        </nav>
        <header>
            <div class="header-conteneur">
                <div>
                    <img
                        class="logo"
                        src="{{asset}}/images/logolsPrussian.png"
                        alt="logoStampee"
                    />
                </div>

                <div>
                    <a class="bouton" href="{{base}}/user/accueil/login">Connexion</a>
                </div>
                <div>
                    <a class="bouton" href="{{base}}/user/accueil/create">Créer un compte</a>
                </div>
            </div>

            <div class="cartes-defilement">
                <div class="titres rosarivo-regular-italic">
                    <h2>En vedette</h2>
                </div>

                <div class="Grille">
                    <article class="Carte">
                        <div class="titres rosarivo-regular-italic">
                            <h3>St-Bertrand</h3>
                        </div>

                        <picture>
                            <img
                                class="Carte-image"
                                src="{{asset}}/images/paristimbre.png"
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
                            l'identité nationale.
                            <strong>Apr 2025. 111 CAD</strong>
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
                            >Ce timbre de 1978, le pont, le patrimoine
                            historique de la ville.<strong
                                >Apr 2025. 29 CAD</strong
                            >
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
                            >Un vieux navire,l'histoire maritime et l'importance
                            du commerce aux États-Unis.
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
                                src="{{asset}}/images/laConfederation.png"
                                alt="La Confédération canadienne "
                            />
                        </picture>
                        <small
                            >L'unification des provinces en 1867 et la naissance
                            du Canada. <strong>Fév 2025. 111 CAD</strong>
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
                                src="{{asset}}/images/airmail2.png"
                                alt="liberte"
                            />
                        </picture>
                        <small
                            >Un timbre montrant la Statue de la Liberté, symbole
                            de liberté et d'amitié.
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
                                src="{{asset}}/images/bateau.png"
                                alt="usa bateau bleu"
                            />
                        </picture>
                        <small
                            >Un timbre symbole d'aventure et d'exploration
                            maritime.
                            <strong>Fév 2025. 7 CAD</strong>
                        </small>
                        <div>
                            <a class="bouton" href="">Voir plus</a>
                        </div>
                    </article>
                </div>
            </div>
        </header>

        <article class="article-conteneur rosarivo-regular-italic-grande">
            <h2>À propos de Lord Reginald Stampee III</h2>

            <p>
                Reginald Stampee III, né le 12 avril 1960 à Montréal, grandit
                dans une famille passionnée d'art et d'histoire
                <a href="">Historique familial</a>. Dès l'âge de 8 ans, il
                découvre un album de timbres appartenant à son
                arrière-grand-père, ce qui marque le début de sa passion pour la
                philatélie. En grandissant, il rejoint un club philatélique
                local et se spécialise dans les timbres français du XIXe siècle.
                Pendant ses études d’histoire à l’Université de Québec, il
                analyse des séries de timbres en lien avec des événements
                historiques, publiant plusieurs articles sur le sujet. Au fil
                des années, il devient un expert renommé, notamment pour ses
                connaissances sur les timbres commémoratifs des guerres
                mondiales. Il assemble une collection rare, dont des timbres
                russes des années 1910. Reginald s'engage également à promouvoir
                la philatélie auprès des jeunes, en organisant des ateliers et
                conférences. En 2005, il publie "La philatélie, c’est la vie",
                un ouvrage à succès qui solidifie sa réputation internationale
                <a href="">voir la biographie complète</a>
            </p>
        </article>

        <section>
            <div class="rosarivo-regular-italic">
                <h1>Pourquoi Stampee</h1>
            </div>

            <div class="main-section-flex">
                <div
                    class="main-conteneur-section rosarivo-regular-italic-grande"
                >
                    <div class="main-images-conteneur">
                        <img
                            class="main-image-shield"
                            src="{{asset}}/images/Shield1.png"
                            alt="protection"
                        />
                    </div>

                    <p>
                        Nous offrons un plan de protection pour tous les achats
                        effectués lors de nos enchères LordStampee. Ce plan
                        garantit votre tranquillité d'esprit, en couvrant les
                        litiges, payments, et problèmes de livraison et
                        vérification d'authenticité.
                    </p>
                </div>

                <div
                    class="main-conteneur-section rosarivo-regular-italic-grande"
                >
                    <div class="main-images-conteneur">
                        <img
                            class="main-images"
                            src="{{asset}}/images/stampBLUE.png"
                            alt="certificat"
                        />
                    </div>

                    <p>
                        Nous certifions tous les timbres que nous mettons en
                        vente lors de nos enchères. Chaque timbre est
                        soigneusement examiné et authentifié par nos experts
                        avant d’être mis en vente, garantissant ainsi sa qualité
                        et son authenticité.
                    </p>
                </div>

                <div
                    class="main-conteneur-section rosarivo-regular-italic-grande"
                >
                    <div class="main-images-conteneur">
                        <img
                            class="main-images"
                            src="{{asset}}/images/Community.png"
                            alt="community"
                        />
                    </div>

                    <p>
                        Notre communauté de collectionneurs de confiance
                        approuve et recommande vivement notre processus de
                        vente. Grâce à notre expertise et transparence, chaque
                        étape de l'enchère est soigneusement supervisée.
                    </p>
                </div>
            </div>
        </section>

        <div class="details">
            <div class="rosarivo-regular-italic">
                <h1>Actualites</h1>
            </div>

            <div class="main-section-flex">
                <div class="lato-regular main-conteneur-actualites">
                    <h3>Événement de charité</h3>
                    <small>Le 20 février 2025,</small>

                    <p>
                        Reginald Stampee III organise un événement caritatif
                        pour soutenir Solidarité Sans Frontières. Une vente aux
                        enchères en ligne proposera des articles rares de
                        célébrités, d'artistes et de marques prestigieuses. Les
                        fonds récoltés serviront à financer des initiatives
                        visant à améliorer les conditions de vie des populations
                        vulnérables. Rejoignez-nous le 20 février pour faire une
                        différence.
                    </p>
                </div>

                <div class="lato-regular main-conteneur-actualites">
                    <h3>
                        Vente aux enchères des monnaies du royaume de France
                    </h3>
                    <small>Le 1 mars 2025,</small>
                    <p>
                        Participez à une vente aux enchères exceptionnelle de
                        monnaies du Royaume de France, couvrant mille ans
                        d’histoire. Découvrez des pièces rares, des rois
                        Mérovingiens aux Bourbons, incluant des Louis d’or, des
                        écus de France et bien d’autres. Un expert numismatique
                        sera présent pour fournir des détails sur l’authenticité
                        des pièces. Rendez-vous le 15 mars. Plus d’infos sur
                        Facebook.
                    </p>
                </div>

                <div class="lato-regular main-conteneur-actualites">
                    <h3>
                        Postes Canada émettra des timbres en hommage à cinq
                        écrivains canadiens
                    </h3>
                    <small>Le 17 mars 2025,</small>
                    <p>
                        Postes Canada honore cinq écrivains canadiens en
                        émettant une série de timbres commémoratifs. Ces timbres
                        célèbrent l'héritage littéraire, mettant en lumière des
                        auteurs tels que Gabrielle Roy, Michel Tremblay,
                        Marie-Claire Blais, Jean-Louis Roux et Roger Lemelin.
                        Les timbres offrent une occasion unique de valoriser la
                        culture.
                    </p>
                </div>
            </div>
        </div>

        <footer>
            <div class="PieDePage-menu">
                <article class="h5">
                    <h5>CONTACTEZ-NOUS</h5>
                    <ul class="flex-column">
                        <li><a href="">Angleterre</a></li>
                        <li><a href="">Canada</a></li>
                        <li><a href="">US</a></li>
                        <li><a href="">Australie</a></li>
                    </ul>
                </article>

                <article class="h5">
                    <h5>À PROPOS DE LORD REGINALD STAMPIE III</h5>
                    <ul class="flex-column">
                        <li><a href="">La philatélie, c’est la vie.</a></li>
                        <li><a href="">Biographie du Lord</a></li>
                        <li><a href="">Historique familial</a></li>
                    </ul>
                </article>

                <div class="pieDePage-logo-flex">
                    <img
                        class="logo"
                        src="{{asset}}/images/logolsb.png"
                        alt="logoStampee"
                    />

                    <div class="icons PiedDePage-icons">
                        <img
                            class="PieDePage-drapeau"
                            src="{{asset}}/images/drapeau.png"
                            alt="drapeau"
                        />
                        <div class="PieDePage-drapeau-texte">
                            <p>FR▼</p>
                        </div>
                    </div>
                </div>

                <article class="h5">
                    <h5>FONCTIONNEMENT DE LA PLATEFORME</h5>
                    <ul class="flex-column">
                        <li><a href="">Créer un Profil </a></li>
                        <li><a href="">Comment placer une offre</a></li>
                        <li><a href="">Suivre une enchère </a></li>
                        <li><a href="">Trouver l’enchère désirée </a></li>
                        <li><a href="">contacter le webmestre</a></li>
                    </ul>
                </article>

                <article class="h5">
                    <h5>ACTUALITÉS</h5>

                    <ul class="flex-column">
                        <li><a href="">Timbres</a></li>
                        <li><a href="">Enchères</a></li>
                        <li><a href="">Bride</a></li>
                    </ul>
                </article>
            </div>

            <div class="PiedDePage-icons">
                <img class="icon" src="{{asset}}/images/x.png" alt="X" />
                <img class="icon" src="{{asset}}/images/insta.png" alt="instagram" />
                <img class="icon" src="{{asset}}/images/face.png" alt="facebook" />
            </div>

            <div>
                <small>
                    conditions d'utilisation - cookie stratégie - Avis de
                    confidentialité. Publicités basées sur les intérêts Juan
                    Hernandez ®2025. LordStampee.com, Inc. ou ses affiliés
                </small>
            </div>
        </footer>
    </body>
</html>
