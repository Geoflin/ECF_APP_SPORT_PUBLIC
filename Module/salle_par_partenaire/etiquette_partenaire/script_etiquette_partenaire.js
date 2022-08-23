function script_etiquette_partenaire() {

    var checked_partenaire_actif = document.forms["statut_partenaire"]["checked_partenaire_actif"];
    var value = document.forms["statut_partenaire"]["value"];
    var actif = document.forms["statut_partenaire"]["actif"];
    /*
    if (actif.value == "1" && value.value == "0") {
        alert("Vous n'avez pas modifié le statut du partenaire");
        checked_partenaire_actif.focus();
        return false;
      }
      */

	var txt;
	if (confirm('êtes-vous sûr de vouloir modifier le statut de ce partenaire ? Un mail automatique sera envoié au client')) {
		txt = 'Oui';
		return true;
	} else {
		txt = 'Non';
		return false;
    }
	}

    /*
    function checkbox() {
    
        var txt;
        if (confirm('êtes-vous sûr de vouloir modifier le statut de ce partenaire ? Un mail automatique sera envoié au client')) {
            txt = 'Oui';
            return true;
        } else {
            txt = 'Non';
            return false;
        }
        }   
      */  