<?php

namespace criacionais\AbstractFactory;

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulfunctionB(): string
    {
        return "The result of the B2.";
    }

    public function anotherUseFulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulfunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}
