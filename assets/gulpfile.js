var gulp = require('gulp'),
    sass = require('gulp-sass');
    purgecss = require("gulp-purgecss");
    autoprefixer = require('gulp-autoprefixer');
    sourcemaps = require('gulp-sourcemaps');
    concat = require('gulp-concat');
    uglify = require('gulp-uglify-es').default;
    rename = require('gulp-rename');

// npm install -save-dev gulp gulp-sass gulp-purgecss gulp-autoprefixer gulp-sourcemaps gulp-concat gulp-uglify-es gulp-rename

// ------------------------------------------------- configs
var paths = {
  sass: {
    src: './scss/**/*.{scss,sass}',
    dest: './css'
  },
  script: {
    src: './scripts/*.js',
    dest: './js'
  }
};

var theme = "bax";

// ---------------------------------------------- Gulp Tasks
gulp.task('sass', () => {
  return gulp.src(paths.sass.src)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest(paths.sass.dest))
});

gulp.task('script', () => {
  return gulp.src(paths.script.src)
    .pipe(concat(theme + '.js'))
    .pipe(uglify())
    .on('error', err => { console.log(err); })
    .pipe(gulp.dest(paths.script.dest));
});

// ---------------------------------------------- Gulp Watch
gulp.task('watch:styles', () => {
  gulp.watch(paths.sass.src, gulp.series('sass'));
});

gulp.task('watch:script', () => {
  gulp.watch(paths.script.src, gulp.series('script'));
});

gulp.task('watch', gulp.series('sass', 'script',
  gulp.parallel('watch:styles', 'watch:script')
));

// -------------------------------------------- Default task
gulp.task('default', gulp.series('sass', 'script',
  gulp.parallel('watch')
));
