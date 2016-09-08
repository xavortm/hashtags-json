var gulp = require('gulp'),
	fixJson = require('gulp-fix-json')

gulp.task('fix-json', function() {
	return gulp.src('hashtags.json')
	.pipe(fixJson())
	.on('error', function(err) {
		console.log('Error parsing json: ' + err.message);
	})
	.pipe(gulp.dest('.'))
});

gulp.task('default', ['fix-json']);
