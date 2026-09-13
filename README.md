# E-Horizon Learning theme for Moodle

A Moodle 4.5+ child theme based on Boost. It translates the **energy and editorial
logic** of E-Horizon (dark technical surfaces, cyan data accents, warm racing-orange
actions, rounded panels) into an accessible learning interface. It contains no
E-Horizon logo, photography or other proprietary media.

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

- The saturated orange is reserved for primary actions and progress.
- Cyan denotes navigation, links and focus; it is not the sole carrier of meaning.
- Contrast and keyboard focus are deliberately prominent for classroom use.
- Core layouts, drawers, navigation and course index remain supplied by Boost, which
  preserves Moodle's established responsive behaviour.

## Licence

GPL v3 or later, consistent with Moodle.
