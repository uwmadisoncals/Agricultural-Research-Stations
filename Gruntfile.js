module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: ['js/jquery-1.7.1.min.js','js/jquery.ui.js','js/jquery.iosslider.js','js/jquery.isotope.min.js','js/jquery-css-transform.js','js/jquery-rotate.js','js/browserdetect.js','js/mainactions.js','js/min/gsapi.min.js','js/blurobjs.js','library/scripts/vallenato.js'],
        dest: 'js/min/master.min.js'
      }
    },

  autoprefixer: {
    options: {
      // Task-specific options go here.
    },
    single_file: {
      options: {
        // Target-specific options go here.
      },
      src: 'main.css',
      dest: 'main.css'
    },
  },

  sass: {                              // Task
    dist: {                            // Target
      options: {                       // Target options
        style: 'compressed'
      },
      files: {                         // Dictionary of files
        'main.css': 'main.scss'      // 'destination': 'source'

      }
    }
  },
  concat: {
    options: {
      separator: ' ',
    },
    dist: {
      src: ['main.css', 'mobile.css'],
      dest: 'master.css',
    },
  },
  watch: {
	  css: {
	    files: '**/*.scss',
	    tasks: ['sass','autoprefixer'],
      options: {
      livereload: true,
      },
	  }
	},

	imagemin: {                          // Task
	    dynamic: {                         // Another target
	      files: [{
	        expand: true,                  // Enable dynamic expansion
	        cwd: 'images/',                   // Src matches are relative to this path
	        src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
	        dest: 'dist/'                  // Destination path prefix
	      }]
	    }
	  }

  });
  grunt.event.on('watch', function(action, filepath, target) {
  grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
});

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-autoprefixer');


  // Default task(s).
  grunt.registerTask('default', ['uglify']);
  grunt.registerTask('default', ['sass']);
  grunt.registerTask('default', ['concat']);
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('default', ['imagemin']);
  grunt.registerTask('default', ['autoprefixer']);



};