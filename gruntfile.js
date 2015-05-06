module.exports = function(grunt) {
    
  // Configure task(s)
  grunt.initConfig({
    pkg:grunt.file.readJSON('package.json'),
    uglify: {
        build: {
            src: 'include-boutique/js/*.js',       
            dest: 'include-boutique/js-min/script.min.js',
        
    },
    
     dev: {
           options: {
               beautify: true, 
               mangle: false,
               compress: false,
               preserveComments: 'all'
           },
         src: 'include-boutique/js/*.js',       
         dest: 'include-boutique/js-min/script.min.js',   
        }
    },
    
     watch: { 
        js: {
            files: ['include-boutique/js/*.js'],   
            tasks: ['uglify:dev']
        },
        
        //For SASS
         css: {
            files: ['src/scss/application.scss'],   
            tasks: ['sass:dev']
        },
 
    },




    sass: {
        dev: {
           options:{
            outputStyle: 'expanded'
          },
          files: {
            'css/styles.css' : 'src/scss/application.scss'   
          }
        },
        
        
        
      build:{
        options : {
            outputStyle: 'compressed'
        },
        files: {
         'css/styles.css' : 'src/scss/application.scss'    
        }
        }
      
        
        
        
    },




  });
  
  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');  
  grunt.loadNpmTasks('grunt-sass');
  
  
    
  // Register task(s). 
  grunt.registerTask('default', ['uglify:dev','sass:dev']);
  grunt.registerTask('default', ['uglify:build','sass:build']);

    
};