<?php

namespace Class;

use Interface\LeadInterface;
use Interface\WebinarSpeakerInterface;

class Manager extends AbstractEmployee implements LeadInterface, WebinarSpeakerInterface
{
    protected static string $position = 'менеджер';
    protected static int $salary = 60;

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

    public function getWebinarSpeaker(): string
    {
        return "может вести вебинар для коллег";
    }
}