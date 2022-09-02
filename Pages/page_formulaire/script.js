function myFunction() {

    var name = document.forms["inscription_partenaire_1"]["client_name"];
    var password = document.forms["inscription_partenaire_1"]["password"];
    var short_description = document.forms["inscription_partenaire_1"]["short_description"];
    var full_description = document.forms["inscription_partenaire_1"]["full_description"];
    var urll = document.forms["inscription_partenaire_1"]["urll"];
    var mail = document.forms["inscription_partenaire_1"]["mail"];

    
    if (name.value == "") {
        alert("Vous n'avez pas rentré le nom de la marque de sport");
        name.focus();
        return false;
      }
      if (password.value == "") {
        alert("Vous n'avez pas rentré votre mot de passe");
        password.focus();
        return false;
      }
      if (short_description.value == "") {
        alert("Vous n'avez pas rentré de description courte");
        short_description.focus();
        return false;
      }
      if (full_description.value == "") {
        alert("Vous n'avez pas rentré de description longue");
        full_description.focus();
        return false;
      }
      if (urll.value == "") {
        alert("Vous n'avez pas rentré d'url");
        urll.focus();
        return false;
      }
      if (mail.value == "") {
        alert("Vous n'avez pas rentré de mail");
        mail.focus();
        return false;
      }

	var txt;
	if (confirm('êtes-vous sûr de vouloir inscrire cette marque de sport ?')) {
		txt = 'Oui';
		return true;
	} else {
		txt = 'Non';
		return false;
	}
}
