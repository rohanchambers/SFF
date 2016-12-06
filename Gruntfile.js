module.exports = function (grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		jshint: {
			all: ['*.js']
		},

		concat: {
			options: {
			  separator: ';',
			},
			dist: {
			  src: ['js/vendor/skrollr.stylesheets.min.js', 'js/vendor/skrollr.min.js'],
			  dest: 'js/plugins.min.js',
			},
		},
				
		uglify: {
			dist: {
				src: 'js/main.js',
				dest: 'js/main.min.js'
			}
		},

		sass: {
		    dist: {
		      files: {
		        'css/main.css': 'css/main.scss'
		      }
		    }
		  },

		cssmin: {
		  combine: {
		    files: {
		      'css/main.min.css': ['css/normalize.css', 'css/main.css']
		    }
		  }
		},

 		// Watch task config
		watch: {
			html: {
				files: '/',
			},
			css: {
				files: 'css/*.scss',
				tasks: ['sass']
			},
			js: {
				files: 'js/*.js',
			}
		}						
	});
	
  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-concat');  
  
	// Dev
grunt.registerTask('default', ['watch']);

// Default task(s).
grunt.registerTask('grunt prod', ['jshint','uglify', 'concat', 'sass', 'cssmin']);	
  
};