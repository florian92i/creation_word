<?php




//On récupère le contenu brut du fichier xml modèle
    $myContent = file_get_contents( "flo.xml" );


//On remplace les mots-clés, un à un
    $myContent = str_replace( "@PRENOM@",''. $_POST['user_name'] .'', $myContent );



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

    $newFileHandler = fopen( "nomDuFichier.doc", "a" );
    fwrite( $newFileHandler, $myContent );
    fclose( $newFileHandler );



//On a fini


?>