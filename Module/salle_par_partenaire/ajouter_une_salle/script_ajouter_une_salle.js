function script_ajout_salle_de_sport() {

		var txt;
		if (confirm('êtes-vous sûr de vouloir ajouter cette salle de sport ? Un mail automatique sera envoié au partenaire et à la nouvelle structure')) {
			txt = 'Oui';
			return true;
		} else {
			txt = 'Non';
			return false;
		}
		}