<?php

    /*****
     * This class is used to help you debugging your code.
     * Access the demo folder to see usage examples.
     *
     * @namespace: eFuzyon
     * @class: Debug
     * @author: Leandro Sanches
     * @version: v1.0
     * @url: https://github.com/eFuzyon/eFuzyon
     *****/

    namespace eFuzyon;

class Debug
{

    /*****
        * This method generates a var_dump with <pre> around it.
        *
        * @static
        * @public
        * Dump - Dump( mixed args, mixed [...] )
        * @return string $output
        *****/

        public static function Dump()
        {

            // Geting all arguments of this method
            $args = func_get_args();

            if ($args):

                // Foreach argument, execute a var_dump with <pre> around it
                foreach ($args as $item):
                    echo "<pre>";
            var_dump($item);
            echo "</pre>";
            endforeach; else:
                // If there isn't any arguments, it will output "<pre>NULL</pre>"
                echo "<pre>NULL</pre>";
            endif;
        }

        /*****
        * This method generates a print_r with <pre> around it.
        *
        * @static
        * @public
        * Printr - Printr( mixed args, mixed [...] )
        * @return string $output
        *****/

        public static function Printr()
        {

            // Geting all arguments of this method
            $args = func_get_args();

            if ($args):

                // Foreach argument, execute a print_r with <pre> around it
                foreach ($args as $item):
                    echo "<pre>";
            print_r($item);
            echo "</pre>";
            endforeach; else:
                // If there isn't any arguments, it will output "<pre>NULL</pre>"
                echo "<pre>NULL</pre>";
            endif;
        }
}
