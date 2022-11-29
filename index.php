<?php

require_once('autoload.php');

use Class\Programmer;
use Class\Director;
use Class\Tester;
use Class\Manager;

$people[] = new Programmer('Иван', 'Иванов');
$people[] = new Director('Михаил', 'Попов');
$people[] = new Tester('Вадим', 'Сорокин');
$people[] = new Manager('Илья', 'Суворов');

$sumSalary = 0;

foreach ($people as  $index => $person) {
    $sumSalary += $person->getSalary();
    echo $index +1 .'. ';
    echo($person->getNameSurname('SomeName', 'SomeSurname'));
    echo ', позиция: ' . $person->getPosition();
    echo ', зарплата: ' . $person->getSalary(). ' попугаев';

    if ($person instanceof ApplicationCreatorInterface) {
        echo ', '. ($person->getApplicationCreator());
    }
    if ($person instanceof WebinarSpeakerInterface) {
        echo ', '.($person->getWebinarSpeaker());
    }
    if ($person instanceof LeadInterface) {
        echo ', '.($person->getLead());
    }
    echo'.';
    echo (PHP_EOL);
}
echo (PHP_EOL);

echo "Общее количество сотрудников: " .count($people).'.'."\n";
echo "Общая сумма зарплат: " .$sumSalary.' попугаев.'."\n";
