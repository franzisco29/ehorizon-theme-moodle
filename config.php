<?php
// This file is part of Moodle - http://moodle.org/.

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'ehorizon';
$THEME->parents = ['boost'];
$THEME->scss = function($theme) {
    return theme_ehorizon_get_main_scss_content($theme);
};
$THEME->haseditswitch = true;
$THEME->usescourseindex = true;
