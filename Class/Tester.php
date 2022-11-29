<?php

namespace Class;

use Interface\WebinarSpeakerInterface;

class Tester extends AbstractEmployee implements WebinarSpeakerInterface
{
    protected static string $position = 'тестировщик';
    protected static int $salary = 15;

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

    public function getWebinarSpeaker(): string
    {
        return "может вести вебинар для коллег";
    }

}