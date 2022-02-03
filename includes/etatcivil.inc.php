<?php
if(isset($_POST['frm'])) {
    $declarant = $_POST['declarant'] ?? '';
    $nom = htmlentities(trim($_POST['nom'])) ?? '';
    $prenom = htmlentities(trim($_POST['prenom'])) ?? '';
    $adresse1 = htmlentities(trim($_POST['adresse1'])) ?? '';
    $adresse2 = htmlentities(trim($_POST['adresse2'])) ?? '';
    $cp = htmlentities(trim($_POST['cp'])) ?? '';
    $ville = htmlentities(trim($_POST['ville'])) ?? '';
    $tel = htmlentities(trim($_POST['tel'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? '';
    $situation = htmlentities(trim($_POST['situation'])) ?? '';
    $dateNaissance = htmlentities(trim($_POST['dateNaissance'])) ?? '';
    $villeNaissance = htmlentities(trim($_POST['villeNaissance'])) ?? '';

    $erreur = array();

    if (strlen($declarant) === 0)
        array_push($erreur, "Veuillez saisir votre genre");
    
    if (strlen($nom) === 0)
        array_push($erreur, "Veuillez saisir votre nom");
    
    if (strlen($prenom) === 0)
        array_push($erreur, "Veuillez saisir votre prénom");

    if (strlen($adresse1) === 0)
        array_push($erreur, "Veuillez saisir votre adresse");   

    if (strlen($cp) === 0)
        array_push($erreur, "Veuillez saisir votre code postal");

    if (strlen($ville) === 0)
        array_push($erreur, "Veuillez saisir votre code ville");

    if (strlen($tel) === 0)
        array_push($erreur, "Veuillez saisir votre code numéro de téléphone");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, "Veuillez saisir un e-mail valide");

    if ($situation === '')
        array_push($erreur, "Veuillez sélectionner votre situation maritale");
    
    if (strlen($ville) === 0)
        array_push($erreur, "Veuillez sélectionner une ville de naissance");

    if (count($erreur) === 0) {
        $queryString = "INSERT INTO users (id_user, declarant , nom, prenom, adresse1, adresse2, cp, ville, tel, mail, situation, dateNaissance, villeNaissance)
        VALUES (NULL, '$declarant', '$nom', '$prenom', '$adresse1', '$adresse2', '$cp', '$ville', '$tel', '$email', '$situation', '$dateNaissance', '$villeNaissance');";
        $requete = new Sql;
        $requete->insertion($queryString);
        echo "<p>Votre demande a bien été enregistrée.</p>";
    }
    else {
        $messageErreur = "<ul>";
        $i = 0;
        do {
            $messageErreur .= "<li>";
            $messageErreur .= $erreur[$i];
            $messageErreur .= "</li>";
            $i++;
        } while ($i < count($erreur));

        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmEtatCivil.php';
    }
}

else {
    echo "Merci de renseigner le formulaire";
    $declarant = $nom = $prenom = $adresse1 = $adresse2 = $cp = $ville = $tel = $email = $situation = $dateNaissance = $villeNaissance = '';
    include './includes/frmEtatCivil.php';
}
