<?php

require_once 'controllers/landing.php';

require_once 'models/landing.php';

use controllers\Landing as ControllersLanding;
use models\landing as ModelsLanding;
use models\Data;
$landing = new ControllersLanding;
$landing->get_landing();


$data = new Data;

$data->get_data();
?>