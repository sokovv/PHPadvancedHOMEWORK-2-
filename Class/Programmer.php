<?php

namespace Class;

use Interface\ApplicationCreatorInterface;
use Interface\WebinarSpeakerInterface;

class Programmer extends AbstractEmployee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    protected static string $position = 'программист';
    protected static int $salary = 20;

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

    public function getApplicationCreator(): string
    {
        return "может заниматься разработкой приложения";
    }

    public function getWebinarSpeaker(): string
    {
        return "может вести вебинар для коллег";
    }
}