<?php
    // Include the efuzyon bootstrap
    include "../../efuzyon.init.php";

    // Add the password to a variable
    $password = "thisismypassword123";

    // Clean up the password and return its hash
    $hash = eFuzyon\Password::Generate($password, array(
        "public-key" => 'efuzyon-project-on-github' // Default: "efuzyon-project-on-github"
    ));

    // Output the hash
    echo $hash;
