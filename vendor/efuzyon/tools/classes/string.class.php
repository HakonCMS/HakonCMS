<?php

    /*****
     * This class is used to manipulate strings on your code.
     * Access the demo folder to see usage examples.
     *
     * @namespace: eFuzyon
     * @class: String
     * @author: Leandro Sanches
     * @version: v1.0
     * @url: https://github.com/eFuzyon/eFuzyon
     *****/

    namespace eFuzyon;

class String
{

    /*****
        * This method cleans a raw value according to your parameters and
        * returns it.
        *
        * @static
        * @public
        * Clean - Clean( string value, array opt )
        * @return string $output
        *****/

        public static function Clean($value = false, $opt = array())
        {

            // Making a copy of the original $value
            $original = $value;

            // Setting the output var
            $output = $original;

            // If $opt exists, verify the following options
            if ($opt):

                // Should this method remove HTML code from the value?
                if (isset($opt["strip_tags"])):
                    $output = strip_tags($output);
            endif;

                // Should this method trim the value?
                if (isset($opt["trim"])):
                    $output = trim($output);
            endif;

                // Should this method add slashes do the value?
                if (isset($opt["addslashes"])):
                    $output = addslashes($output);
            endif;

                // Should this method remove slashes do the value?
                if (isset($opt["removeslashes"])):
                    $output = stripslashes($output);
            endif;

            endif;

            // Return the new value
            return $output;
        }
}
