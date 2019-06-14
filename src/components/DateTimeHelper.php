<?php
    
    
    namespace ruturajmaniyar\mod\audit\components;
    
    
    use yii\base\Component;
    
    /**
     * Class DateTimeComponent
     *
     * @package ruturajmaniyar\mod\audit\components
     */
    class DateTimeHelper extends Component
    {
        /**
         * Convert unix_timestamp to date-time format
         *
         * date("F j, Y, g:i a", $timestamp);                 // March 10, 2001, 5:16 pm
         * date("m.d.y", $timestamp);                         // 03.10.01
         * date("j, n, Y", $timestamp);                       // 10, 3, 2001
         * date("Ymd", $timestamp);                           // 20010310
         * date('h-i-s, j-m-y, it is w Day', $timestamp);     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
         * date('\i\t \i\s \t\h\e jS \d\a\y.', $timestamp);   // it is the 10th day.
         * date("D M j G:i:s T Y", $timestamp);               // Sat Mar 10 17:16:18 MST 2001
         * date('H:m:s \m \i\s\ \m\o\n\t\h', $timestamp);     // 17:03:18 m is month
         * date("H:i:s", $timestamp);                         // 17:16:18
         * date("Y-m-d H:i:s", $timestamp);                   // 2001-03-
         *
         * @param $timeStamp
         * @param $format
         *
         * @return false|string
         */
        public static function convertTimestampToDateTime($timeStamp, $format = 'Y-m-d H:i:s')
        {
            return date($format, $timeStamp);
            
        }
        
    }