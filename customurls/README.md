# Plugin Moodle : local_customurls

## Description
Le plugin **Custom URLs** permet de générer des URLs personnalisées et plus lisibles pour :
- Les cours (`/course/[shortname]`)
- Les profils utilisateurs (`/user/profile/[username]`)
- Les catégories de cours (`/course/category/[id]/[nom-nettoye]`)

## Installation
1. Télécharger et extraire l’archive `local_customurls.zip`.
2. Copier le dossier `customurls` dans le répertoire `moodle/local/` de votre plateforme Moodle.
3. Connectez-vous en tant qu’administrateur et laissez Moodle terminer l’installation du plugin.

## Utilisation
- Les classes sont accessibles via `local_customurls\url_manager`.
- Exemple d’utilisation :

```php
use local_customurls\url_manager;

// Générer l’URL d’un cours par son ID
$courseurl = url_manager::get_course_url(2);

// Générer l’URL d’un utilisateur par son ID
$userurl = url_manager::get_user_profile_url(5);

// Générer l’URL d’une catégorie par son ID
$caturl = url_manager::get_category_url(3);
```

## Langues
- Français : inclus dans `lang/fr/local_customurls.php`

## Compatibilité
- Moodle 4.0 et versions ultérieures

## Auteur
Développé par **CYRITECH Cloud Security & Loans**  
📧 info@cyritech.com | 🌐 [https://cyritech.com](https://cyritech.com)

