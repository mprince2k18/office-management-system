<?php

// StudentController

Route::get('student', 'StudentController@index')->name('student.index')
->middleware('permissions:student-create');
Route::post('student/create', 'StudentController@create')->name('student.create')
->middleware('permissions:student-create');
Route::get('student/all', 'StudentController@all')->name('student.all')
->middleware('permissions:student-all');
Route::get('student/profile/{student_id}', 'StudentController@profile')->name('student.profile')
->middleware('permissions:student-profile');
Route::get('student/edit/{student_id}', 'StudentController@edit')->name('student.edit')
->middleware('permissions:student-edit');
Route::post('student/update/{student_id}', 'StudentController@update')->name('student.update')
->middleware('permissions:student-update');

// TeacherController
Route::get('teacher', 'TeacherController@index')->name('teacher.index')
->middleware('permissions:teacher-index');
Route::post('teacher/create', 'TeacherController@create')->name('teacher.create')
->middleware('permissions:teacher-create');
Route::get('teacher/all', 'TeacherController@all')->name('teacher.all')
->middleware('permissions:teacher-all');
Route::get('teacher/profile/{teacher_id}', 'TeacherController@profile')->name('teacher.profile')
->middleware('permissions:teacher-profile');
Route::get('teacher/edit/{teacher_id}', 'TeacherController@edit')->name('teacher.edit')
->middleware('permissions:teacher-edit');
Route::post('teacher/update/{teacher_id}', 'TeacherController@update')->name('teacher.update')
->middleware('permissions:teacher-update');

// CourseController
Route::get('course', 'CourseController@index')->name('course.index')
->middleware('permissions:course-index');
Route::post('course/create', 'CourseController@create')->name('course.create')
->middleware('permissions:course-create');
Route::get('course/all', 'CourseController@all')->name('course.all')
->middleware('permissions:course-all');
Route::get('course/profile/{course_id}', 'CourseController@profile')->name('course.profile')
->middleware('permissions:course-profile');
Route::get('course/edit/{course_id}', 'CourseController@edit')->name('course.edit')
->middleware('permissions:course-edit');
Route::post('course/update/{course_id}', 'CourseController@update')->name('course.update')
->middleware('permissions:course-update');

// CourseController
Route::get('batch', 'BatchController@index')->name('batch.index');
Route::post('batch/create', 'BatchController@create')->name('batch.create');
Route::get('batch/all', 'BatchController@all')->name('batch.all');
// Route::get('batch/profile/{course_id}', 'BatchController@profile')->name('batch.profile');
// Route::get('batch/edit/{course_id}', 'BatchController@edit')->name('batch.edit');
// Route::post('batch/update/{course_id}', 'BatchController@update')->name('batch.update');

// VisitorController
Route::get('visitor', 'VisitorController@index')->name('visitor.index');
Route::post('visitor/create', 'VisitorController@create')->name('visitor.create');
Route::get('visitor/all', 'VisitorController@all')->name('visitor.all');
Route::get('batch/profile/{batch_id}', 'BatchController@profile')->name('batch.profile');
// Route::get('batch/edit/{course_id}', 'BatchController@edit')->name('batch.edit');
// Route::post('batch/update/{course_id}', 'BatchController@update')->name('batch.update');

// SeminarController
Route::get('seminar', 'SeminarController@index')->name('seminar.index');
Route::post('seminar/create', 'SeminarController@create')->name('seminar.create');
Route::get('seminar/all', 'SeminarController@all')->name('seminar.all');
Route::get('seminar/profile/{batch_id}', 'SeminarController@profile')->name('seminar.profile');
// Route::get('batch/edit/{course_id}', 'BatchController@edit')->name('batch.edit');
// Route::post('batch/update/{course_id}', 'BatchController@update')->name('batch.update');



// VisitorController
Route::get('enrollment', 'EnrollController@index')->name('enroll.index');
Route::post('enroll/create', 'EnrollController@create')->name('enroll.create');
Route::get('enroll/all', 'EnrollController@all')->name('enroll.all');
Route::post('get/course/fee', 'EnrollController@courseFee')->name('courseFee');
Route::get('enroll/profile/{enroll_id}', 'EnrollController@profile')->name('enroll.profile');
Route::get('enroll/edit/{enroll_id}', 'EnrollController@edit')->name('enroll.edit');
Route::post('enroll/update/{enroll_id}', 'EnrollController@update')->name('enroll.update');



// EmployeeController
Route::get('employee', 'EmployeeController@index')->name('employee.index');
Route::post('employee/create', 'EmployeeController@create')->name('employee.create');
Route::get('employee/all', 'EmployeeController@all')->name('employee.all');
Route::get('employee/profile/{employee_id}', 'EmployeeController@profile')->name('employee.profile');
Route::get('employee/edit/{employee_id}', 'EmployeeController@edit')->name('employee.edit');
Route::post('employee/update/{employee_id}', 'EmployeeController@update')->name('employee.update');


// RequisitionController
Route::get('requisition', 'RequisitionController@index')->name('requisition.index');
Route::post('requisition/create', 'RequisitionController@create')->name('requisition.create');
Route::get('requisition/all', 'RequisitionController@all')->name('requisition.all');
Route::get('requisition/profile/{requisition_id}', 'RequisitionController@profile')->name('requisition.profile');
Route::get('requisition/edit/{requisition_id}', 'RequisitionController@edit')->name('requisition.edit');
Route::post('requisition/update/{requisition_id}', 'RequisitionController@update')->name('requisition.update');
Route::get('requisition/download/{requisition_id}', 'RequisitionController@download')->name('download.photo');



//Designation
Route::post('designation/create', 'EmployeeController@designation_create')->name('designation.create');
//Duties
Route::post('duties/create', 'EmployeeController@duties_create')->name('duties.create');



// AppSettingsController
Route::get('/application/settings','AppSettingsController@index')->name('app_index');

Route::post('/application/settings/logo/create','AppSettingsController@logo_create')->name('logo.create');
Route::get('/application/settings/logo/delete/{logo_id}','AppSettingsController@logo_delete')->name('logo.delete');
Route::get('/application/settings/logo/{logo_id}/change','AppSettingsController@logo_active')->name('logo.active');

// AdminController
Route::get('/admin/user','AdminController@index')->name('admin.index');
Route::post('/admin/role/create','AdminController@role_create')->name('role.create');
Route::post('/admin/user/create','AdminController@user_create')->name('user.create');


// ActivityController
Route::get('activity/log', 'ActivityController@index')->name('activity.index');
Route::get('activity/log/search', 'ActivityController@searchLog')->name('activity.search');


// ReportController
Route::get('report', 'ReportController@index')->name('report.index');


// Auth
Route::get('non-verified', 'OpenController@index')->name('outsider.index');


// UserProfile

// Route::get('student/profile/{student_id}/{name}', 'StudentProfileController@index')->name('student.profile.index');



//Todo:there are the user Manager section
Route::get('user/destroy/{id}','UserController@destroy')->name('users.destroy');
Route::get('user/create','UserController@create')->name('users.create');
//Route::get('user/create','UserController@create')->middleware('permissions:user-create');
Route::post('user/store','UserController@store')->name('users.store');
Route::get('user/edit/{id}','UserController@edit')->name('users.edit');
Route::post('user/update','UserController@update')->name('users.update');
Route::get('user/show/{id}','UserController@show')->name('users.show');
Route::get('user/index','UserController@index')->name('users.index');

//permission
Route::get('permission/destroy/{id}','PermissionController@destroy')->name('permissions.destroy');
Route::get('permission/create','PermissionController@create')->name('permissions.create');
Route::post('permission/store','PermissionController@store')->name('permissions.store');
Route::get('permission/edit/{id}','PermissionController@edit')->name('permissions.edit');
Route::post('permission/update','PermissionController@update')->name('permissions.update');
Route::get('permission/show/{id}','PermissionController@show')->name('permissions.show');
Route::get('permission/index','PermissionController@index')->name('permissions.index');

//group
Route::get('group/destroy/{id}','GroupController@destroy')->name('groups.destroy');
Route::get('group/create','GroupController@create')->name('groups.create');
Route::post('group/store','GroupController@store')->name('groups.store');
Route::get('group/edit/{id}','GroupController@edit')->name('groups.edit');
Route::post('group/update','GroupController@update')->name('groups.update');
Route::get('group/show/{id}','GroupController@show')->name('groups.show');
Route::get('group/index','GroupController@index')->name('groups.index');
//end


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {return view('welcome');});

Route::get('/', function () {
    return redirect('dashboard/index');
 });

/* Dashboard */
Route::get('dashboard', function () { return redirect('dashboard/index'); });
Route::get('dashboard/index', 'DashboardController@index')->name('dashboard.index');

/* Profile */
Route::get('profile', function () { return redirect('profile/my-profile'); });
Route::get('profile/my-profile', 'ProfileController@myProfile')->name('profile.my-profile');

/* App */
Route::get('app', function () { return redirect('app/inbox'); });
Route::get('app/inbox', 'AppController@inbox')->name('app.inbox');
Route::get('app/compose', 'AppController@compose')->name('app.compose');
Route::get('app/single', 'AppController@single')->name('app.single');
Route::get('app/chat', 'AppController@chat')->name('app.chat');
Route::get('app/calendar', 'AppController@calendar')->name('app.calendar');
Route::get('app/contact-list', 'AppController@contactList')->name('app.contact-list');

/* Project */
Route::get('project', function () { return redirect('project/project-list'); });
Route::get('project/project-list', 'ProjectController@projectList')->name('project.project-list');
Route::get('project/taskboard', 'ProjectController@taskboard')->name('project.taskboard');
Route::get('project/ticket-list', 'ProjectController@ticketList')->name('project.ticket-list');
Route::get('project/ticket-detail', 'ProjectController@ticketDetail')->name('project.ticket-detail');

/* File Manager */
Route::get('file-manager', function () { return redirect('file-manager/all'); });
Route::get('file-manager/all', 'FileManagerController@all')->name('file-manager.all');
Route::get('file-manager/documents', 'FileManagerController@documents')->name('file-manager.documents');
Route::get('file-manager/media', 'FileManagerController@media')->name('file-manager.media');
Route::get('file-manager/image', 'FileManagerController@image')->name('file-manager.image');

/* Blog */
Route::get('blog', function () { return redirect('blog/dashboard'); });
Route::get('blog/dashboard', 'BlogController@dashboard')->name('blog.dashboard');
Route::get('blog/new-post', 'BlogController@newPost')->name('blog.new-post');
Route::get('blog/list', 'BlogController@list')->name('blog.list');
Route::get('blog/grid', 'BlogController@grid')->name('blog.grid');
Route::get('blog/detail', 'BlogController@detail')->name('blog.detail');

/* Ecommerce */
Route::get('ecommerce', function () { return redirect('ecommerce/dashboard'); });
Route::get('ecommerce/dashboard', 'EcommerceController@dashboard')->name('ecommerce.dashboard');
Route::get('ecommerce/product', 'EcommerceController@product')->name('ecommerce.product');
Route::get('ecommerce/product-list', 'EcommerceController@productList')->name('ecommerce.product-list');
Route::get('ecommerce/product-detail', 'EcommerceController@productDetail')->name('ecommerce.product-detail');

/* components */
Route::get('components', function () { return redirect('components/ui'); });
Route::get('components/ui', 'ComponentsController@ui')->name('components.ui');
Route::get('components/alerts', 'ComponentsController@alerts')->name('components.alerts');
Route::get('components/collapse', 'ComponentsController@collapse')->name('components.collapse');
Route::get('components/colors', 'ComponentsController@colors')->name('components.colors');
Route::get('components/dialogs', 'ComponentsController@dialogs')->name('components.dialogs');
Route::get('components/list', 'ComponentsController@list')->name('components.list');
Route::get('components/media', 'ComponentsController@media')->name('components.media');
Route::get('components/modals', 'ComponentsController@modals')->name('components.modals');
Route::get('components/notifications', 'ComponentsController@notifications')->name('components.notifications');
Route::get('components/progressbars', 'ComponentsController@progressbars')->name('components.progressbars');
Route::get('components/range', 'ComponentsController@range')->name('components.range');
Route::get('components/sortable', 'ComponentsController@sortable')->name('components.sortable');
Route::get('components/tabs', 'ComponentsController@tabs')->name('components.tabs');
Route::get('components/waves', 'ComponentsController@waves')->name('components.waves');

/* Font Icons */
Route::get('icons', function () { return redirect('icons/material'); });
Route::get('icons/material', 'IconsController@material')->name('icons.material');
Route::get('icons/themify', 'IconsController@themify')->name('icons.themify');
Route::get('icons/weather', 'IconsController@weather')->name('icons.weather');

/* Form */
Route::get('form', function () { return redirect('form/basic'); });
Route::get('form/basic', 'FormController@basic')->name('form.basic');
Route::get('form/advanced', 'FormController@advanced')->name('form.advanced');
Route::get('form/examples', 'FormController@examples')->name('form.examples');
Route::get('form/validation', 'FormController@validation')->name('form.validation');
Route::get('form/wizard', 'FormController@wizard')->name('form.wizard');
Route::get('form/editors', 'FormController@editors')->name('form.editors');
Route::get('form/upload', 'FormController@upload')->name('form.upload');
Route::get('form/summernote', 'FormController@summernote')->name('form.summernote');

/* Tables */
Route::get('tables', function () { return redirect('tables/normal'); });
Route::get('tables/normal', 'TablesController@normal')->name('tables.normal');
Route::get('tables/datatable', 'TablesController@datatable')->name('tables.datatable');
Route::get('tables/editable', 'TablesController@editable')->name('tables.editable');
Route::get('tables/footable', 'TablesController@footable')->name('tables.footable');
Route::get('tables/color', 'TablesController@color')->name('tables.color');

/* Chart */
Route::get('chart', function () { return redirect('chart/echarts'); });
Route::get('chart/echarts', 'ChartController@echarts')->name('chart.echarts');
Route::get('chart/c3', 'ChartController@c3')->name('chart.c3');
Route::get('chart/morris', 'ChartController@morris')->name('chart.morris');
Route::get('chart/flot', 'ChartController@flot')->name('chart.flot');
Route::get('chart/chartjs', 'ChartController@chartjs')->name('chart.chartjs');
Route::get('chart/sparkline', 'ChartController@sparkline')->name('chart.sparkline');
Route::get('chart/knob', 'ChartController@knob')->name('chart.knob');

/* Widgets */
Route::get('widgets', function () { return redirect('widgets/app'); });
Route::get('widgets/app', 'WidgetsController@app')->name('widgets.app');
Route::get('widgets/data', 'WidgetsController@data')->name('widgets.data');

/* Authentication */
Route::get('authentication', function () { return redirect('authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::get('authentication/forgot', 'AuthenticationController@forgot')->name('authentication.forgot');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');
Route::get('authentication/offline', 'AuthenticationController@offline')->name('authentication.offline');

/* Pages */
Route::get('pages', function () { return redirect('pages/blank-page'); });
Route::get('pages/blank', 'PagesController@blank')->name('pages.blank');
Route::get('pages/gallery', 'PagesController@gallery')->name('pages.gallery');
Route::get('pages/invoices1', 'PagesController@invoices1')->name('pages.invoices1');
Route::get('pages/invoices2', 'PagesController@invoices2')->name('pages.invoices2');
Route::get('pages/pricing', 'PagesController@pricing')->name('pages.pricing');
Route::get('pages/profile', 'PagesController@profile')->name('pages.profile');
Route::get('pages/search', 'PagesController@search')->name('pages.search');
Route::get('pages/timeline', 'PagesController@timeline')->name('pages.timeline');

/* Maps */
Route::get('map', function () { return redirect('map/google'); });
Route::get('map/yandex', 'MapController@yandex')->name('map.yandex');
Route::get('map/jvector', 'MapController@jvector')->name('map.jvector');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
