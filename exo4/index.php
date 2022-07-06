<?php 
require "Player.class.php";
require "Arme.class.php";

ob_start(); //NE PAS MODIFIER 
$a = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
$num = explode("o",$url[1]);
$exo = ucfirst(str_replace($a," ".$num[1],$url[1]));
$url[0] = str_replace("_"," ",$url[0]);
$titre = ucwords($url[0])." ".$exo; //Mettre le titre que vous voulez dans $titre
?>

<!-- mettre ici le code -->
<?php 

$gun = new Arme("glock",95);
$sword = new Arme("sword",85);

$player1 = new Player("Luigi",250,550,$gun->getId());
$player2 = new Player("Mario",290,750,$sword->getId());

$players = [
    $player1,
    $player2
];

$weapons = [
    $gun,
    $sword
];


?>

<?php foreach ($players as $player) : ?>
    <?= "-----------------------------"?>
    <p>Nom : <?= $player->getNom(); ?></p>
    <p>Force : <?= $player->getForce(); ?></p>
    <p>PV : <?= $player->getPv(); ?></p>

    <p>Arme : </p>
    <p>ID : <?= $player->getArmeId(); ?></p>
    <p>Nom : <?= Arme::getTab($player->getArmeId())->getNom(); ?></p>
    <p>Dégats : <?= Arme::getTab($player->getArmeId())->getNombresDegats(); ?></p>

<?php endforeach ?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET D'INCLURE LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "views/template.php";
?>