<?php

include("../plates-master/src/Extension/ExtensionInterface.php");
include("../plates-master/src/Extension/Asset.php");
include("../plates-master/src/Extension/Batch.php");
include("../plates-master/src/Extension/Escape.php");
include("../plates-master/src/Extension/URI.php");
include("../plates-master/src/Engine.php");
include("../plates-master/src/Template.php");

// Create new Plates engine
$engine = new \League\Plates\Engine('../templates');

// Create a new template
$template = new \League\Plates\Template($engine);

?>