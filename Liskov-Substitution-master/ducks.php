<?php
/**
 * Ejemplo de violación del Principio de Sustitución de Liskov.
 */

class Pond
{
    public function addDuck(Duck $duck)
    {
        $duck->float();
    }
}

class Duck
{
    public function float()
    {
        // Float logic
    }
}

class MetalDuck extends Duck
{
    public function float()
    {
        throw new \Exception(); // Esto viola el principio
    }
}
