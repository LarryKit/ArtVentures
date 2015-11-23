<?php
/*======ARTVENTURES HOME===========*/
require_once "universal/database.php";
require_once "universal/variables.php";
require_once "views/MainView.php";
require_once "models/MainModel.php";

$condition = CONDITION;
$model = new MainModel(DB_SRC, DB_USR, DB_PASS);
$view = new MainView();

//If the CONDITION Variable is set to PROCEED the site will function normally otherwise the under contstruction page will be shown
if($condition === "proceed"){
    $view->view('headers', 'header-main','ArtVentures','','','','');
    $view->view('content','home','','','','','');
    $view->view('footers', 'footer-main', '','','','','');
}else{
    $view->view('headers', 'construct', '', '','','','');
}
?> 