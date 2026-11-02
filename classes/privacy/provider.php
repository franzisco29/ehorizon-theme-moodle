<?php
// This file is part of Moodle - http://moodle.org/.

namespace theme_ehorizon\privacy;

/**
 * Privacy provider: the theme stores no personal data.
 *
 * @package    theme_ehorizon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\null_provider {
    /**
     * Explains why this plugin stores no personal data.
     *
     * @return string
     */
    public static function get_reason(): string {
        return 'privacy:metadata';
    }
}
