<?php
declare(strict_types=1);

require_once 'pokemon.php';
require_once 'equipoPokemon.php';


$pokemon1 = new Pokemon("Pikachu", ["Electric"], 120, ["Thunderbolt", "Volt Tackle"]);
$pokemon2 = new Pokemon("Charizard", ["Fire", "Flying"], 180, ["Flamethrower", "Fire Blast"]);
$pokemon3 = new Pokemon("Venusaur", ["Plant"], 190, ["Solar Beam", "Giga Drain"]);
$pokemon4 = new Pokemon("Blastoise", ["Water"], 200, ["Skull Bash", "Water Gun"]);
$pokemon5 = new Pokemon("Charmander", ["Fire"], 80, ["Skull Bash", "Fire Blast"]);

$equipoPokemon1 = new equipoPokemon([]);

$equipoPokemon1->addPokemon ($pokemon1);
$equipoPokemon1->addPokemon ($pokemon2);
$equipoPokemon1->addPokemon ($pokemon3);
$equipoPokemon1->addPokemon ($pokemon4);
$equipoPokemon1->addPokemon ($pokemon5);

$equipoPokemon1->UseAttack("Solar Beam");

$typeToSearch = "Fire";
$pokemonListType = $equipoPokemon1->searchByType($typeToSearch);
echo  " \n pokemons with type" . $typeToSearch . ": \n ";
foreach($pokemonListType as $actualPokemon){
    echo $actualPokemon->getName() . " \n ";
}

$shortestLifePokemon = $equipoPokemon1->PokemonWithLessLife();
echo $shortestLifePokemon->getName() . " max life: " . $shortestLifePokemon->getLifeMax();


?>