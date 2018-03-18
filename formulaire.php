<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<h1>Crée votre lettre de motivation plus facilement !</h1>
<div class="row">
    <form class="col s8" action="creation_word.php" method="post">
        <div class="row">
            <div class="input-field col s4">
                <i class="material-icons prefix">folder_open</i>
                <input id="icon_telephone" type="tel" class="validate" name="nom_word" required>
                <label for="icon_telephone">Nom de votre Word</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="user_name" required>
                <label for="icon_prefix">Nom et prenom</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">place</i>
                <input id="icon_telephone" type="tel" class="validate" name="user_adresse" required>
                <label for="icon_telephone">Votre adresse</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">place</i>
                <input id="icon_telephone" type="tel" class="validate" name="user_code_postal" required>
                <label for="icon_telephone">Votre code postal</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">place</i>
                <input id="icon_telephone" type="tel" class="validate" name="user_ville" required>
                <label for="icon_telephone">Votre Ville</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">local_phone</i>
                <input id="icon_telephone" type="tel" class="validate" name="user_phone" required>
                <label for="icon_telephone">Votre Téléphone</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">email</i>
                <input id="icon_telephone" type="tel" class="validate" name="user_mail" required>
                <label for="icon_telephone">Votre Mail</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="tel" class="validate" name="name_entreprise" required>
                <label for="icon_telephone">Nom de l'entreprise</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">domain</i>
                <input id="icon_telephone" type="tel" class="validate" name="entreprise_adresse" required>
                <label for="icon_telephone">Adresse de l'entreprise</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="tel" class="validate" name="entreprise_postal" required>
                <label for="icon_telephone">Adresse postal de l'entreprise</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="tel" class="validate" name="entreprise_ville" required>
                <label for="icon_telephone">Ville de l'entreprise</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="tel" class="validate" name="ecole" required>
                <label for="icon_telephone">Nom de votre ecole</label>
            </div>

            <div class="input-field col s3">
                <select name="type_entreprise" required>
                    <option value="Entreprise" selected>Entreprise</option>
                    <option value="Start-up">Start-up</option>
                </select>
                <label>Type de structure</label>
            </div>
            <div class="input-field col s3">
                <select name="duree" required>
                    <option value="1" selected>1 mois</option>
                    <option value="2">2 mois</option>
                    <option value="3">3 mois</option>
                    <option value="4">4 mois</option>
                    <option value="5">5 mois</option>
                    <option value="6">6 mois</option>
                    <option value="7">7 mois</option>
                    <option value="8">8 mois</option>
                    <option value="9">9 mois</option>
                </select>
                <label>Durée du stage</label>
            </div>


            <div class="input-field col s3">
                <select name="annee" required>
                    <option value="2018" selected>2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
                <label>Année</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">today</i>
                <input type="text" class="datepicker" placeholder="debut du stage" name="debut_stage" required>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">today</i>

                <input type="text" class="datepicker" placeholder="fin du stage" name="fin_stage" required>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>

                <textarea id="textarea1" class="materialize-textarea" name="specialisation"></textarea>
                <label for="icon_telephone">Votre spécialisation (developement,du management, de la communication, du
                    marketing et du digital ...)</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="tel" class="validate" name="passion" required>
                <label for="icon_telephone">Passion pour le numerique (le code,l'inteligence artifielle,l'algoritmi
                    ...)</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_telephone" type="tel" class="validate" name="second_passion" required>
                <label for="icon_telephone">Second passion pour le numerique (le code,l'inteligence
                    artifielle,l'algoritmi ... )</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">business_center</i>
                <input id="icon_telephone" type="tel" class="validate" name="poster_souhaite" required>
                <label for="icon_telephone">Le poste pour lequel vous postulez</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('select').material_select();
    });

</script>
<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });
</script>
</body>
</html>