const { src, dest, watch, parallel, series } = require("gulp");

const scss = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const browserSync = require("browser-sync").create();
const uglify = require("gulp-uglify-es").default;

function browsersync() {
  browserSync.init({
    // server: {
    //   baseDir: "app/",
    // },
    proxy: "Crypto",
  });
}

function scripts() {
  return src(["app/js/main.js"])
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(dest("app/js"))
    .pipe(browserSync.stream());
}

function styles() {
  return (
    src("app/scss/style.scss")
      .pipe(scss({ outputStyle: "compressed" }))
      .pipe(concat("style.min.css"))
      // .pipe(
      //   autoprefixer({
      //     overrideBrowserslist: ["last 10 version"],
      //     grid: true,
      //   })
      // )
      .pipe(dest("app/css"))
      .pipe(browserSync.stream())
  );
}

function watching() {
  watch(["app/scss/**/*.scss"], styles);
  watch(["app/js/**/*js", "!app/js/main.min.js"], scripts);
  watch(["app/*.html"]).on("change", browserSync.reload);
  watch(["app/**/*.php"]).on("change", browserSync.reload);
}

exports.styles = styles;
exports.watching = watching;
exports.browsersync = browsersync;
exports.default = parallel(styles, scripts, browsersync, watching);
