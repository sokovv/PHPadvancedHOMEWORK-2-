<?php

namespace Class;

use Interface\LeadInterface;

class Director extends AbstractEmployee implements LeadInterface
{
    protected static string $position = 'директор';
    protected static int $salary = 120;

    public function getNameSurname(): string
    {
        return "$this->name $this->surname";
    }

    public function getPosition(): string
    {
        return self::$position;
    }

    public function getSalary(): string
    {
        return self::$salary;
    }

    public function getLead(): string
    {
        return "может управлять или руководить";
    }

}