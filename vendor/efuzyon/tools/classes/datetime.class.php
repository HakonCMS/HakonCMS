<?php

    /*****
     * This class is used to manipulate "datetime" strings on your code.
     * Access the demo folder to see usage examples.
     *
     * @namespace: eFuzyon
     * @class: Datetime
     * @author: Leandro Sanches
     * @version: v1.0
     * @url: https://github.com/eFuzyon/eFuzyon
     *****/

    namespace eFuzyon;

class Datetime
{

    /*****
        * This method calculates the difference between two dates.
        *
        * @static
        * @public
        * Diff - Diff( integer|datetime in, integer|datetime out )
        * @return array $output
        *****/

        public static function Diff($in = false, $out = false)
        {

            // Setting the IN timestamp
            if (is_int($in)):
                $inTime = $in; else:
                $inTime = strtotime($in);
            endif;

            // Setting the OUT timestamp
            if (is_int($out)):
                $outTime = $out; else:
                $outTime = strtotime($out);
            endif;

            // Setting the DATE for $inTime and $outTime
            $inDT = date("Y-m-d H:i:s", $inTime);
            $outDT = date("Y-m-d H:i:s", $outTime);

            // Creating the IN and OUT objects
            $inObj = new \DateTime($inDT);
            $outObj = new \DateTime($outDT);

            // Calculating the difference between dates
            $output = $inObj->diff($outObj);

            // Returning the difference
            return $output;
        }
}
