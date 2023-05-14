<?php

class DateTimeHelper
{
    /**
     * Initialize DateTime object
     * *used for date time manipulation
     * 
     * @param string $dateTimeStr
     * @param string $timezone
     * @return DateTime
     */
    private function initialze(string $dateTimeStr, string $timezone = "Asia/Calcutta"): DateTime
    {
        $timezoneObj = new DateTimeZone($timezone);
        $dateObj = new DateTime($dateTimeStr, $timezoneObj);

        return $dateObj;
    }

    /**
     * Return current timestamp
     * 
     * @return DateTime
     */
    public function now(): DateTime
    {
        $date = $this->initialze('Now');
        return $date;
    }

    /**
     * Return current date
     * 
     * @return DateTime
     */
    public function today(): DateTime
    {
        $date = $this->initialze('Today');
        return $date;
    }

    /**
     * Get list of timezones
     * 
     * @return array
     */
    function listOfTimeZone(): array
    {
        $timeZoneList = DateTimeZone::listIdentifiers(DateTimeZone::ASIA); #LIST OF TIMEZONE
        // $listAbbr = DateTimeZone::listAbbreviations();
        return $timeZoneList;
    }
}
