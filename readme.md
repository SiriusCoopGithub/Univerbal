
# Univerbal Laravel & vue.js Boilerplate

Ce readme explique la marche à suivre pour installer Laravel et vue.js.  

**Ne pas télécharger cette branche via GitHub sans en avoir reçu l'autorisation!!**
**Chaque étape de la liste est à suivre rigoureusement!!**  
**Les commandes sont à copier/coller tel quelle, ou vous pouvez les écrire vous-même, dans le terminal de vs code et bien sur elles sont exécutée par un ENTER**  

 *Certaines opérations peuvent prendre un certain temps en fonction de votre connexion internet, il est important d'attendre jusqu'a la fin!*

1. Sélectionner la branche **Laravel-Boilerplate** dans GitHub Desktop et faire un fetch (cela devrait normalement copier la branche dans votre dossier Univerbal)
2. Cloner la branche en la nommant "*votre-prénom*-Laravel" (ex : Greg-Laravel)
3. Ouvrir le projet dans vs code et ouvrir le terminal  
3. Afin de créer le dossier 'vendor', copier/coller la commande  
 `composer install`  
5. Afin de créer le dossier node_module, copier/coller la commande  
 `npm install`  
6. Aller sur le google drive du projet **Univerbal** dans le dossier **Laravel** et copier/coller le fichier **.env** dans le dossier du projet sur votre ordinateur.  
 Comme Windows n'aime pas les fichier qui commence par un point (.), il vous faudra renommer ce fichier via vs code et rajouter ce point -> .env 
6. Dans le terminal, exécutez la commande `php artisan key:generate`  
7. Dans le terminal, exécutez la commande `npm run dev`  
8. Exécutez une deuxième fois la commande `npm run dev`  

Normalement, si tout c'est bien passé, vous devriez avoir Laravel installé et opérationnel.

## Utiliser Laravel
Les explications de comment utiliser Laravel et vue.js.  

1. Ouvrez deux fenêtres de terminal en cliquant sur l'icône entre le **+** et la poubelle en haut à droite de la fenêtre du terminal.  
2. Dans la fenêtre de gauche, exécutez la commande `php artisan serve`  
Cette commande permet de lancer un serveur local à l'adresse `http://127.0.0.1:8000` accessible dans votre browser (ctrl clique gauche sur l'adresse ouvre automatiquement votre browser)  
*Lorsque vous exécutez cette commande, le terminal se 'bloque' et vous ne pourrez plus l'utiliser tant que le serveur est lancé.  
Pour arrêter le serveur, cliquez dans le terminal, et faite un `ctrl c`*
3. Exécutez la commande `npm run watch` dans le terminal de droite et exécutez là pour que votre browser s'actualise lorsque vous faites un changement dans le code et que vous sauvegardez le fichier `ctrl s`  
Si Chrome est installer sur votre ordinateur, il se lance automatiquement à l'adresse `http://localhost:3000` et affiche la page d'index.  
A chaque fois que vous ferez un changement dans le code et que vous sauvegardez, le browser se rafraichit.  
Vous pouvez copier l’adresse dans un autre navigateur de votre choix, la page se rafraichit sur tous les navigateurs en même temps.  
*Lorsque vous exécutez cette commande, le terminal se 'bloque' et vous ne pourrez plus l'utiliser tant que le serveur est lancé.  
Pour arrêter le serveur, cliquez dans le terminal, et faite un `ctrl c`*  


## Ou coder dans Laravel??
Dans quels dossiers placez votre code?

Pour le css, placez votre code dans le fichier **_univerbal.scss** qui se trouve dans resources/sass

Pour le code html, utiliser les fichier qui se trouve dans **resources/views/pages/**  
Les pages sont nommées pour chaque type de client.  
**Attention**
Placez votre code html entre les balises  
```
@section('content')
  {{-- Début code HTML --}}

  {{-- Fin code HTML --}}
@endsection
```

#### Récap de toutes les commandes
`composer install` -> Instal les dependances php dans le dossier *vendor*  
`npm install` -> Instal les dépendances node.js dans le dossier *node_modules*
`php artisan serve` -> Cree un serveur http a l'adresse `http://127.0.0.1:8000`  
`npm run dev` -> *build* le code html/css/js  
`npm run watch` -> Rafraichit la page dans le navigateur automatiquement après chaque changement dans le code et que vous avez sauvegardé le fichier via `ctrl s` (sauvegarder le fichier)  