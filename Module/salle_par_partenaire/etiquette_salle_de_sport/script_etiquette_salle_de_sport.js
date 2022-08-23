function script_etiquette_salle_de_sport() {

	var txt;
	if (confirm('êtes-vous sûr de vouloir modifier le statut de ce partenaire ? Un mail automatique sera envoié au client')) {
		txt = 'Oui';
		return true;
	} else {
		txt = 'Non';
		return false;
    }
	}