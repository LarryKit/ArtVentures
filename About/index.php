<?php
/*======ARTVENTURES ABOUT===========*/
require_once "../universal/database.php";
require_once "../universal/variables.php";
require_once "../views/MainView.php";
require_once "../models/MainModel.php";

$condition =CONDITION;
$model = new MainModel(DB_SRC, DB_USR, DB_PASS);
$view = new MainView();

//If the CONDITION Variable is set to PROCEED the site will function normally otherwise the under contstruction page or 504 page will be shown
if($condition === "proceed"){
    $view->viewChild('headers', 'header-all','ArtVentures-About-Us','','','','');
    $view->viewChild('content','about','','','','','');
    $view->viewChild('footers', 'footer-all', '','','','','');
}else{
    $view->viewChild('headers', 'construct', '', '','','','');
}
?> 