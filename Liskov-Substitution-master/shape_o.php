<?php
/**
 * Requerimientos:
 *
 * 1. El objetivo del juguete es insertar figuras geométricas en
 *    los orificios que contiene a los lados.
 *
 * 2. Al tratar de insertar una figura en un orificio tenemos
 *    dos posibles resultados:
 *
 *    2.1. Entro: verdadero
 *    2.2. No entro: falso
 *
 * 3. Para saber si la figura entra en el orificio, requerimos
 *    saber dos cosas:
 *
 *    3.1. El área de la figura que queremos insertar
 *    3.2. El área del orificio donde queremos insertar la figura
 */

class Shape_O
{
    protected $areas = [];

    public function insert(Shape $shape, $hole) : bool
    {
        return $shape->area() <= $this->areas[$hole];
    }
}

abstract class Shape
{
    abstract public function area(string $param = '') : float;
}

class Circle extends Shape
{
    public function area(string $param = '') : float
    {
        return M_PI * 5 ^ 2;
    }
}

class Square extends Shape
{
    public function area(string $param = '') : float
    {
        return 5 * 5;
    }
}
