<?php
require "AutoLoad.php";
$ObjLayouts->heading($conf);
$ObjMenus->main_menu($conf);
$ObjHeadings->main_banner();
$ObjForm->search_users();
$ObjTable->fetch_users($conn, $conf);
$ObjCont->side_bar();
$ObjLayouts->footer($conf);