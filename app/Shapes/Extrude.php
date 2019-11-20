<?php

// Create an Extrude class in the App\Shapes namespace. On construction it should take a class that implements ShapeInterface as well as a depth. It should have a volume() method which returns the volume (area x depth) of the given shape. Make sure you use type-hinting to make sure you can't pass non-shapes into Extrude.

namespace App\Shapes;

class Extrude
{

    private $shape;
    private $depth;

    public function __construct(ShapeInterface $shapeInterface, $depth)
    {

        $this->shape = $shapeInterface;
        $this->depth = $depth;

    }

    public function volume()
    {

        return $this->shape->area() * $this->depth;

    }

}