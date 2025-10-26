const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const plumber = require('gulp-plumber');
const browserSync = require('browser-sync').create();

// Компиляция SCSS в CSS
function styles() {
  return gulp.src('scss/**/*.scss')
    .pipe(plumber())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(gulp.dest('css/'))
    .pipe(browserSync.stream());
}

// Обработка JavaScript
function scripts() {
  return gulp.src('js/src/**/*.js')
    .pipe(plumber())
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js/'))
    .pipe(browserSync.stream());
}

// Сервер и отслеживание файлов
function serve() {
  browserSync.init({
    server: {
      baseDir: "./"
    },
    port: 3000,
    open: true
  });

  gulp.watch('scss/**/*.scss', styles);
  gulp.watch('js/src/**/*.js', scripts);
  gulp.watch('*.html').on('change', browserSync.reload);
}

// Сборка проекта
const build = gulp.series(gulp.parallel(styles, scripts));

// Задачи
exports.styles = styles;
exports.scripts = scripts;
exports.serve = serve;
exports.build = build;
exports.default = gulp.series(build, serve);