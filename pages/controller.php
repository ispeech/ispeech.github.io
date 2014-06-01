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

// define config
$template -> login_status = true;
$template -> login_user_name = 'Wei Chen';

$template -> thumbnail_a_num = 8;
$template -> thumbnail_b_num = 2;
$template -> thumbnail_c_num = 2;

// $template -> index_page = '/ispeech_feature/pages/index.php';
// $template -> account_page = '/ispeech_feature/pages/account.php';
// $template -> article_page = '/ispeech_feature/pages/article.php';
// $template -> box_page = '/ispeech_feature/pages/box.php';
// $template -> tag_page = '/ispeech_feature/pages/tag.php';
// $template -> user_page = '/ispeech_feature/pages/user.php';
?>