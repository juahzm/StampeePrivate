{{ include('layouts/header.php', {title:'Profil dutilisateur'})}}


<div class="titres rosarivo-regular-italic ">
    <h2>Bonjour, {{session.name_user}}! </h2>
</div>

<div class="profil_conteneur ">

    <div class="profil_conteneur_basis">

        <div class="titres rosarivo-regular">

            <h2>Informations personnelles</h2>
        </div>
        <div class="profil_conteneur_perso">

            <div class="flex-row">
                <h3>Nom:</h3>
                <p>{{session.name_user}}</p>
            </div>

            <div class="flex-row">
                <h3>email:</h3>
                <p>{{session.email_user}}</p>
            </div>
        </div>
    </div>


    <div class="profil_conteneur_basis">

        <div class="titres rosarivo-regular">
            <h2>L'historique des offres</h2>
        </div>
        <div class="carte-profil">

            {% for a in mise %}

            <div class="h4 titres rosarivo-regular">
                <p>Timbre: {{ a.nametimbre }}</p>
            </div>
            <div class="flex-row carte-profil">
                <img src="{{ upload }}{{ a.Imageurl }}" alt="Timbre Image">

                <div>
                    <p>La Valeur du Mise: $ {{ a.valeurdemise }} CAD</p>
                    <p>Le Prix de base: $ {{ a.priceenchere }} CAD</p>
                    <p>La Date du fin: {{ a.enddateperiod}}</p>
                </div>
            </div>

            <br>
            {% endfor %}

        </div>

    </div>


</div>



{{ include('layouts/footer.php')}}