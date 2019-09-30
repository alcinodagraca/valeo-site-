import gulp from "gulp";
import yargs from "yargs";
import plumber from "gulp-plumber";
import less from "gulp-less";
import cleanCSS from "gulp-clean-css";
import gulpif from "gulp-if";
import sourcemaps from "gulp-sourcemaps";
import imagemin from "gulp-imagemin";
import del from "del";

const PRODUCTION = yargs.argv.prod;

const paths = {
  styles: {
    src: "src/assets/styles/bundle.less",
    dest: "dist/assets/styles/"
  },
  scripts: {
    src: "src/assets/scripts/**/*.js",
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
  }
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

export const watch = () => {
  gulp.watch("src/assets/styles/**/*.less", styles);
  gulp.watch(paths.images.src, images);
  gulp.watch(paths.others.src, copy);
};

export const dev = gulp.series(
  clean,
  gulp.parallel(styles, images, copy),
  watch
);
export const build = gulp.series(clean, gulp.parallel(styles, images, copy));

export default dev;
