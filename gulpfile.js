var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    bower = require('gulp-bower');
    concat = require('gulp-concat'),
    flatten = require('gulp-flatten'),
    jshint = require('gulp-jshint'),
    less = require('gulp-less'),
    minifyCss = require('gulp-minify-css'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util');

function errorLog(error) {
  console.error.bind(error);
  this.emit('end');
}

gulp.task('bower', function() {
  return bower()
    .on('error', errorLog)
    .pipe(gulp.dest('src/'));
});

// Copy web fonts to dist

gulp.task('fonts', function(){
  return gulp.src('src/**/fonts/*.{ttf,woff,woff2,eot,svg}')
    .pipe(flatten())
    .pipe(gulp.dest('fonts/'));
});

gulp.task('jshint', function() {
  return gulp.src(['src/**/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('scripts', function() {
  return gulp.src([
    'src/jquery/dist/jquery.min.js',
    'src/components-bootstrap/src/*.js',
    'src/bootstrap-material-design/scripts/*.js',
  ])
  .pipe(sourcemaps.init())
  .pipe(concat('app.js'))
  .pipe(uglify())
  .on('error', errorLog)
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('scripts'));
});

gulp.task('less', function(){
  return gulp.src('src/main.less')
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(sourcemaps.write('./'))
    .on('error', errorLog)
    .pipe(gulp.dest('styles/'));
});

gulp.task('sass', function(){
  return gulp.src('src/sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write('./'))
    .on('error', errorLog)
    .pipe(gulp.dest('styles'));
});

gulp.task('styles', function(){
  const AUTOPREFIXER_BROWSERS = [
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
  ]
  return gulp.src(['styles/main.css','styles/style.css'])
//    .pipe(changed('.tmp/styles', {extension: '.css'}))
  //    .pipe(sourcemaps.init())
    .pipe(concat('style.css'))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(minifyCss())
//    .pipe(sourcemaps.write())
    .pipe(gulp.dest('tmp'))
});

gulp.task('watch', function() {
  gulp.watch('src/**/*.js', ['jshint']);
});

gulp.task('default', ['watch'], function() {
  gutil.log(gutil.colors.yellow('[Gulp Tasks Beginning]'))
  gulp.watch('src/**/*.js', ['jshint', 'scripts']);
  //gulp.watch(input.sass, ['build-css']);
  //gutil.log(gutil.colors.yellow('[Gulp Tasks Ending]'))
  //gutil.log('stuff happened', 'Really it did', gutil.colors.magenta('123'));
});