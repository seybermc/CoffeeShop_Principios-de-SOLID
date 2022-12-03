<?php

namespace App;

class Menu
{
    public function view($products, MenuOutput $output)
    {
        return $output->output($products);
    }
}
