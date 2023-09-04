const mix = require("laravel-mix");

// Javascript
// mix.js(`resources/js/____.js`, `js`);

// SCSS
mix.sass("resources/sass/app.scss", `dist/output`);

// Development configuration
if (!mix.inProduction()) {
  mix.sourceMaps();
  mix.webpackConfig({ devtool: "inline-source-map" });
}

// Path resolve
mix.setResourceRoot("..");
mix.setPublicPath("dist");

// Disable notifications
mix.disableNotifications();
