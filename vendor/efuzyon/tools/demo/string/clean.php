<?php
    // Include the efuzyon bootstrap
    include "../../efuzyon.init.php";

    // Add the raw value to a variable
    $value = "<strong>H'i!</strong>";

    // Clean up the raw value and return the new value
    $newValue = eFuzyon\String::Clean($value, array(
        "strip_tags" => true, // Default: false
        "trim" => true, // Default: false
        "addslashes" => true, // Default: false
        "removeslashes" => false // Default: false
    ));

    // Output the new value
    echo $newValue;
