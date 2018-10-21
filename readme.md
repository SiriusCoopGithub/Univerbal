
# Univerbal laravel & vue.js Boilerplate

Ce readme explique la marche à suivre pour installer laravel et vue.js.  


**Ne pas télécharger cette branche via github sans en avoir recu l'autorisation!!**
**Chaque étape de la liste est à suivre rigoureusement!!**  
**Les commandes sont à copier dans le terminal de vscode et bien sur sont exécutée par un ENTER**  

 *Certaines opérations peuvent prendre un certain temps en fonction de votre connexion internet, il est important d'attendre jusqu'a la fin!*

1. Selectionner la branche **laravel-Boilerplate** dans github Desktop et faire un fetch (cela devrait normalement copier la branche dans votre dossier Univerbal)
2. Ouvrir le projet dans vscode et ouvrir le terminal  
3. il faut créer le dossier 'vendor', copier/coller la commande  
 `composer install`  
4. Il faut créer le dossier node_module, copier/coller la commande  
 `npm install`  
 - Aller sur le google drive du projet **Univerbal** dans le dossier **laravel** et copier/coller le fichier **.env** dans le dossier du projet sur votre ordinateur.  
5. Dans le terminal, copier/coller la commande `php artisan key:generate`  
6. Dans le terminal, copier/coller la commande `npm run dev`  
7. Exécutez une deuxième fois la commande `npm run dev`  


Normalement, si tout c'est bien passé, vous devriez avoir Laravel installé et opérationnel.


### A suivre
Les explications de comment utiliser laravel et vue.js.  


Mais si vous voulez tester laravel.
1. Ouvrez deux fenêtres de terminal en cliquant sur l'icone entre le **+** et la poubelle en haut a droite de la fenêtre du terminal.  
2. Dans la fenêtre de gauche, copier/coller la commande `php artisan serve`  
Cette commande permet de lancer un serveur local a l'adresse `http://127.0.0.1:8000` accessible dans votre browser (ctrl + clique gauche sur l'adresse ouvre automatiquement votre browser)  
*Lorsque vous exécutez cette commande, le terminal se 'bloque' et vous ne pourrez plus l'utiliser tant que le serveur est lancé.  
Pour arreter le serveur, cliquez dans le terminal, et faite un `ctrl + c`*
3. Pour que votre browser s'actualise lorsque vous faites un changement dans le code, copier/coller la commande `npm run watch` dans le terminal de droite et exécutez la.  
Si Chrome est installer sur votre ordinateur, il se lance automatiquement à l'adresse `http://localhost:3000` et affiche la page d'index.  
A chaque fois que vous ferez un changement dans le code, la page se rafraichit.
*Lorsque vous exécutez cette commande, le terminal se 'bloque' et vous ne pourrez plus l'utiliser tant que le serveur est lancé.  
Pour arreter le serveur, cliquez dans le terminal, et faite un `ctrl + c`*
