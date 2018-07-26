module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/build/production.css': 'css/main.scss'
                }
            }
        },

        autoprefixer: {
            dist: {
                options: {
                    browsers: ['>0.25%', 'not op_mini all']
                },
                files: {
                    'css/build/production.css': 'css/build/production.css'
                }
            }
        },

        php: {
            watch: {},
            options: {
                open: true,
            }
        },

        watch: {
            css: {
                files: ['css/*.scss'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: false,
                }
            },
        },

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['php:watch', 'watch']);
    grunt.registerTask('build', ['sass', 'autoprefixer']);

};
