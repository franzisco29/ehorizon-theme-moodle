# E-Horizon Learning theme for Moodle

A Moodle 4.5+ child theme based on Boost. It translates E-Horizon into an accessible
learning interface: a dark interface, E-Horizon cyan for navigation and links, and
race orange for primary actions. The `pix/` folder contains supplied
E-Horizon photographs, credited to Marco Mazzon (Rossomotori.it), for use by this theme.

## Install

1. Copy this folder into `<moodleroot>/theme/` and name it `ehorizon` (so the path is `theme/ehorizon/config.php`).
2. Visit **Site administration → Notifications** and complete the plugin install.
3. Select **E-Horizon Learning** at **Site administration → Appearance → Themes → Theme selector**.
4. Purge caches after changes: **Site administration → Development → Purge caches**.

## Compatibility

Built as a child of `theme_boost` for Moodle 4.5 and later. Test it in a staging
environment before use in production, particularly if your Moodle deployment adds
third-party activity plugins with bespoke markup.

## Design decisions

- The theme is dark-only. Bootstrap's CSS variables are re-pointed to the E-Horizon palette,
  so core components, admin pages and third-party plugins inherit readable colours.
- Orange is reserved for primary actions, cyan for navigation and focus; colour is not
  the sole carrier of meaning.
- A track image adds energy to page headers while course cards use team photography.
- Core layouts, drawers, navigation and course index remain supplied by Boost, which
  preserves Moodle's established responsive behaviour.

## Customising

- Login left-panel copy: `lang/<lang>/theme_ehorizon.php` (`loginpanel_*` strings). The panel is the
  `templates/core/login_panel.mustache` override; custom auth instructions set in Moodle still take precedence.
- Colours: tokens at the top of `scss/ehorizon.scss`.
- Images: `pix/` holds web-optimised copies (1920px for headers/login, 800px `-sm` for cards).

## Licence

GPL v3 or later, consistent with Moodle.
