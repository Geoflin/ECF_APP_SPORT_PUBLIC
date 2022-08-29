function script_etiquette_partenaire() {

	var txt;
	if (confirm('êtes-vous sûr de vouloir modifier le statut de ce partenaire ? Un mail automatique sera envoié au client')) {
		txt = 'Oui';
		return true;
	} else {
		txt = 'Non';
		return false;
    }
	}

	function script_permissions_globales() {

		var txt;
		if (confirm('êtes-vous sûr de vouloir modifier toute les permissions de vos salles ? Un mail automatique vous sera envoié')) {
			txt = 'Oui';
			return true;
		} else {
			txt = 'Non';
			return false;
		}
		}