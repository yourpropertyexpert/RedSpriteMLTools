<?php

namespace redspritedemo;

require_once "autoload.php";

$demo = new Demo([16,32,3000]);

echo "<code>";
print_r($demo->getResults());
echo "</code>";