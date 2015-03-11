var gulp = require("gulp"),
	minifyCSS = require("gulp-minify-css"),
	uglify = require("gulp-uglify"),
	useref = require("gulp-useref"),
	plumber = require("gulp-plumber"),
	livereload = require("gulp-livereload"),
	sourcemaps = require("gulp-sourcemaps"),
	clean = require("gulp-clean"),
	http = require("http"),
	st = require("st");

var filesToMove = [
	"./traitement_mail.php",
	"img/**/*",
	"Librairies/brushed/_include/js/modernizr.js",
	"Librairies/brushed/_include/img/**/*"
];

/*Global tasks*/
gulp.task("default", ["build"]);

gulp.task("build", ["move", "html", "css", "js"]);

gulp.task("dev", ["html", "css-dev", "js-dev", "server"], function(){
	livereload.listen({ basePath: 'dist' });
	gulp.watch('css/*.css', ['css-dev']);
	gulp.watch('js/*.js', ['js-dev']);
	gulp.watch('*.php', ['move-dev']);
});

gulp.task('server', function(done) {
  http.createServer(
    st({ path: __dirname + '/dist', index: 'index.php', cache: false })
  ).listen(8080, done);
});

gulp.task("clean", function(){
	return gulp.src(['dist'], {read: false})
        .pipe(clean());
});

gulp.task("rename", ["clean"], function(){
	gulp.src("Librairies/brushed/_include/css/fonts/**/*.{ttf,woff,eof,svg}")
	    .pipe(gulp.dest("./dist/css/fonts"));
	gulp.src("Librairies/bootstrap/fonts/**/*.{ttf,woff,eof,svg}")
	    .pipe(gulp.dest("./dist/fonts"));
});

gulp.task("move", ["rename"], function(){
	return gulp.src(filesToMove, { base: './' })
		.pipe(gulp.dest("dist"));
});

gulp.task("move-dev", function(){
	return gulp.src(filesToMove, { base: './' })
		.pipe(gulp.dest("dist"));
});

gulp.task("html", function(){
	var assets = useref.assets();

	return gulp.src('./index.php')
        .pipe(assets)
        .pipe(assets.restore())
        .pipe(useref())
        .pipe(gulp.dest('dist'));
});


/*Tasks for development*/
gulp.task("js-dev", ["html"], function(){
	return gulp.src("dist/js/combined.js")
		.pipe(sourcemaps.init())
	    .pipe(uglify())
	    .pipe(sourcemaps.write())
	    .pipe(gulp.dest("./dist/js/"))
    	.pipe(livereload());
});

gulp.task("css-dev", ["html"], function(){
	return gulp.src("dist/css/combined.css")
		.pipe(sourcemaps.init())
	    .pipe(minifyCSS())
	    .pipe(sourcemaps.write())
	    .pipe(gulp.dest("./dist/css/"))
    	.pipe(livereload());
});


/*Tasks for build*/
gulp.task("js", ["html"], function(){
	return gulp.src("dist/js/combined.js")
	    .pipe(uglify())
	    .pipe(gulp.dest("./dist/js/"));
});

gulp.task("css", ["html"], function(){
	return gulp.src("dist/css/combined.css")
	    .pipe(minifyCSS())
	    .pipe(gulp.dest("./dist/css/"));
});
