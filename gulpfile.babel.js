import gulp from "gulp";
import yargs from "yargs";
import plumber from "gulp-plumber";
import less from "gulp-less";
import cleanCSS from "gulp-clean-css";
import gulpif from "gulp-if";
import sourcemaps from "gulp-sourcemaps";
import imagemin from "gulp-imagemin";
import del from "del";
import webpack from "webpack-stream";
import uglify from "gulp-uglify";
import browserSync from "browser-sync";
import zip from "gulp-zip";
import replace from "gulp-replace";
import info from "./package.json";

const server = browserSync.create();
const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {
    src: "src/assets/styles/bundle.less",
    dest: "dist/assets/styles/"
  },
  scripts: {
    src: "src/assets/scripts/bundle.js",
    dest: "dist/assets/scripts/"
  },
  images: {
    src: "src/assets/images/**/**/*.{jpg,jpeg,png,svg,gif}",
    dest: "dist/assets/images/"
  },
  others: {
    src: [
      "src/assets/**/*",
      "!src/assets/{images/scripts,styles}",
      "!src/assets/{images/scripts,styles}/**/*"
    ],
    dest: "dist/assets"
  },
  package: {
    src: [
      "**/*",
      "!.vscode",
      "!src{,/**}",
      "!packaged{,/**}",
      "!.gitignore",
      "!node_modules{,/**}",
      "!.babelrc",
      "!gulpfile.babel.js",
      "!package-lock.json",
      "!package.json"
    ],
    dest: "packaged"
  }
};

export const serve = done => {
  server.init({
    proxy: "http://valeo.local/"
  });
  done();
};

export const reload = done => {
  server.reload();
  done();
};

export const clean = done => {
  return del(["dist"]);
  done();
};

export const styles = () => {
  return gulp
    .src(paths.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(plumber())
    .pipe(less())
    .pipe(gulpif(PRODUCTION, cleanCSS({ compatibility: "ie8" })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest(paths.styles.dest));
};

export const images = () => {
  return gulp
    .src(paths.images.src)
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(gulp.dest(paths.images.dest));
};

export const copy = () => {
  return gulp.src(paths.others.src).pipe(gulp.dest(paths.others.dest));
};

export const scripts = () => {
  return gulp
    .src(paths.scripts.src)
    .pipe(
      webpack({
        module: {
          rules: [
            {
              test: /\.m?js$/,
              exclude: /(node_modules|bower_components)/,
              use: {
                loader: "babel-loader",
                options: {
                  presets: ["@babel/preset-env"]
                }
              }
            }
          ]
        },
        output: {
          filename: "bundle.js"
        },
        devtool: !PRODUCTION ? "inline-source-map" : false
      })
    )
    .pipe(gulpif(PRODUCTION, uglify()))
    .pipe(gulp.dest(paths.scripts.dest));
};

export const compress = () => {
  return gulp
    .src(paths.package.src)
    .pipe(replace("_themename", info.name))
    .pipe(zip(`${info.name}.zip`))
    .pipe(gulp.dest(paths.package.dest));
};

export const watch = () => {
  gulp.watch("src/assets/styles/**/*.less", gulp.series(styles, reload));
  gulp.watch("src/assets/scripts/**/*.js", gulp.series(scripts, reload));
  gulp.watch(paths.images.src, gulp.series(images, reload));
  gulp.watch("**/*.php", reload);
  gulp.watch(paths.others.src, gulp.series(copy, reload));
};

export const dev = gulp.series(
  clean,
  gulp.parallel(styles, scripts, images, copy),
  serve,
  watch
);
export const build = gulp.series(
  clean,
  gulp.parallel(styles, scripts, images, copy)
);
export const bundle = gulp.series(build, compress);

export default dev;
