# Note de fonctionnement
Il est nécessaire d'initialiser la base de donnée (fichier patients.sql) avant des composant du site
J'ai monté ce projet en me servant du Wampserver en VirtualHost et php PHP 8.0.10.

1 Il faut commencer par mettre ce dossier dans le folder www de l'installation wamp. 
2 Je vous recommande de créer votre base de données aves les queries de patients.sql (avec MYSQL de WAMP ou avec l'usage de Workbench).
3 Ensuite il faut aller sur localhost de wamp et créer un VurtualHost. (il vous faudra lui donner un nom et indiquer le path du dossier)
4 Finallement il sera nécessaire de redémarrer le serveur DNS dans "tools" de Wamp. (accès sur Wamp avec un click gauche)

Je ne peux pas garantir de résultat dans d'autre configuration mais le code peut bien sûr être réadapté ou initialisé d'une autre façon.

# Exercice à Réaliser

## Légende
'=>' Lien entre page.
'->' Fonctionalité accessible sur une page.

### Exercice 1

index.php => ajout-patient.php -> créer un patient 

### Exercice 2

liste-patients.php -> la liste des patients 
liste-patients.php -> création de patients

### Exercice 3

liste-patients.php => profil-patient.php -> les informations d'un patient

### Exercice 4

profil-patient.php => modify-patient.php 

### Exercice 5

index.php => ajout-rendezvous.php -> créer un rendez-vous

### Exercice 6

liste-rendezvous.php -> la liste des rendez-vous 
liste-rendezvous.php => ajout-rendezvous.php -> créer un rendez-vous

### Exercice 7

liste-rendezvous.php => rendezvous.php -> les informations d'un rendez-vous

### Exercice 8

rendezvous.php => modify-rdv.php

### Exercice 9

profil-patient.php -> la liste de ses rendez-vous

### Exercice 10

liste-rendezvous.php -> la suppression d'un rendez-vous

### Exercice 11

liste-patients.php -> la suppression d'un patient et ses rendez-vous

### Exercice 12

liste-patients.php -> un champs de recherche

### Exercice 13

liste-patients.php -> créer une pagination

### Exercice 14

index.php => ajout-patient-rendez-vous.php -> d'enregistrer simultanément un patient et un rendez vous