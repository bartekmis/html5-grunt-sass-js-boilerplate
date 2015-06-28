module.exports = function(grunt) {
    var config = {
        src:        'resources',
        dist:       'public'
    };

    var js = grunt.file.readJSON('./resources/javascripts.json');
    var scripts = [];

    js.vendor.forEach(function(script) {
        scripts.push('./public/vendor/'+script);
    });

    js.app.forEach(function(script) {
        scripts.push('./resources/js/'+script);
    });

    // Initialize the grunt configuration
    grunt.initConfig({

        // config
        config: config,
        scripts: scripts,

        // PHP serving
        php: {
            server: {
                options: {
                    base: 'public', // Project root
                    keepalive: false,
                    open: true
                }
            }
        },

        // Sass file compilation and compression
        sass: {
            frontend: {
                options: {
                    outputStyle: 'nasted',
                    sourceMap: false
                },
                files: [{
                    expand: true,
                    cwd: '<%= config.src %>/scss',
                    src: ['*.scss'],
                    dest: '<%= config.dist %>/css',
                    ext: '.css'
                }]
            }
        },

        // JS file concatenation
        concat: {
            frontend: {
                files: {
                    'public/js/global.js': '<%= scripts %>'
                }
            }
        },

        // Copy JS scripts from <%= config.src %>/js to <%= config.dist %>/js
        copy: {
          frontend: {
            files: [{
              expand: true,
              cwd: '<%= config.src %>/js',
              src: ['**'],
              dest: '<%= config.dist %>/js'
            }]
          }
        },

        // Cleaning the files
        clean: {
            build: ['<%= config.src %>/js/vendor.js'],
            dist: ['<%= config.dist %>/js']
        },

        // JS linting
        jshint: {
            src: ['<%= config.src %>/js/**/*.js'],
            options: {
                globals: {
                    require: true,
                    define: true,
                    requirejs: true,
                    describe: true,
                    expect: true,
                    it: true,
                    "$":false,
                    "jquery":false,
                    "console":false,
                    "require":false,
                    "process":false,
                    "__dirname":false,
                    "exports":false,
                    "angular":false,
                    "alert":false
                }
            }
        },

        // SCSS linting
        scsslint: {
            allFiles: [
              '<%= config.src %>/scss/**/*.scss',
            ],
            options: {
              bundleExec: false,
              colorizeOutput: false
            }
        },

        // JS file obfuscation
        uglify: {
            frontend: {
                src:  '<%= config.dist %>/js/global.js',
                dest: '<%= config.dist %>/js/global.min.js'
            }
        },

        // Combine Media Queries
        cmq: {
            options: {
              log: true
            },
            target: {
              files: {
                '<%= config.dist %>/css': ['<%= config.dist %>/css/main.css']
              }
            }
        },

        // CSS minification
        cssmin: {
            frontend: {
              files: [{
                expand: true,
                cwd: '<%= config.dist %>/css/',
                src: ['*.css', '!*.min.css'],
                dest: '<%= config.dist %>/css/',
                ext: '.css'
              }]
            }
        },

        // Adding autoprefixes to CSS files
        autoprefixer: {
            options: {
              //browsers: ['last 2 versions']
            },
            dist: {
              src: '<%= config.dist %>/css/*.css'
            }
        },

        // automatically run tasks when changing JS, Sass or PHP files
        watch: {
            sass_frontend: {
              files: [
                '<%= config.src %>/scss/*.scss', 
                '<%= config.src %>/scss/components/*.scss', 
                '<%= config.src %>/scss/components/*/*.scss'
            ],
              tasks: ['sass:frontend'],
              options: {
                spawn: false,
                livereload: true
              }
            },

            js: {
              files: ['<%= config.src %>/js/**'],
              tasks: ['copy:frontend'],
              options: {
                livereload: true,
                spawn: false
              }
            },
            views: {
                files: [
                    '<%= config.dist %>/*.html',
                    '<%= config.dist %>/*.php'
                ],
                options: {
                    livereload: true
                }
            }    
        }
    });


    // Load grunt plugins
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-combine-media-queries');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-php');

    // Run the tests with GJSLINT (Static Code Analysis)
    grunt.registerTask('test', ['scsslint', 'jshint']);

    // Set the task to call watching for changes and compilation tasks
    grunt.registerTask('default', 'Development', function() {
        grunt.file.write('resources/status.json', JSON.stringify({"code": "dev"}));
        grunt.log.writeln('#############################################################################');
        grunt.log.writeln('#                                                                           #');
        grunt.log.writeln('#                      Assets files to edit are available:                  #');       
        grunt.log.writeln('#               "/resources/js" & "/resources/scss"           #');
        grunt.log.writeln('#                                                                           #');
        grunt.log.writeln('#############################################################################');

        grunt.task.run(['copy:frontend', 'php:server', 'autoprefixer', 'watch']);
    });

    grunt.registerTask('serve', 'Just website serving', function() {
        grunt.task.run(['php:server', 'watch']);
    });

    // Set the task to generate production website (files concatenation, minification, compression etc.)
    grunt.registerTask('prod', 'Production', function() {
        grunt.file.write('resources/status.json', JSON.stringify({"code": "prod"}));
        grunt.task.run(['cmq', 'autoprefixer', 'cssmin:frontend', 'clean:dist', 'concat:frontend', 'uglify:frontend', 'clean:build']);
    });
};