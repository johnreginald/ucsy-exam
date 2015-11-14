var gulp = require('gulp');
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

gulp.task("copyfiles", function() {

	gulp.src("vendor/bower_dl/bootstrap/**")
		.pipe(gulp.dest("resources/assets/bootstrap/"));

	gulp.src("vendor/bower_dl/jquery/**")
		.pipe(gulp.dest("resources/assets/jquery/"));	

});


elixir.config.sourcemaps = false;

elixir(function(mix) {
	mix.styles([
		'../bootstrap/dist/css/bootstrap.min.css',
		'../css/app.css'
		], 'public/css/app.css');

	mix.scripts([
		'../jquery/dist/jquery.js',
		'../bootstrap/dist/js/bootstrap.min.js'	
		], 'public/js/app.js');
});