<?php
// This file is part of Moodle - http://moodle.org/.

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'ehorizon';
$THEME->parents = ['boost'];
$THEME->scss = function($theme) {
    return theme_ehorizon_get_main_scss_content($theme);
};
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->enable_dock = false;
$THEME->haseditswitch = true;
$THEME->usescourseindex = true;
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
