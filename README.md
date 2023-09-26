# Example Plugin for Display Eventbrite Events calling shorcodes #
This is an example plugin for displaying Eventbrite Events in Wordpress using shortcodes.
It toggle bwtween two views: a list view and a calendar view.

Usage: [wfea-toggle]

## Detailed Explanation ##
The plugin enqueue a jQuery script wfea-toogle.js  which hides the calendar view and then on button click toggles between the two views.
To add feel the buttons are disabled and enabled as required.
The two shortcodes are rendered in their own <div> so the jQuery can hde and show them as required.
There is a CSS file wfea-toggle.css which is enqueued but is empty and there just for completeness.


## Installation ##
1. Upload the plugin files to the `/wp-content/plugins/wfea-toggle` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

## Customization ##
This is an examplefeel free to clone and make your own changes.
