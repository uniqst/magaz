const gulp = require('gulp');
const rename = require('gulp-rename');
const watch = require('gulp-watch');
const _if = require('gulp-if');

const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

const sourcemaps = require('gulp-sourcemaps');
// const precss = require('precss');
// const cssnano = require('cssnano');
// const cssnext = require('cssnext');
// const doiuse = require('doiuse');

const production = false;

gulp.task('bootstrap', function() {
  return gulp.src([
    'node_modules/bootstrap/scss/bootstrap.scss'
  ])
    .pipe(sass())
    .pipe(gulp.dest("web/css"))
});

gulp.task('bs4', () => {
  return gulp.src([
    'node_modules/bootstrap/scss/**/*',
  ])
    .pipe(gulp.dest("src/scss/bootstrap"))
})

gulp.task('js', function() {
  return gulp.src([
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js'
  ])
    .pipe(gulp.dest("web/js/libs"))
});

gulp.task('scss:build', () => {
  let processors = [
    autoprefixer({
      browsers: ['>1%', 'last 2 version', 'ie>9'],
    }),
  ];

  // gulp.src(['src/scss/**/*.{scss,sass}'])
  gulp.src(['src/scss/index.scss'])
    // .pipe(_if(!production, sourcemaps.init()))
    .pipe(sourcemaps.init())
    .pipe(sass({
      // includePaths: [
      //   './bower_components/breakpoint-sass/stylesheets',
      //   './bower_components/susy/sass',
      //   './bower_components/compass-sass-mixins/lib'
      // ]
    }).on('error', sass.logError))
    //.on('error', gutil.log)
    .pipe(postcss(processors))
    // .pipe(_if(production, gcssnano()))
    // .pipe(_if(!production, sourcemaps.write()))
    .pipe(rename('styles.css'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('web/css'))
});

gulp.task('build', [
  //'bootstrap',
  //'js',
  'scss:build'
]);

gulp.task('watch', () => {
  watch(['src/**/*.{scss,sass}'], (event, cb) => {
    gulp.start('scss:build')
  });
})


gulp.task('default', ['build', 'watch']);
