module.exports = function(grunt) {
  grunt.initConfig({


    sass: {
      dist: {
        files: {
            'dist/css/main.css': 'src/scss/main.scss'
        }
      }
    },

    include_file: {
      default_options: {
	cwd: './',
        src: ['cvdts.html', 'contact.html'],
	dest: 'dist/' 
      }
    },


    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({
            browsers: ['last 2 versions']
          })
        ]
      },
      dist: {
        src: 'dist/css/style.css'
      }
    },

    watch: {
      styles: {
        files: ['src/scss/*.scss'],
        tasks: ['sass','postcss']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-include-file');
}
