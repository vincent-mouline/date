<?php

class TimeTravel
{


    private $start;
    private $end;
    const ZONE = 'America/Los_Angeles'; /*No Hill Valley for PHP :_( */

    public function __construct($start, $end)
    {
        $timeZone = new DateTimeZone(self::ZONE);
        $this->start = new DateTime($start, $timeZone);
        $this->end = new  DateTime($end, $timeZone);
    }

    public function getTravelInfo(): string
    {
        return $time = $this->start->diff($this->end)->format('il y a %y années, %m mois, %d jours, %h heures,' .
            '%m minutes et %s secondes entre les deux dates');
    }

    public function findDate(DateInterval $interval): string
    {
        $this->start->sub($interval);
        $date = $this->start->format('d/m/Y');
        return 'Doc est coincé au ' . $date;
    }

    public function backToFutureStepByStep(DatePeriod $step): array
    {
        $loop [] = '';
        foreach ($step as $key => $date) {
            $loop[$key] = $date->format('M d Y A H:i');
        }
        return $loop;
    }


}