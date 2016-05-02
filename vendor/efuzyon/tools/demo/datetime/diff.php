<?php
    // Include the efuzyon bootstrap
    include "../../efuzyon.init.php";

    // You can use unix Timestamp
    #$begin = time();
    #$end = time()-86400;
    // OR DateTime
    $in = "2014-03-10 10:00:00";
    $out = "2014-03-11 10:00:00";

    // Calculating the difference
    $output = eFuzyon\Datetime::Diff($in, $out);

    // Output the difference
    #eFuzyon\Debug::Printr($output);
    eFuzyon\Debug::Dump($output);
