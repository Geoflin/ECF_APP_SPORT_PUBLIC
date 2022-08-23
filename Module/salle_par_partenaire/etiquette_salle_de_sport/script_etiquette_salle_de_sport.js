function script_etiquette_salle_de_sport() {

	var txt;
	if (confirm('êtes-vous sûr de vouloir modifier le statut de cette salle de sport ? Un mail automatique sera envoié au client')) {
		txt = 'Oui';
		return true;
	} else {
		txt = 'Non';
		return false;
    }
	}