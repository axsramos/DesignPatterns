<?php

namespace criacionais\AbstractFactory;

interface AbstractFactoryInterface
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}
