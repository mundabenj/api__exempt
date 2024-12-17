<?php
require "AutoLoad.php";
$ObjLayouts->heading();
$ObjMenus->main_menu($conf);
$ObjHeadings->main_banner();
$ObjForm->verify_code_form($ObjGlob);
$ObjCont->side_bar();
$ObjLayouts->footer($conf);