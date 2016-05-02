<?php

    /*****
     * This class is used to manipulate passwords on your code.
     * Access the demo folder to see usage examples.
     *
     * @namespace: eFuzyon
     * @class: Password
     * @author: Leandro Sanches
     * @version: v1.0
     * @url: https://github.com/eFuzyon/eFuzyon
     *****/

    namespace eFuzyon;

class Password
{

    /*****
        * This method generates a hash from password according to your
        * parameters and returns it.
        *
        * @static
        * @public
        * Password - Password( string value, array opt )
        * @return string $output
        *****/

        public static function Generate($value = false, $opt = array())
        {

            // Making a copy of the original $value
            $original = $value;

            // Setting the output var
            $output = $original;

            // Setting the public key
            $publickey = (isset($opt['public-key'])) ? $opt['public-key'] : "efuzyon-project-on-github" ;

            // Generating hash
            if (function_exists('hash_hmac')):
                $output = hash_hmac("md5", md5($output), md5($publickey));
            $output = md5($output); else:
                $output = md5($output) . md5($publickey);
            $output = md5($output);
            endif;

            // Return the new value
            return $output;
        }
}
