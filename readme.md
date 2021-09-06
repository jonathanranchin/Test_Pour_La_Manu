# Note de fonctionnement
Il est nécessaire d'initialiser la base de donnée (fichier patients.sql) avant des composant du site
J'ai monté ce projet en me servant du Wampserver en VirtualHost et php PHP 8.0.10.
Je ne peux pas garantir de résultat dans d'autre configuration mais le code peut être réadapté.

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