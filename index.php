<?php

define("youtube",true);

include "youtube.php";

$t = new youtube();
$t->generate_random_id();
echo $t->get_random_id();


