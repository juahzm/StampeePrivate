{{ include('layouts/header.php', {title:'Profil dutilisateur'})}}


<div class="titres rosarivo-regular-italic ">
<h2>Bonjour, {{session.name_user}}! </h2>
</div>

<div class="profil_conteneur ">

    <div class="profil_conteneur_basis">

            <div class="titres rosarivo-regular">
    
                <h2>Informations personnelles</h2>
                </div>
        <div class="flex-column">

                <h3>Nom:</h3>
                <p>{{session.name_user}}</p>
                    
                <h3>email:</h3>
                <p>{{session.email_user}}</p>
        </div>
    </div>

    <div class="profil_conteneur_basis">

            <div class="titres rosarivo-regular">
                <h2>Les favorites</h2>
            </div>
        <div class="flex-column">
            
                    
                
        </div>

    </div>

    <div class="profil_conteneur_basis">

        <div class="titres rosarivo-regular">
                <h2>L'historique des offres</h2>
        </div>
        <div class="flex-column">
                    
                
        </div>

    </div>


</div>



{{ include('layouts/footer.php')}}