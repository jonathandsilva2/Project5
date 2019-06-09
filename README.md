# RED Starter

A WordPress starter theme for RED Academy students, forked from Underscores.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `redstarter-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).


For this project, I set out to complete the full main requirements. With the use of wordpress in project 5, I feel like my skills have significantly improve in project 5. 
For HTML and CSS, I used semantic headings and articles, and used CSS across 3 breakpoints, while preserving the artist's vision. For the breakpoints, I utilized a mixin to easily set up breakpoints for the CSS portion. In terms of the Ajax Calls, I utilized a get and post methods , using .done and .fail functions within each call. 

I was unable to figure out the custom WP API endpoint, and if given more time, I would look into completing that portion of the stretch goals.