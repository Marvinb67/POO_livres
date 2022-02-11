<h1>Livres POO</h1>

<p>
    Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et leurs auteurs
    respectifs
    Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un
    auteur. Un auteur est identifié par un nom et un prénom.
    Une méthode toString sera appréciée dans chacune de vos classes.
    Vous implémenterez une méthode afficherBibliographie qui permettra d’afficher la
    bibliographie d’un auteur :

    <h2> Livres de Stephen King </h2><br>

    Ca (1986) : 1138 pages / 20€ <br>
    Simetierre (1983) : 374 pages / 15 € <br>
    Le Fléau (1978) : 823 pages / 14 € <br>
    Shining (1977) : 447 pages / 16 € <br>
</p>

<h2>Résultat</h2>

<?php

require 'auteur.php';
require 'livres.php';

$auteur = new Auteur('Stephen', 'King');

$l1 = new Livres('Ca', '1996', 1138, 20, $auteur);
$l2 = new Livres('Simetierre', '1983', 374, 15, $auteur);
$l3 = new Livres('Le fléau', '1978', 823, 14, $auteur);
$l4 = new Livres('Shining', '1977', 447, 16, $auteur);

echo "<h2>Livres de $auteur</h2>".'<br>';
$auteur->afficherBibliographie();
