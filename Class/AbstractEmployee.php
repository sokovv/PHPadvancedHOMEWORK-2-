<?php

namespace Class;

abstract class AbstractEmployee
{
    protected $name;
    protected $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    abstract public function getNameSurname(): string;

    abstract public function getPosition(): string;

    abstract public function getSalary(): string;
}
