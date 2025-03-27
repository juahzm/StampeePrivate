{{ include('layouts/header.php', {title:'Profil dutilisateur'})}}



<div class="body-create">
<form method="post" enctype="multipart/form-data">
       
            <div class="titres rosarivo-regular-italic">
                <h1>Veuillez créer votre timbre.</h1>
            </div>


            <div class="flex-row">

            <div class="lato-regular usercreatecontainer">

            <label>
                <input type="hidden" name="idtimbre" value="{{timbre.idtimbre}}" >
            </label>


            <label>Le nom du timbre
                <input type="text" name="nametimbre" value="{{timbre.nametimbre}}" >
            </label>
            <span class="errors"> {{errors.nametimbre}}</span>
            <label>La description du  timbre
                <input class="input_description" type="text" name="descriptiontimbre" value="{{timbre.descriptiontimbre}}" >
            </label>
            <span class="errors"> {{errors.descriptiontimbre}}</span>
            <label>Son Valeur historique
                <input class="input_description"  type="text" name="historyvaluetimbre" value="{{timbre.historyvaluetimbre}}" >
            </label>
            <span class="errors"> {{errors.historyvaluetimbre}}</span>
            <label>La date de création du timbre
                <input type="date" name="datecreationtimbre" value="{{timbre.datecreationtimbre}}" >
            </label>
            <span class="errors" > {{errors.datecreationtimbre}}</span>
            <label>Ses dimensions wxh(mm)
                <input type="text" name="dimensiontimbre" value="{{timbre.dimensiontimbre}}" >
            </label>
            <span class="errors" > {{errors.dimensiontimbre}}</span>

            <label>Tirage
                <input type="number" name="tiragetimbre" value="{{timbre.tiragetimbre}}" >
            </label>
            <span class="errors" > {{errors.tiragetimbre}}</span>

            </div>

            

            <div class="lato-regular usercreatecontainer">

            <div class="flex-row">
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
                <option value="{{condition.idcondition}}">{{ condition.namecondition}}</option>
                {% endfor %}
                </select>
               </label>
                
        

            <label class="select_area" >Couleur
                <select name="coloridcolor">
                {% for color in colors %}
                <option value="{{color.idcolor}}">{{ color.namecolor}}</option>
                {% endfor %}
                </select>
                
              </label>
</div>


<div class="flex-row">
                    <label class="select_area_img">Sélectionner l'image  
                    <input type="file" name="imageurl[]" id="imageurl1">
                    </label>
                   
                    {% for error in errors.imageurl %}
                    <span class="error">{{error}}</span>
                    {% endfor %}
                  
            
                    <label class="select_area">C'est l'image principale?
                    <input type="radio" name="imageprimary" value="1"> Oui
                  
                    </label>

</div>

<div class="flex-row">

                    <label class="select_area_img">Sélectionner l'image   
                    <input type="file" name="imageurl[]" id="imageurl2">
                    </label>
                    
                    {% for error in errors.imageurl %}
                    <span class="error">{{error}}</span>
                    {% endfor %}
                   
            
                    <label class="select_area">C'est l'image principale?
                    <input type="radio" name="imageprimary" value="1"> Oui
                   
                    </label>

</div>

<!-- 
<div class="flex-row">

                    <label class="select_area_img">Sélectionner l'image 
                    <input type="file" name="imageurl[]" id="imageurl3">
                    </label>
                    <span class="error">{{error}}</span>
                      
            
                    <label class="select_area">C'est l'image principale?
                <input type="radio" name="imageprimary" value="1"> Oui
                
                    </label>
</div>
 -->
                

            <input type="submit" value="Soumettre"class="bouton">

        </div>  

</div>


</form>
</div>


{{ include('layouts/footer.php')}}












