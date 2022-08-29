<p align="center">
  <img width="200" src="https://gadia.valbion.com/assets/img/logo_color.svg" alt="Logo">
  <h1 align="center">Gadia</h1>
  <h3 align="center">Prochain niveau de Vie Scolaire</h3>
</p>
<p align="center">
    <a href="http://discord.gadia.valbion.com"><img alt="Discord" src="https://img.shields.io/discord/861887344482844672?color=5865F2&label=Rejoignez%20notre%20Discord&logo=discord&logoColor=fff&style=for-the-badge"></a><br/>
  <img src="https://img.shields.io/github/v/release/ValbionGroup/Gadia?label=Version&color=Green&style=for-the-badge" alt="Release">
  <img src="https://img.shields.io/github/workflow/status/ValbionGroup/Gadia/Build?label=Build&style=for-the-badge" alt="Build"><br/>
  <img src="https://img.shields.io/github/issues/ValbionGroup/Gadia?style=flat-square" alt="Issue">
  <img src="https://img.shields.io/github/stars/ValbionGroup/Gadia?color=dark%20green&style=flat-square" alt="Stars">
  <img src="https://img.shields.io/github/sponsors/ValbionGroup?style=flat-square" alt="Sponsors">
  <img src="https://img.shields.io/codefactor/grade/github/ValbionGroup/Gadia/master?style=flat-square" alt="Code quality">
</p>

---
## Informations

Gadia est un logiciel de gestion de la vie scolaire en développement. Gadia **n'est pas une interface alternative à *Pronote* ou *Ecole Directe***, Gadia est un logiciel à part entière.

Votre aide **est la bienvenue**, si vous avez une quelconque idée, n'hésitez pas à proposer en ouvrant une *issue* ou une *discussion* ou en rejoignant le [*discord du projet*](http://discord.gadia.valbion.com/).

### Fonctionnalités

> **Ce n'est qu'un projet !** *Les fonctionnalités sont seulement des fonctionnalités que je souhaite intégrer, rien de certifie qu'elles seront bien présentes. De plus, certaines fonctionnalités pourrait être abandonnés dû à des problèmes d'implémentations ou d'autres aléas*

* **Interface pour chaque type d'utilisateur**
* **Mode sombre/clair** - Déjà présent dans les démo de l'interface
* **API** - Pour faciliter l'utilisation des informations scolaires en dehors de Gadia
* **Système d'amis** - Les élèves pourront ajouter des amis dans l'application pour voir mutuellement leur emploi du temps ou encore partager des données scolaires facilement
* **Emploi du temps**
* **Cahier de texte**
* **Gestion des notes**
* **Gestion des absences/retards/etc...**
* **Demi-pension**
* **Système de stage**
* **Messagerie** - Informations, sondage ou simple discussion
* **Gestion salles de classes**
* **Gestion d'alertes**

N'hésitez pas en proposer d'autres si des idées vous viennent ^^

### Interface

> **Ce n'est qu'un projet !** *Ces images ne sont pas représentative de la version finale, mais seulement de ma vision du projet*

**La page d'accueil**, ici les informations importantes à voir d'un coup d'oeil
![Accueil Dark](https://upload.valbion.com/img/gadia/screens/v1/dashboard_dark.png)
![Accueil White](https://upload.valbion.com/img/gadia/screens/v1/dashboard_white.png)

**Les informations de la vie scolaire**, pas besoin d'en expliquer plus. Le screen ne contient pas la barre supérieure et latérale mais elle est bien présente en réalité ^^
![Vie Scolaire Dark](https://upload.valbion.com/img/gadia/screens/v1/viesco_dark.png)
![Vie Scolaire White](https://upload.valbion.com/img/gadia/screens/v1/viesco_white.png)

Si vous avez de quelconques remarques, n'hésitez pas à me contacter !

### Informations techniques

Gadia fonctionne avec Tailwind CSS pour l'interface et Laravel en tant que framework. Les fichiers du site sont donc des fichiers blade (`fichier.blade.php`), le reste en PHP (`fichier.php`).

#### Contribuer

Pour contribuer au projet veuillez suivres les étapes dessous...

1. Cloner le répo'
2. Modifier le fichier `.env.example` puis renomer-le en `.env`
3. Ensuite faites les commandes ci-dessous :
```bash
composer install
npm install
npm run prod # Si en production
npm run dev # Si en développement
php artisan migrate
php artisan serve
```
