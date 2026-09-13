# E-Horizon Learning theme for Moodle

A Moodle 4.5+ child theme based on Boost. It translates E-Horizon into an accessible
learning interface: a dark navigation shell, a bright work area, E-Horizon cyan for
navigation and race orange for primary actions. The `pix/` folder contains supplied
E-Horizon photographs, credited to Marco Mazzon (Rossomotori.it), for use by this theme.

## Install

1. Copy the `theme_ehorizon` folder into `<moodleroot>/theme/`.
2. Visit **Site administration → Notifications** and complete the plugin install.
3. Select **E-Horizon Learning** at **Site administration → Appearance → Themes → Theme selector**.
4. Purge caches after changes: **Site administration → Development → Purge caches**.

## Compatibility

Built as a child of `theme_boost` for Moodle 4.5 and later. Test it in a staging
environment before use in production, particularly if your Moodle deployment adds
third-party activity plugins with bespoke markup.

## Design decisions

- Dark blue belongs to navigation; the workspace is intentionally light to keep Moodle
  forms, course content and administration readable.
- Orange is reserved for primary actions, cyan for navigation and focus; colour is not
  the sole carrier of meaning.
- A track image adds energy to page headers while course cards use team photography.
- Core layouts, drawers, navigation and course index remain supplied by Boost, which
  preserves Moodle's established responsive behaviour.

## Licence

GPL v3 or later, consistent with Moodle.
