<?php

namespace App;

class Challenges
{

    public function start()
    {

        echo "\nChallenges\n";

        // call challenges here...
        $this->shapes();

    }

    // -----------------------

    public function shapes()
    {
        echo "\nInterfaces 01) Shapes\n";

        // create new shapes
        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        // log the areas of each
        dump(
            $square->area(), // 16
            $circle->area(), // 50.265482457437
            $rectangle->area() // 20
        );
    }

}