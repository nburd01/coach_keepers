const mix = require("laravel-mix");

// Javascript
// mix.js(`resources/js/____.js`, `js`);

// SCSS
mix.sass("resources/sass/app.scss", `css`);

// Development configuration
if (!mix.inProduction()) {
  mix.sourceMaps();
  mix.webpackConfig({ devtool: "inline-source-map" });
}

// Path resolve
mix.setResourceRoot("..");
mix.setPublicPath("assets");

// Disable notifications
mix.disableNotifications();
