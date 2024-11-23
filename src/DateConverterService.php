<?php

namespace Mahdinickdel\LaravelDateConverter;


use IntlDateFormatter;
use Carbon\Carbon;

class DateConverterService
{
    private $formatter;

    public function __construct($locale = 'fa_IR@numbers=latn', $calendar = IntlDateFormatter::TRADITIONAL)
    {
        $this->formatter = new IntlDateFormatter(
            $locale, //en_US@calendar=persian
            IntlDateFormatter::FULL,
            IntlDateFormatter::FULL,
            'Asia/Tehran',
            $calendar
        );
    }

    /**
     * Convert a Gregorian date and time to Jalali (Persian) date and time.
     *
     * @param string $gregorianDateTime The Gregorian date and time in 'Y-m-d H:i:s' format.
     * @return string The Jalali date and time in the specified format.
     */
    public function toJalali($gregorianDateTime = null, $format = 'yyyy-MM-dd HH:mm:ss')
    {

        if (!$gregorianDateTime) {
            $gregorianDateTime = date('Y-m-d H:i:s');
        }

        $this->formatter->setPattern($format);
        $timestamp = strtotime($gregorianDateTime);
        return $this->formatter->format($timestamp);
    }

    /**
     * Convert a Jalali (Persian) date and time to Gregorian date and time.
     *
     * @param string $jalaliDateTime The Jalali date and time in 'yyyy/MM/dd HH:mm:ss' format.
     * @return string The Gregorian date and time in 'Y-m-d H:i:s' format.
     */
    public function toGregorian($jalaliDateTime, $format = 'Y-m-d H:i:s')
    {
        $this->formatter->setPattern('yyyy/MM/dd HH:mm:ss');
        $timestamp = $this->formatter->parse($jalaliDateTime);

        if ($timestamp === false) {
            throw new Exception("Invalid Jalali date and time format: $jalaliDateTime");
        }

        return date($format, $timestamp);
    }

    /**
     * Converts a date to a "time ago" format in Persian using IntlRelativeDateTimeFormatter.
     *
     * @param string $dateTime The date in 'Y-m-d H:i:s' format.
     * @return string The "time ago" representation in Persian.
     */
    public function timeAgo($dateTime, $parts = 1)
    {
        $carbonDate = Carbon::parse($dateTime);
        return $carbonDate->diffForHumans(null, true, true, $parts) . " پیش";
    }
}
