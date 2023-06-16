<?php

namespace redspritedemo;

require_once "autoload.php";

$demo = new Demo([16,32,3003]);

echo "<code>";
print_r($demo->getResults());
echo "</code>";