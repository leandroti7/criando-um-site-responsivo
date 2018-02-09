var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

gulp.task('sass', function () {
    return gulp.src('sass/**/*.sass')
        .pipe(sass().on('error', sass.logError))
   		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
       
        .pipe(gulp.dest('css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('sass/**/*.sass', ['sass']);
});

//task para watch
gulp.task('watch', function () {
    gulp.watch('sass/**/*.sass', ['sass'])
});

gulp.task('default',['sass','watch']);


/*task default gulp
gulp.task('sass', function () {
});

//task para sass
gulp.task('sass', function () {
    return sass('sass/**'/*.sass').pipe(gulp.dest('css'))
});

//
*/