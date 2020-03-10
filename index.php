<?php

require "validation.php";
require "core.php";
//  cli app

if (count($argv)>1) {
    $value = validate($argv);
}

echo(karmarkarKarpAlg($value));
