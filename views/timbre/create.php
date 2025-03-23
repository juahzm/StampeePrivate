{{ include('layouts/header.php', {title:'Profil dutilisateur'})}}



<div class="body-create">
<form method="post">
            <div class="titres rosarivo-regular-italic">
            <img
                    class="logo"
                    src="{{asset}}/images/logolsPrussian.png"
                    alt="logoStampee"
                />
                
            </div>
            <h1>Veuillez créer votre timbre.</h1>

        <div class="lato-regular usercreatecontainer">


            <label>Nom du timbre
                <input type="text" name="nameuser" value="{{timbre.nametimbre}}" >
            </label>
            <span class="errors"> {{errors.nametimbre}}</span>
            <label>Description du  timbre
                <input type="text" name="descriptiontimbre" value="{{timbre.descriptiontimbre}}" >
            </label>
            <span class="errors"> {{errors.descriptiontimbre}}</span>
            <label>Valeur historique
                <input type="text" name="historyvaluetimbre" value="{{timbre.historyvaluetimbre}}" >
            </label>
            <span class="errors"> {{errors.historyvaluetimbre}}</span>
            <label>Date de creation
                <input type="date" name="datecreationtimbre" value="{{timbre.datecreationtimbre}}" >
            </label>
            <span class="errors" > {{errors.datecreationtimbre}}</span>
            <label>Dimensions
                <input type="text" name="dimensiontimbre" value="{{timbre.dimensiontimbre}}" >
            </label>
            <span class="errors" > {{errors.dimensiontimbre}}</span>

            <label>Tirage
                <input type="number" name="tiragetimbre" value="{{timbre.tiragetimbre}}" >
            </label>
            <span class="errors" > {{errors.tiragetimbre}}</span>


            <label class="select_area">Timbre certifié
            <select name="certifietimbre" value="{{timbre.certifietimbre}}" >
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
            </label>



            <label class="select_area">Pays
                <select name="countryidcountry">
                {% for country in countries %}
                <option value="{{country.idcountry}}">{{ country.namecountry}}</option>
                {% endfor %}
                </select>

            </label>

            <label class="select_area">Condition
                <select name="conditionsidconditions">
                {% for condition in conditions %}
                <option value="{{conditions.idcondition}}">{{ condition.namecondition}}</option>
                {% endfor %}
                </select>
                
            </label>

            <label class="select_area">Couleur
                <select name="coloridcolor">
                {% for color in colors %}
                <option value="{{color.idcolor}}">{{ color.namecolor}}</option>
                {% endfor %}
                </select>
                
            </label>


            <input type="submit" value="Soumettre"class="bouton">

        </div>  


</form>
</div>


{{ include('layouts/footer.php')}}












