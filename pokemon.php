<?php
declare(strict_types=1);

class Pokemon{
    private string $name;
    private array $types = []; 
    private int $lifeMax;
    private array $attacks = [];
    public function __construct(string $name, array $types, int $lifeMax, array $attacks){
        
        if (empty($types)) {
            throw  new InvalidArgumentException("types list cannot be empty ");
        }
        if (count($types) > 2) { 
            throw new InvalidArgumentException("max 2 types by pokemon");
        }    
    
        $this->name = $name;
        $this->types = $types;
        $this->lifeMax = $lifeMax;
        $this->attacks = $attacks;
    }

   public function getName(): string {
        return $this->name;
    }

    public function getTypes(): array {
        return $this->types; 
    }
     public function getLifeMax(): int {
        return $this->lifeMax;
    }
    public function getAttacks(): array {
        return $this->attacks;
    }

}

?>