Gestionnaire de salle de sport:

![alt text](Img/marque_de_sport.png)

Pour utiliser ce projet en local:

1: télécharger le projet dans votre serveur local (comme par exemple xampp ou wamp) (dossier httdocs ou www)

2: importer les tables de données par défaut dans votre gestionnaire de base de donnée (par exemple mysql):
-a: créer une base de donnée vide
-b: cliquer sur importer 
-c: choisissez le fichier "sport_default.sql"
-d: cliquer sur ok

3: rentrer l'adresse pdo de votre base de donnée dans le fichier env/secret2.php

4: créer vous un compte sur le gestionnaire de mail sendinblue: 
https://fr.sendinblue.com/?utm_source=bingads_brand&utm_medium=lastclick&utm_content=SendinBlue&utm_extension&utm_term=sendinblue&utm_matchtype=e&utm_campaign=FR_FRA%2FBEL%2FSWI%2FLUX_Search_Brand_Bing_SIB&bing_campaignid=278665402&utm_network=o&km_adid=75728936348275&km_adposition&km_device=c&utm_adgroupid=1211662011380132&msclkid=64de9b893c671414ee5ef898fdef330b 

5: rentrer votre clès api sendinblue dans le dossier env/secret.php (attention à bien garder cette clès secrète et à ne pas la publier en public sur github !)

6: télécharger grâce aux liens dans env/template_sendinblue.php les templates des mails (ou créer vos templates)

7: entrez les id de vos templates dans les variables $Id_ dans env/template_sendinblue.php (attention à ne pas mettre de guillemée: remplacé simplement le texte "mettez_id_template" par un chiffre ).

8: visualisez la page d'accueil de l'application et rentrez l'identifiant et le mot de passe de l'administrateur: 
-par defaut:
--admin
--inputBox
(possibilité de changer les données de l'administrateur dans la table "password")

remarque: le mot de passe doit être crypté en utilisant la fonction md5(): voir https://www.md5.fr/

9: vous pouvez rajouter un client en cliquant sur le bouton "inscrire un partenaire"

10: compléter le formulaire et valider (rentrez votre adresse mail si vous voulez recevoir le mail automatique)

11: cliquez sur le bouton "retourner voir les salles"

12: compléter le formulaire d'ajout de salle de sport (au bas de la page)

13: cliquez sur le bouton "retourner voir les partenaires"
 




