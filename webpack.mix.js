const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

/*mix.copy('node_modules/vali-admin/vendors/',
'public/vendors',false);

mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/images/',
'public/images',false);*/

mix.copy('node_modules/vali-admin/docs/css/main.css',
'public/css/main.css');

/*mix.copy('node_modules/StarAdmin-Free-Bootstrap-Admin-Template/images/favicon.png',
'public/images/');*/

mix.copy('node_modules/vali-admin/docs/js/plugins/bootstrap-datepicker.min.js',
'public/js/plugins/bootstrap-datepicker.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/bootstrap-notify.min.js',
'public/js/plugins/bootstrap-notify.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/chart.js',
'public/js/plugins/chart.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/dataTables.bootstrap.min.js',
'public/js/plugins/dataTables.bootstrap.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/fullcalendar.min.js',
'public/js/plugins/fullcalendar.bootstrap.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/jquery-ui.custom.min.js',
'public/js/plugins/jquery-ui.custom.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/jquery.dataTables.min.js',
'public/js/plugins/jquery.dataTables.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/jquery.vmap.min.js',
'public/js/plugins/jquery.vmap.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/jquery.vmap.sampledata.js',
'public/js/plugins/jquery.vmap.sampledata.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/jquery.vmap.world.js',
'public/js/plugins/jquery.vmap.world.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/moment.min.js',
'public/js/plugins/moment.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/pace.min.js',
'public/js/plugins/pace.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/select2.min.js',
'public/js/plugins/select2.min.js');

mix.copy('node_modules/vali-admin/docs/js/plugins/sweetalert.min.js',
'public/js/plugins/sweetalert.min.js');

mix.copy('node_modules/vali-admin/docs/js/bootstrap.min.js',
'public/js/');

mix.copy('node_modules/vali-admin/docs/js/jquery-3.2.1.min.js',
'public/js/');

mix.copy('node_modules/vali-admin/docs/js/main.js',
'public/js/');

mix.copy('node_modules/vali-admin/docs/js/popper.min.js',
'public/js/');

mix.copy('node_modules/vali-admin/src/',
'public/');
