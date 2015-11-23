<?php
/*======ARTVENTURES ARCHITECTURE===========*/
require_once "../universal/database.php";
require_once "../universal/variables.php";
require_once "../views/MainView.php";
require_once "../models/MainModel.php";

$condition =CONDITION;
$model = new MainModel(DB_SRC, DB_USR, DB_PASS);
$view = new MainView();

//If the CONDITION Variable is set to PROCEED the site will function normally otherwise the under contstruction page will be shown
if($condition === "proceed"){
    $view->viewChild('headers', 'header-all','ArtVentures-Architecture','','','','');
    $view->viewChild('content','architect','','','','','');
    $view->viewChild('footers', 'footer-all', '','','','','');
}else{
    $view->viewChild('headers', 'construct', '', '','','','');
}
?> 