<?php

if (isset($_POST)) {

//On récupère le contenu brut du fichier xml modèle
    $myContent = file_get_contents( "lettre_motivation_php.xml" );


//On remplace les mots-clés, un à un
    $myContent = str_replace( "##NOM",''. $_POST['user_name']. '', $myContent );
    $myContent = str_replace( "##NOMVOTREADRESSE",''. $_POST['user_code_postal'] .'', $myContent );
    $myContent = str_replace( "##VOTREPOSTALE",''. $_POST['user_adresse'] .'', $myContent );
    $myContent = str_replace( "##VOTREVILLE",''. $_POST['user_ville'] .'', $myContent );
    $myContent = str_replace( "##PHONE",''. $_POST['user_phone'] .'', $myContent );
    $myContent = str_replace( "##MAIL",''. $_POST['user_mail'] .'', $myContent );
    $myContent = str_replace( "##NOMENTREPRISE",''. $_POST['name_entreprise'] .'', $myContent );
    $myContent = str_replace( "##ADRESSEENTREPRISE",''. $_POST['entreprise_adresse'] .'', $myContent );
    $myContent = str_replace( "##ENTREPRISEPOSTALE",''. $_POST['entreprise_postal'] .'', $myContent );
    $myContent = str_replace( "##DATEACTUELLE",''.strftime("%A %d %B %Y").'', $myContent );
    $myContent = str_replace( "##ENTREPRISEVILLE",''. $_POST['entreprise_ville'] .'', $myContent );
    $myContent = str_replace( "##ECOLE",''. $_POST['ecole'] .'', $myContent );
    $myContent = str_replace( "##TYPEENTREPRISE",''. $_POST['type_entreprise'] .'', $myContent );
    $myContent = str_replace( "##DUREE",''. $_POST['duree'] .'', $myContent );
    $myContent = str_replace( "##DEBUTDATE",''. $_POST['debut_stage'] .'', $myContent );
    $myContent = str_replace( "##FINDATE",''. $_POST['fin_stage'] .'', $myContent );
    $myContent = str_replace( "##ANNE",''. $_POST['annee'] .'', $myContent );
    $myContent = str_replace( "##SPECIALISATIONS",''. $_POST['specialisation'] .'', $myContent );
    $myContent = str_replace( "##PASSION",''. $_POST['passion'] .'', $myContent );
    $myContent = str_replace( "##SECONDPASSION",''. $_POST['second_passion'] .'', $myContent );
    $myContent = str_replace( "##POSTESOUHAITE",''. $_POST['poster_souhaite'] .'', $myContent );


    /*
     * Stucture du formulaire
     *
     * *********** TECHNOLOGIE ****************
     *
     *##NOM // majuscule a la premiere lettre et majuscule au nom
     *
     *##VOTREADRESSE
     *
     *##VOTREPOSTALE
     *
     *##VOTREVILLE
     *
     *##PHONE
     *
     *##MAIL
     *
     *##NOMENTREPRISE
     *
     *##ADRESSEENTREPRISE
     *
     * ##ENTREPRISEPOSTALE
     *
     * ##ENTREPRISEVILLE
     *
     * ##ECOLE
     *
     * ##DATEACTUELLE
     *
     * ##TYPEENTREPRISE (selection option entreprise,start-up)

     *
     *##DUREE
     *
     *
     *##DEBUTDATE
     *
     *##FINDATE
     *
     *##ANNE
     *
     *##SPECIALISATIONS ( du management, de la communication, du marketing et du digital)
     *
     *
     *
     * ##PASSION
     *
     * ##SECONDPASSION
     *
     * ##POSTESOUHAITE
     *
     */

//On crée le fichier généré

    $newFileHandler = fopen( "word_cree/".$_POST['nom_word'].".doc", "a" );
    fwrite( $newFileHandler, $myContent );
    fclose( $newFileHandler );

echo '<a href="http://fcompiegn.eemi.tech/word_test/word_cree/'. $_POST['nom_word'] .'.doc"
   download="'. $_POST['nom_word'] .'.doc">Télécharger votre document <3</a>';
}

//On a fini


?>


