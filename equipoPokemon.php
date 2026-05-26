<?php
declare(strict_types=1);

require_once 'pokemon.php';

class equipoPokemon{ 
    private array $pokemonList = [];

    public function __construct(array $pokemonList) {
        $this->pokemonList = $pokemonList;
    }

    public function getPokemonList() : array {
        return $this->pokemonList;
    }

    public function addPokemon(Pokemon $pokemon): void {
        $this->pokemonList[] = $pokemon;
    }

    function searchByType(string $type) : array{
        $pokemonListWithSameType = [];
        foreach ($this->pokemonList as $actualPokemon){
            foreach($actualPokemon->getTypes() as $typeToCheck)
            if ($typeToCheck === $type){
                $pokemonListWithSameType[] = $actualPokemon;
            } 
        }
        return $pokemonListWithSameType;
    }

    public function PokemonWithLessLife() {
        $ShortestMaxLifePokemon = $this->pokemonList[0];
        foreach ($this->pokemonList as $actualPokemon) {
            if ($actualPokemon->getLifeMax() < $ShortestMaxLifePokemon->getLifeMax()) {
                $ShortestMaxLifePokemon = $actualPokemon;
            }
        }
        return $ShortestMaxLifePokemon;
    }

    function UseAttack(string $attack) {
        foreach ($this->pokemonList as $actualPokemon){
            if (in_array ($attack, $actualPokemon-> getAttacks())){
               echo $actualPokemon->getName() . " used:  " . $attack;
               return;
            }
        }
    echo  "no pokemon has that attack";
    }

    
}

?>