{{ include('layouts/header.php', {title:'Editer un timbre'})}}



<div class="body-create">
<form method="post" enctype="multipart/form-data">
       
            <div class="titres rosarivo-regular-italic">
                <h1>Editez votre timbre.</h1>
            </div>


            <div class="flex-column">

            <div class="lato-regular usercreatecontainer">

            <label>
                <input type="hidden" name="idtimbre" value="{{timbre.idtimbre}}" >
            </label>

          
            <label>Le nom du timbre
                <input type="text" name="nametimbre" value="{{timbre[0].nametimbre}}" >
            </label>
            <span class="errors"> {{errors.nametimbre}}</span>
            <label>La description du  timbre
                <input class="input_description" type="text" name="descriptiontimbre" value="{{timbre[0].descriptiontimbre}}" >
            </label>
            <span class="errors"> {{errors.descriptiontimbre}}</span>
            <label>Son Valeur historique
                <input class="input_description"  type="text" name="historyvaluetimbre" value="{{timbre[0].historyvaluetimbre}}" >
            </label>
            <span class="errors"> {{errors.historyvaluetimbre}}</span>
            <label>La date de création du timbre
                <input type="date" name="datecreationtimbre" value="{{timbre[0].datecreationtimbre}}" >
            </label>
            <span class="errors" > {{errors.datecreationtimbre}}</span>
            <label>Ses dimensions wxh(mm)
                <input type="text" name="dimensiontimbre" value="{{timbre[0].dimensiontimbre}}" >
            </label>
            <span class="errors" > {{errors.dimensiontimbre}}</span>

            <label>Tirage
                <input type="number" name="tiragetimbre" value="{{timbre[0].tiragetimbre}}" >
            </label>
            <span class="errors" > {{errors.tiragetimbre}}</span>

            </div>
           
            

            <div class="lato-regular usercreatecontainer">

            <div class="flex-row">
            <label class="select_area">Timbre certifié
            <select name="certifietimbre">
                <option value="1" {% if timbre[0].certifietimbre == "Oui"  %} selected {% endif %}>Oui</option>
                <option value="0" {% if timbre[0].certifietimbre == "Non" %} selected {% endif %}>Non</option>
            </select>
        </label>


            <!-- <label class="select_area">Pays
        <select name="countryidcountry">
        {% for country in countries %}
            <option value="{{country.idcountry}}" {%if timbre.countryidcountry == country.idcountry %} selected {% endif %}>{{ country.namecountry }}</option>
        {% endfor %}
        </select>
        </label>
             {% if errors.countryidcountry is defined %}
                <span class="errors"> {{errors.countryidcountry}}</span>
            {% endif %} -->




            <label class="select_area">Pays
            <select name="countryidcountry">
                {% for country in countries %}
            <option value="{{ country.idcountry }}" {% if country.idcountry == timbre[0].countryidcountry %} selected {% endif %}>
                {{ country.namecountry }}
                </option>
            {% endfor %}
            </select>
            </label>


            <label class="select_area">Condition
                <select name="conditionsidconditions">
                {% for condition in conditions %}
                <option value="{{condition.idcondition}}"{% if condition.idcondition == timbre[0].conditionsidconditions %} selected {% endif %}>{{ condition.namecondition}}</option>
                {% endfor %}
                </select>
               </label>
                
        

            <label class="select_area" >Couleur
                <select name="coloridcolor">
                {% for color in colors %}
                <option value="{{color.idcolor}}"{% if color.idcolor == timbre[0].coloridcolor %} selected {% endif %}>{{ color.namecolor}}</option>
                {% endfor %}
                </select>
                
              </label>
</div>

<div class="timbrecreatecontainer flex-column">
    <label class="select_area_img">Sélectionner l'image principale
        <input type="file" name="Imageurl[]" id="imageurl1" required>
        {% for error in errors.Imageurl %}
            <span class="errors">{{ error.Imageurl }}</span>
        {% endfor %}
    </label>
</div>

<div class="timbrecreatecontainer flex-column">
    <label class="select_area_img">Sélectionner une autre image
        <input type="file" name="Imageurl[]" id="imageurl2">
        {% for error in errors.Imageurl %}
            <span class="errors">{{ error }}</span>
        {% endfor %}
    </label>
</div>

<div class="timbrecreatecontainer flex-column">
    <label class="select_area_img">Sélectionner une autre image
        <input type="file" name="Imageurl[]" id="imageurl2">
        {% for error in errors.Imageurl %}
            <span class="errors">{{ error }}</span>
        {% endfor %}
    </label>
</div>

<div class=" timbrecreatecontainer flex-column">
    <label class="select_area_img">Sélectionner une autre image
        <input type="file" name="Imageurl[]" id="imageurl2">
        {% for error in errors.Imageurl %}
            <span class="errors">{{ error }}</span>
        {% endfor %}
    </label>
</div>


            <input type="submit" value="Soumettre"class="bouton">

        </div>  

</div>


</form>
</div>


{{ include('layouts/footer.php')}}