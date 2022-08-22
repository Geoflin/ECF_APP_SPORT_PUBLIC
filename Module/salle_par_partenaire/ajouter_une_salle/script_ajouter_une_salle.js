function myFunction() {

    var Nom = document.forms["ajouter_une_salle"]["Nom"];
    var zones = document.forms["ajouter_une_salle"]["zones"];
    var branche = document.forms["ajouter_une_salle"]["branche"];
    
    if (Nom.value == "") {
        alert("Vous n'avez pas rentré le nom de la marque de sport");
        Nom.focus();
        return false;
      }
      if (zones.value == "") {
        alert("Vous n'avez pas rentré votre mot de passe");
        zones.focus();
        return false;
      }
      if (branche.value == "") {
        alert("Vous n'avez pas rentré de description courte");
        branche.focus();
        return false;
      }

	var txt;
	if (confirm('êtes-vous sûr de vouloir ajouter cette marque de sport ?')) {
		txt = 'Oui';
		return true;
	} else {
		txt = 'Non';
		return false;
    }
	}
