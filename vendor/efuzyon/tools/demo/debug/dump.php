<?php
    // Include the efuzyon bootstrap
    include "../../efuzyon.init.php";

    // Setting the first stdClass
    $firstObj = new stdClass();
    $firstObj->project = "eFuzyon";
    $firstObj->version = "1.0.2";
    
    // Setting the second stdClass
    $secondObj = new stdClass();
    $secondObj->project = "eFuzyon [2]";
    $secondObj->version = "1.0.2 [2]";

    // Output
    eFuzyon\Debug::Dump($firstObj, $secondObj);
