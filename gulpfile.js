// !Exporting Modules installed from NPM!
"use strict";

const { src, dest, watch, series, parallel } = require("gulp");
const plumber = require("gulp-plumber");
// const yargs = require("yargs");
const browserSync = require("browser-sync").create();
const less = require("gulp-less");
const rename = require("gulp-rename");
const autoprefixer = require("gulp-autoprefixer");
const minifyCSS = require("gulp-csso");
// const gulpif = require("gulp-if");
// const PRODUCTION = yargs.argv.prod;

// !compile less into css
function styles() {
  //where are my less files
  return (
    src("styles/*.less")
      //Until compile, it will:
      //rename the file
      .pipe(rename({ suffix: ".min" }))
      //avoid errors
      .pipe(plumber())
      //compile less into css
      .pipe(less())
      //auto prefix
      .pipe(
        autoprefixer({
          overrideBrowserslist: ["last 2 versions"],
          cascade: false
        })
      )
      //minify the css file
      .pipe(minifyCSS())
      //alocate the CSS file to the public folder
      .pipe(dest("dist/styles"))
      //Stream changes to all browsers
      .pipe(browserSync.stream())
  );
}
