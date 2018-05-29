<?php
/*Gestion de url (page,action,router)*/

include SITE_PATH  . '/includes/Bootstrap.php';
Bootstrap::url();

/*Connexion à la base de done*/
include SITE_PATH . '/includes/Db.php';




/*Session*/
session_start();


/*Load comon Controller*/
include SITE_PATH . '/includes/components/CommonController.php';


/*Gestion des Template et des Controllers*/
include SITE_PATH. '/application/'. Bootstrap::get_page() .'/Controller.php';


$ctrl = new Controller(  Bootstrap::get_action(), Bootstrap::get_router() );

$view = $ctrl->get_view();

$datas = $ctrl->get_datas();


include SITE_PATH . '/view/page.php';