<?php
define ( 'SITE_PATH', realpath( dirname(__FILE__) ) ); 
$site_url = str_replace('\\', '/', str_replace( realpath( $_SERVER[ 'DOCUMENT_ROOT' ] ), '', SITE_PATH ) );
define ( 'SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $site_url );

include SITE_PATH . '/includes/Db.php';
include SITE_PATH . '/includes/components/CommonController.php';

$page = ( isset ( $_GET['page'] ) ) ? $_GET['page'] : 'articles';
$action = ( isset ( $_GET['action'] )) ? $_GET['action'] : '';

include SITE_PATH. '/application/'. $page .'/Controller.php';


$ctrl = new Controller(  $action );

$view = $ctrl->get_view();

$datas = $ctrl->get_datas();






include SITE_PATH . '/view/page.php';