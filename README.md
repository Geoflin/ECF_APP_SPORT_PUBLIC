ECF_APP_SPORT

Prénom : Geoffrey
Nom : MARHOFFER

Gestionnaire de salle de sport:

![alt text](Img/marque_de_sport.png)

Pour utiliser ce projet en local:

1: télécharger le projet dans votre serveur local (comme par exemple xampp ou wamp) (dossier httdocs ou www)

2: importer les tables de données par défaut dans votre gestionnaire de base de données (par exemple mysql):
-a: créer une base de données vide
-b: cliquer sur importer 
-c: choisissez le fichier "sport_default.sql"
-d: cliquer sur ok

3: rentrer l'adresse pdo de votre base de données dans le fichier env/secret2.php et dans le fichier 'Recherche_par_nom.php' (Module\page_des_partenaires\etiquette_partenaire\Gestion_des_filtres\Recherche_par_nom.php)

4: créez-vous un compte sur le gestionnaire de mail sendinblue: 
https://fr.sendinblue.com/?utm_source=bingads_brand&utm_medium=lastclick&utm_content=SendinBlue&utm_extension&utm_term=sendinblue&utm_matchtype=e&utm_campaign=FR_FRA%2FBEL%2FSWI%2FLUX_Search_Brand_Bing_SIB&bing_campaignid=278665402&utm_network=o&km_adid=75728936348275&km_adposition&km_device=c&utm_adgroupid=1211662011380132&msclkid=64de9b893c671414ee5ef898fdef330b 

5: rentrer votre clé api sendinblue dans le dossier env/secret.php (attention à bien garder cette clé secrète et à ne pas la publier en public sur github !)

6: télécharger grâce aux liens dans env/template_sendinblue.php les templates des mails (ou créer vos templates)

7: entrez-les id de vos templates dans les variables $Id_ dans env/template_sendinblue.php (attention à ne pas mettre de guillemée: remplacez simplement le texte "mettez_id_template" par un chiffre ).

8: visualisez la page d'accueil de l'application et rentrez l'identifiant et le mot de passe de l'administrateur: 
-par défaut:
--admin
--inputBox
(possibilité de changer les données de l'administrateur dans la table "password")

remarque: le mot de passe doit être crypté en utilisant la fonction md5(): voir https://www.md5.fr/

9: vous pouvez rajouter un client en cliquant sur le bouton "inscrire un partenaire"

10: compléter le formulaire et valider (rentrez votre adresse mail si vous voulez recevoir le mail automatique)

11: cliquez sur le bouton "retourner voir les salles"

12: compléter le formulaire d'ajout de salle de sport (au bas de la page)

13: cliquez sur le bouton "retourner voir les partenaires" 
 
14: créez une deuxième salle

15: cliquez sur "actif" puis "valider dans "Etiquette partenaire"

16: retournez à la page des partenaires

17: allez voir le mail de confirmation sur l'adresse mail du partenaire

18: réactivez votre partenaire

19: complétez et valider le formulaire "permissions " (attention ne fonctionne que si le partenaire et la salle sont actifs)

20: regardez les conséquences de cette action sur les permissions des salles et allez voir les mails du partenaire

21: activez une salle et désactivez une salle à l'aide des formulaires des "Etiquette structure"

22: constatez les changements et regardez les mails des structures

23: modifiez les permissions des structures dans "permission" (sous "Etiquette structure") (attention ne fonctionne que si le partenaire et la salle sont actifs)

24: allez voir les mails des partenaires et connectez-vous à leurs comptes à l'aide:
-des identifiants et mots de passe fournis dans le mail
-du bouton "mon espace client"

25: allez voir les mails des structures et connectez-vous à leurs comptes à l'aide:
-des identifiants et mots de passe fournis dans le mail
-du bouton "mon espace client"