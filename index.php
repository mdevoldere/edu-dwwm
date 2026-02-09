<?php
class Program 
{
    private string $name;

    function __construct() 
    {
        $this->name = readline("Quel est votre nom ? ");
        echo "Hello $this->name";
    }
}

new Program();