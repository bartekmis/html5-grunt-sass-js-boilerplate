module.exports = function(grunt) {
    var appConfig = {
        mode:       'static', // static || php
        app:        'resources',
        dist:       'public',
        cmsApp:     'resources/cmsassets',
        cmsDist:    'public/cmsassets/'
    };

    var CMSjs = grunt.file.readJSON('./'+appConfig.cmsApp+'/javascripts.json');
    var cmsScripts = {
        vendor: [],
        scripts: []
    };

    CMSjs.vendor.forEach(function(script) {
        cmsScripts.vendor.push(appConfig.cmsDist+'/vendor/'+script);
    });

    CMSjs.assets.forEach(function(script) {
        cmsScripts.scripts.push('./resources/cmsassets/_ng/'+script);
    });

    var FRONTENDjs = grunt.file.readJSON('./resources/assets/javascripts.json');
    var FRONTENDscripts = [];

    FRONTENDjs.vendor.forEach(function(script) {
        FRONTENDscripts.push('./public/assets/vendor/'+script);
    });

    FRONTENDjs.js.forEach(function(script) {
        FRONTENDscripts.push('./resources/assets/js/'+script);
    });

    // Initialize the grunt configuration
    grunt.initConfig({

        // config
        ss: appConfig,
        cmsScripts: cmsScripts,
        FRONTENDscripts: FRONTENDscripts,

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
                    cwd: '<%= ss.app %>/assets/scss',
                    src: ['*.scss'],
                    dest: '<%= ss.dist %>/assets/css',
                    ext: '.css'
                }]
            },
            cms: {
                options: {
                    outputStyle: 'nasted',
                    sourceMap: false
                },
                files: [{
                    expand: true,
                    cwd: '<%= ss.cmsApp %>/_scss',
                    src: ['*.scss'],
                    dest: '<%= ss.cmsDist %>/_css',
                    ext: '.css'
                }]
            }
        },

        // JS file concatenation
        concat: {
            frontend: {
                files: {
                    'public/assets/js/global.js': '<%= FRONTENDscripts %>'
                }
            },
            cms: {
                files: {
                    '<%= ss.cmsDist %>_ng/vendor.js': '<%= cmsScripts.vendor %>',
                    '<%= ss.cmsDist %>_ng/scripts-final.js': '<%= cmsScripts.scripts %>'
                }
            }
        },

        // Copy JS scripts from <%= ss.app %>/assets/js to <%= ss.dist %>/assets/js
        copy: {
          frontend: {
            files: [{
              expand: true,
              cwd: '<%= ss.app %>/assets/js',
              src: ['**'],
              dest: '<%= ss.dist %>/assets/js'
            }]
          },
          cms: {
            files: [{
              expand: true,
              cwd: '<%= ss.cmsApp %>/_ng',
              src: ['**/*.js'],
              dest: '<%= ss.cmsDist %>/_ng'
            }]
          }
        },

        // Cleaning the files
        clean: {
            build: ['<%= ss.app %>/assets/js/vendor.js'],
            dist: ['<%= ss.dist %>/assets/js'],
            cms_dist: ['<%= ss.cmsDist %>_ng']
        },

        // JS linting
        jshint: {
            src: ['<%= ss.app %>/assets/js/**/*.js'],
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
              '<%= ss.app %>/assets/scss/**/*.scss',
            ],
            options: {
              bundleExec: false,
              colorizeOutput: false
            }
        },

        // JS file obfuscation
        uglify: {
            frontend: {
                src:  '<%= ss.dist %>/assets/js/global.js',
                dest: '<%= ss.dist %>/assets/js/global.min.js'
            },
            cms: {
                files: {
                    '<%= ss.cmsDist %>/_ng/vendor.min.js': ['<%= ss.cmsDist %>/_ng/vendor.js']
                }
            }
        },

        // Combine Media Queries
        cmq: {
            options: {
              log: true
            },
            target: {
              files: {
                '<%= ss.dist %>/assets/css': ['<%= ss.dist %>/assets/css/main.css']
              }
            }
        },

        // CSS minification
        cssmin: {
            frontend: {
              files: [{
                expand: true,
                cwd: '<%= ss.dist %>/assets/css/',
                src: ['*.css', '!*.min.css'],
                dest: '<%= ss.dist %>/assets/css/',
                ext: '.css'
              }]
            },
            cms: {
              files: [{
                expand: true,
                cwd: '<%= ss.cmsDist %>/_css/',
                src: ['*.css', '!*.min.css'],
                dest: '<%= ss.cmsDist %>/_css/',
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
              src: '<%= ss.dist %>/assets/css/*.css'
            }
        },

        // run PHP unit tests
        phpunit: {
            classes: {
                dir: '<%= ss.app %>/tests/'
            },
            options: {
                bin: 'vendor/bin/phpunit',
                colors: true
            }
        },

        // automatically run tasks when changing JS, Sass or PHP files
        watch: {
            sass_frontend: {
              files: ['<%= ss.app %>/assets/scss/*.scss', '<%= ss.app %>/assets/scss/components/*.scss', '<%= ss.app %>/assets/scss/components/*/*.scss'],
              tasks: ['sass:frontend'],
              options: {
                spawn: false,
                livereload: true
              }
            },
            sass_cms: {
              files: ['<%= ss.cmsApp %>/_scss/*.scss', '<%= ss.cmsApp %>/_scss/components/*.scss', '<%= ss.cmsApp %>/_scss/components/*/*.scss'],
              tasks: ['sass:cms'],
              options: {
                spawn: false,
                livereload: false
              }
            },

            js: {
              files: ['<%= ss.app %>/assets/js/**'],
              tasks: ['copy:frontend'],
              options: {
                livereload: true,
                spawn: false
              }
            },
            js_cms: {
              files: ['<%= ss.cmsApp %>/_ng/**/*.js'],
              tasks: ['copy:cms'],
              options: {
                livereload: false,
                spawn: false
              }
            },
            views: {
                files: [
                    '<%= ss.cmsApp %>/controllers/*.php',
                    '<%= ss.cmsApp %>/models/*.php',
                    '<%= ss.cmsApp %>/views/**',
                    '<%= ss.dist %>/*.html',
                    '<%= ss.dist %>/*.php',
                    '<%= ss.cmsApp %>/_ng/**/*.html',
                    '<%= ss.cmsApp %>/**'
                ],
                options: {
                    livereload: true
                }
            },
            /*
            tests: {
                files: [
                    '<%= ss.app %>/controllers/*.php',
                    '<%= ss.app %>/models/*.php',
                    '<%= ss.app %>/views/*.php'
                ],
                tasks: ['phpunit']
            }     
            */     
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
    grunt.loadNpmTasks('grunt-bower-concat');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-phpunit');

    // Set the default task
    grunt.registerTask('default', ['php:server', 'watch:views']);

    // Run the tests with GJSLINT (Static Code Analysis)
    grunt.registerTask('test', ['scsslint', 'jshint']);

    // Set the task to call watching for changes and compilation tasks
    grunt.registerTask('dev', 'Development', function() {
        grunt.file.write('resources/assets/status.json', JSON.stringify({"code": "dev"}));
        grunt.log.writeln('#############################################################################');
        grunt.log.writeln('#                                                                           #');
        grunt.log.writeln('#                      Assets files to edit are available:                  #');       
        grunt.log.writeln('#               "/resources/assets/js" & "/resources/assets/scss"           #');
        grunt.log.writeln('#                                                                           #');
        grunt.log.writeln('#############################################################################');
        if(appConfig.mode == 'static') {
            grunt.task.run(['copy:frontend', 'autoprefixer', 'watch']);
        }
        else {
            grunt.log.writeln('Started connect web server on http://app.dev');
            grunt.task.run(['watch:sass_frontend', 'watch:js', 'watch:views']);
        }
    });

    // Set the task to generate production website (files concatenation, minification, compression etc.)
    grunt.registerTask('prod', 'Production', function() {
        grunt.file.write('resources/assets/status.json', JSON.stringify({"code": "prod"}));
        grunt.task.run(['cmq', 'autoprefixer', 'cssmin:frontend', 'clean:dist', 'concat:frontend', 'uglify:frontend', 'clean:build']);
    });


    /*
    |--------------------------------------------------------------------------
    | CMS Development
    |--------------------------------------------------------------------------
    */
    // Set the task to call watching for changes and compilation tasks
    grunt.registerTask('dev:cms', 'Development', function() {
        grunt.file.write('resources/cmsassets/status.json', JSON.stringify({"code": "dev"}));

        if(appConfig.mode == 'static') {
            //grunt.log.writeln('Started connect web server on http://localhost/app_sample/');
            grunt.task.run(['copy:cms', 'watch']);
        }
        else {
            grunt.log.writeln('Started connect web server on http://newcms.dev');
            grunt.task.run(['watch']);
        }
    });

    // Set the task to generate production website (files concatenation, minification, compression etc.)
    grunt.registerTask('prod:cms', 'Production', function() {
        grunt.file.write('resources/cmsassets/status.json', JSON.stringify({"code": "prod"}));
        grunt.task.run(['cssmin:cms', 'clean:cms_dist', 'concat:cms', 'uglify:cms']);
    });
};