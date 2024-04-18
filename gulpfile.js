const imagemin = require("gulp-imagemin");
const del = require("del");

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
  watch(["app/scss//*.scss"], styles);
  watch(["app/js//*js", "!app/js/main.min.js"], scripts);
  watch(["app/*.html"]).on("change", browserSync.reload);
  watch(["app//*.php"]).on("change", browserSync.reload);
}

function cleanDist() {
  return del("dist");
}

function images() {
  return src("app/img//*")
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.mozjpeg({ quality: 75, progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
        imagemin.svgo({
          plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
        }),
      ])
    )
    .pipe(dest("dist/img"));
}

function build() {
  return src(
    [
      "app/css/style.min.css",
      "app/fonts//*",
      "app/js/main.min.js",
      "app/*.html",
      "app//*.php",
    ],
    { base: "app" }
  ).pipe(dest("dist"));
}

exports.styles = styles;
exports.watching = watching;
exports.browsersync = browsersync;
exports.build = series(cleanDist, images, build);
exports.default = parallel(styles, scripts, browsersync, watching);
