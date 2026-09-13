<?php
// This file is part of Moodle - http://moodle.org/.

defined('MOODLE_INTERNAL') || die();

/**
 * Combines Boost's SCSS with the E-Horizon visual layer.
 *
 * @param theme_config $theme The active theme configuration.
 * @return string
 */
function theme_ehorizon_get_main_scss_content($theme): string {
    global $CFG;

    $scss = theme_boost_get_main_scss_content($theme);
    $filename = $CFG->dirroot . '/theme/ehorizon/scss/ehorizon.scss';

    if (is_readable($filename)) {
        $scss .= "\n" . file_get_contents($filename);
    }

    return $scss;
}
