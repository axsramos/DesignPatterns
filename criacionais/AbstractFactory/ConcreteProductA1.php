<?php

namespace criacionais\AbstractFactory;

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulfunctionA(): string
    {
        return "The result of the product A1.";
    }
}