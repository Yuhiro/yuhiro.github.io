module.exports = function (grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		concat: {
			css: {
				src: [
					'bower_components/bootstrap/dist/css/bootstrap.min.css',
					'bower_components/fontawesome/css/font-awesome.min.css',
					'bower_components/animate.css/animate.min.css',
					'bower_components/swipebox/src/css/swipebox.min.css',
					'media/css/tooltip-box.css',
					'media/css/style.css'
				],
				dest: 'media/css/combined.css'
			},
			js: {
				src: [
					'bower_components/jquery/dist/jquery.min.js',
					'bower_components/bootstrap/dist/js/bootstrap.min.js',
					'bower_components/jquery.easing/js/jquery.easing.min.js',
					'bower_components/modernizr/modernizr.js',
					'bower_components/wowjs/dist/wow.min.js',
					'bower_components/swipebox/src/js/jquery.swipebox.min.js',
					'media/js/main.js'
				],
				dest: 'media/js/combined.js'
			}
		},
		cssmin: {
			minify: {
				src: 'media/css/combined.css',
				dest: 'media/css/style.min.css'
			}
		},
		uglify: {
			js: {
				files: {
					'media/js/main.min.js': 'media/js/combined.js'
				}
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	//grunt.registerTask('default', ['concat:css', 'cssmin:css', 'concat:js', 'uglify:js']);
	grunt.registerTask('default', ['concat:css', 'concat:js', 'cssmin:minify', 'uglify:js']);
};