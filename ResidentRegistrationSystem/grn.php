

<?php
 function c2persian($time, $toCalender = 'persian', $timezone = 'Asia/Tehran', $locale = 'fa_IR') {
    $formatter = IntlDateFormatter::create($locale, NULL, NULL, $timezone, IntlCalendar::createInstance($timezone, "$locale@calendar=$toCalender"));
    return $formatter->format($time);
}
$time = strtotime("2089-08-09 00:00:00 UTC");
echo c2persian($time);
?>