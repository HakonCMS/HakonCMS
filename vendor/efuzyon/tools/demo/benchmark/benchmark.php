<?php
    // Include the efuzyon bootstrap
    include "../../efuzyon.init.php";

    // Set the start time
    eFuzyon\Benchmark::Start();

    // Code
    $counter = 0;
    foreach (range(0, 1000000) as $item):
        $counter++;
    endforeach;

    // Set the finish time
    eFuzyon\Benchmark::Finish();

    // Obtain result
    $output = eFuzyon\Benchmark::Result();

    // Output the time difference
    eFuzyon\Debug::Dump($output);
