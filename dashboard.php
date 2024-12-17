<?php
require "AutoLoad.php";
$ObjGlob->checksignin();
$ObjGlob->verify_profile();
$ObjLayouts->heading();
$ObjMenus->main_menu($conf);
$ObjHeadings->main_banner();
$ObjCont->main_content();
$ObjCont->side_bar();
$ObjLayouts->footer($conf);