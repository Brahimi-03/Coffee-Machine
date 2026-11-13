 ## Coffee Machine

## Présentation du projet

Coffee Machine est un projet de programmation réalisé dans le cadre d'un test technique de recrutement.

L'objectif est de développer une machine à café capable de gérer les commandes de boissons, les paiements, les stocks et les rapports de ventes.

Le projet est développé en PHP avec une approche de développement pilotée par les tests (TDD).

## Technologies utilisées

- PHP
- PHPUnit 9.6
- Composer
- Git et GitHub

## Installation

1. Cloner le dépôt :

   ```bash
   git clone https://github.com/Brahimi-03/Coffee-Machine.git
   ```

2. Accéder au dossier :

   ```bash
   cd Coffee-Machine
   ```

3. Installer les dépendances :

   ```bash
   composer install
   ```

## Exécution du projet

Pour afficher un exemple de rapport des ventes :

```bash
php rapport.php
```

## Exécution des tests

Pour lancer les tests automatisés avec PHPUnit :

```bash
./vendor/bin/phpunit tests
```

Sous Windows PowerShell :

```powershell
.\vendor\bin\phpunit tests
```

## Fonctionnalités réalisées

### Itération 1 — Préparation des boissons
- Préparation du thé, du café et du chocolat chaud.
- Gestion du nombre de sucres.
- Gestion de la cuillère mélangeuse.

### Itération 2 — Gestion des paiements
- Vérification du montant payé.
- Refus des commandes en cas de paiement insuffisant.
- Calcul et restitution de la monnaie.

### Itération 3 — Boissons supplémentaires
- Ajout du jus d'orange.
- Gestion des boissons extra chaudes.

### Itération 4 — Rapport des ventes
- Comptabilisation des boissons vendues.
- Calcul des recettes totales.
- Génération d'un rapport consultable dans la console.

## Tests

Les fonctionnalités sont vérifiées à l'aide de PHPUnit.

État actuel : **13 tests réussis sur 13.**

