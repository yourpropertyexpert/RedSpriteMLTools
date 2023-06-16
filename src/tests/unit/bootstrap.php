<?php

foreach (glob("/drone/src/src/front/classes/redspritedemo/*.php") as $filename) {
    require_once $filename;
}
