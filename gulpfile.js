var gulp = require('gulp')
    sass = require('gulp-sass')
    plumber = require('gulp-plumber')
    prefix = require('gulp-prefix');

var indexSass = 'sass/index-styles.scss';
var accontsSass = 'sass/accounts-styles.scss';
var dashboardSass = 'sass/dashboard-styles.scss';
var mylists = 'sass/my-lists-styles.scss';

gulp.task('styles', function() {
  sassTask(indexSass);
  sassTask(accontsSass);
  sassTask(dashboardSass);
  sassTask(mylists);
})

function sassTask(src) {
  gulp.src(src)
      .pipe(plumber())
      .pipe(sass({outputStyle: 'compressed'}))
      .pipe(prefix('last 2 version'))
      .pipe(gulp.dest('css'))
}

gulp.task('default', function() {

  gulp.watch('sass/**/*.scss', ['styles']);
})