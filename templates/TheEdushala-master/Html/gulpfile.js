var gulp = require('gulp');
sass = require("gulp-sass"),
postcss = require("gulp-postcss");
autoprefixer = require("autoprefixer");
var sourcemaps = require('gulp-sourcemaps'); 
var browserSync = require('browser-sync').create(); 
var cssbeautify = require('gulp-cssbeautify');
var beautify = require('gulp-beautify');


/*******************  LTR   ******************/


//_______ task for scss folder to css main style 
gulp.task('watch', function() {
	console.log('Command executed successfully compiling scss in assets.');
	 return gulp.src('Edomi/assets/scss/**/*.scss') 
		.pipe(sourcemaps.init())                       
		.pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		.pipe(sourcemaps.write(''))   
		.pipe(gulp.dest('Edomi/assets/css'))
		.pipe(browserSync.reload({
		  stream: true
	}))
})


//_______task for admin-custom
gulp.task('admin', function(){
   return gulp.src('Edomi/assets/css/admin-custom.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('Edomi/assets/css'));
		
})


//_______task for sidemenu
gulp.task('menu', function(){
   return gulp.src('Edomi/assets/css/sidemenu.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('Edomi/assets/css'));
		
})


//_______task for color
gulp.task('color', function(){
   return gulp.src('Edomi/assets/color-skins/color.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('Edomi/assets/color-skins'));
		
})

/*******************  RTL   ******************/


//_______ task for scss folder to css main style 
gulp.task('rtl-watch', function() {
	console.log('Command executed successfully compiling scss in assets.');
	 return gulp.src('Edomi/assets/scss-rtl/**/*.scss') 
		.pipe(sourcemaps.init())                       
		.pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
		.pipe(sourcemaps.write(''))   
		.pipe(gulp.dest('Edomi/assets/css-rtl'))
		.pipe(browserSync.reload({
		  stream: true
	}))
})


//_______task for admin-custom
gulp.task('rtl-admin', function(){
   return gulp.src('Edomi/assets/css-rtl/admin-custom.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('Edomi/assets/css-rtl'));
		
})


//_______task for sidemenu
gulp.task('rtl-menu', function(){
   return gulp.src('Edomi/assets/css-rtl/sidemenu.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('Edomi/assets/css-rtl'));
		
})


//_______task for color
gulp.task('rtl-color', function(){
   return gulp.src('Edomi/assets/color-skins-rtl/color.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
		.pipe(beautify.css({ indent_size: 4 }))	
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('Edomi/assets/color-skins-rtl'));
		
})



