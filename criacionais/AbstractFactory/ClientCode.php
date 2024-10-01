<?php

namespace criacionais\AbstractFactory;


function clientCode(AbstractFactoryInterface $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulfunctionB() . '\n';
    echo $productB->anotherUseFulFunctionB($productA) . '\n';
}

echo "\n";

echo "Client: Testing client code with the first factory type:\n";
clientCode(new ConcreteFactory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ConcreteFactory2());
