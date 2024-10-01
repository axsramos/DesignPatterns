<?php

namespace criacionais\AbstractFactory;

class ConcreteProductB1 implements AbstractProductB
{
    public function usefulfunctionB(): string
    {
        return "The result of the product B1.";
    }

    public function anotherUseFulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulfunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}
