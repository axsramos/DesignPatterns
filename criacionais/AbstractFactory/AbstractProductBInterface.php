<?php

namespace criacionais\AbstractFactory;

interface AbstractProductB
{
    public function usefulfunctionB(): string;

    public function anotherUseFulFunctionB(AbstractProductA $collaborator): string;
}
