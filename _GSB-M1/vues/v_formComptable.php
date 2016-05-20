<script type="text/javascript">
<!--
function verif_formulaire()
{
 if(document.formulaire.nom.value == "")  {
   alert("Veuillez entrer votre nom!");
   document.formulaire.nom.focus();
   return false;
  }
  
  if(document.formulaire.ville.value == "")  {
   alert("Veuillez entrer votre ville!");
   document.formulaire.ville.focus();
   return false;
  }
   if(document.formulaire.prenom.value == "")  {
   alert("Veuillez entrer votre prenom!");
   document.formulaire.prenom.focus();
   return false;
  }
 if(document.formulaire.adresse.value == "") {
   alert("Veuillez entrer votre lieu de résidence!");
   document.formulaire.adresse.focus();
   return false;
  }

 if(document.formulaire.cp.value == "") {
   alert("Veuillez entrer votre code postal !");
   document.formulaire.cp.focus();
   return false;
  }
 var chkZ = 1;
 for(i=0;i<document.formulaire.cp.value.length;++i)
   if(document.formulaire.cp.value.charAt(i) < "0" || document.formulaire.cp.value.charAt(i) > "9")
     chkZ = -1;
 if(chkZ == -1) {  
   alert("Votre code postal doit être un nombre!");
   document.formulaire.cp.focus();
   return false;
  }
}
//-->
</script>
<h2>Informations personnel</h2>
<div id="Tcontenu">
    <form method='POST'  action='index.php?uc=param&action=infosForm' name="formulaire" onSubmit="return verif_formulaire()">
      <fieldset style="">
        <legend>  </legend>
            <label for="nom" id="pForm">Nom* : </label><input id="nom" class="InForm" type="text" name="nom" size="30"value="<?php echo $_SESSION['nom'] ?>" /><br />
            <label for="prenom" id="pForm">Prenom* : </label><input id="prenom" class="InForm" type="text" name="prenom" size="30" value="<?php echo $_SESSION['prenom']   ?>"/><br />
            <label for="add" id="pForm">Adresse* : </label><input id="add" class="InForm" type="text" name="adresse" size="30" value="<?php echo $_SESSION['adresse']   ?>"/><br />
            <label for="ville" id="pForm">ville* : </label><input id="ville" id="InForm" type="text" name="ville" size="30" value="<?php echo $_SESSION['ville']  ?>"/><br />
            <label for="cp" id="pForm">cp* : </label><input id="cp" class="InForm" type="text" name="cp" size="30" value="<?php echo $_SESSION['cp']  ?>"/><br />            
            <input type="submit" value="valider" style="width: 40%;position: relative;margin-right: 8%;"/>
            <input type="reset" value="Annuler" style="width: 40%;margin-left: 8%;position: relative;"/>
      </fieldset>
    </form>
</div>
