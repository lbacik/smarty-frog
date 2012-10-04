<?php

include "../config/config.inc.php";

require_once($LIBS."/smarty/Smarty.class.php");


// ================= INIT ============================ 

$smarty = new Smarty;
$smarty->template_dir = $SMARTY_DIRS . '/templates';
$smarty->compile_dir = $SMARTY_DIRS . '/compile';
$smarty->config_dir = $SMARTY_DIRS . '/configs';
$smarty->plugins_dir[] = $LIBS . "/Smarty/plugins";
$smarty->plugins_dir[] = $SMARTY_DIRS . '/plugins-common';
$smarty->plugins_dir[] = $SMARTY_DIRS . '/plugins';

// ================= RUN ============================ 

$smarty->assign("theme",$theme);
$smarty->display($common_theme_files . "/index.tpl");

