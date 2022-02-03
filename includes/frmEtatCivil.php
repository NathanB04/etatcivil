<form action="index.php?page=etatcivil" method="post">
    <p>Déclarant&nbsp;:</p>
    <label>Madame :</label><input type="radio" name="declarant" value="madame" <?php if($declarant === 'madame') echo "checked"; ?>/><br />
    <label>Monsieur :</label><input type="radio" name="declarant" value="monsieur" <?php if($declarant === 'monsieur') echo "checked"; ?> /><br />
    <label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="<?php echo $nom;?>" /><br />
    <label for="prenom">Prénom :</label><input type="text" id="prenom" name="prenom"  value="<?php echo $prenom;?>" /><br />
    <label for="adresse1">Adresse :</label><input type="text" id="adresse1" name="adresse1"  value="<?php echo $adresse1;?>" /><br />
    <label for="adresse2">Complément d'adresse :</label><input type="text" id="adresse2" name="adresse2"  value="<?php echo $adresse2;?>" /><br />
    <label for="cp">Code postal :</label><input type="text" id="cp" name="cp"  value="<?php echo $cp;?>" /><br />
    <label for="ville">Ville :</label><input type="text" id="ville" name="ville"  value="<?php echo $ville;?>" /><br />
    <label for="tel">Téléphone :</label><input type="text" id="tel" name="tel"  value="<?php echo $tel;?>" /><br />
    <label for="email">e-mail :</label><input type="email" id="email" name="email"  value="<?php echo $email;?>" /><br />
    <label>Situation matrimonale</label>
    <select name="situation">
        <option value="" <?php if($situation === "") echo "selected"; ?>></option>
        <option value="marie" <?php if($situation === "marie") echo "selected"; ?>>Marié</option>
        <option value="concubinage" <?php if($situation === "concubinage") echo "selected"; ?>>Concubinage</option>
        <option value="celibataire" <?php if($situation === "celibataire") echo "selected"; ?>>Célibataire</option>
        <option value="veuf" <?php if($situation === "veuf") echo "selected"; ?>>Veuf(ve)</option>
    </select>
    <label for="dateNaissance">Date de naissance :</label><input type="date" id="dateNaissance" name="dateNaissance"  value="<?php echo $dateNaissance;?>" /><br />
    <label for="villeNaissance">Ville de naissance :</label><input type="text" id="villeNaissance" name="villeNaissance"  value="<?php echo $villeNaissance;?>" /><br />
    <input type="reset" value="Effacer" />
    <input type="submit" value="Valider" />
    <input type="hidden" name="frm" />
</form>