<?php

// StudentController

Route::get('student', 'StudentController@index')->name('student.index')
->middleware('permissions:student-index');
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
Route::get('student/delete/{student_id}', 'StudentController@delete')->name('student.delete')
->middleware('permissions:student-delete');

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
Route::get('teacher/delete/{teacher_id}', 'TeacherController@delete')->name('teacher.delete')
->middleware('permissions:teacher-delete');

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
Route::get('batch', 'BatchController@index')->name('batch.index')
->middleware('permissions:batch-index');
Route::post('batch/create', 'BatchController@create')->name('batch.create')
->middleware('permissions:batch-create');
Route::get('batch/all', 'BatchController@all')->name('batch.all')
->middleware('permissions:batch-all');
// Route::get('batch/profile/{course_id}', 'BatchController@profile')->name('batch.profile')->middleware('permissions:batch-profile');
// Route::get('batch/edit/{course_id}', 'BatchController@edit')->name('batch.edit')->middleware('permissions:batch-edit');
// Route::post('batch/update/{course_id}', 'BatchController@update')->name('batch.update')->middleware('permissions:batch-update');

// VisitorController
Route::get('visitor', 'VisitorController@index')->name('visitor.index')
->middleware('permissions:visitor-index');
Route::post('visitor/create', 'VisitorController@create')->name('visitor.create')
->middleware('permissions:visitor-create');
Route::get('visitor/all', 'VisitorController@all')->name('visitor.all')
->middleware('permissions:visitor-all');
Route::get('batch/profile/{batch_id}', 'BatchController@profile')->name('batch.profile')
->middleware('permissions:batch-profile');
// Route::get('batch/edit/{course_id}', 'BatchController@edit')->name('batch.edit')->middleware('permissions:visitor-edit');
// Route::post('batch/update/{course_id}', 'BatchController@update')->name('batch.update')->middleware('permissions:visitor-update');

// SeminarController
Route::get('seminar', 'SeminarController@index')->name('seminar.index')
->middleware('permissions:seminar-index');
Route::post('seminar/create', 'SeminarController@create')->name('seminar.create')
->middleware('permissions:seminar-create');
Route::get('seminar/all', 'SeminarController@all')->name('seminar.all')
->middleware('permissions:seminar-all');
Route::get('seminar/profile/{batch_id}', 'SeminarController@profile')->name('seminar.profile')
->middleware('permissions:seminar-profile');
// Route::get('batch/edit/{course_id}', 'BatchController@edit')->name('batch.edit')->middleware('permissions:seminar-edit');
// Route::post('batch/update/{course_id}', 'BatchController@update')->name('batch.update')->middleware('permissions:seminar-edit');



// VisitorController
Route::get('enrollment', 'EnrollController@index')->name('enroll.index')
->middleware('permissions:enroll-index');
Route::post('enroll/create', 'EnrollController@create')->name('enroll.create')
->middleware('permissions:enroll-create');
Route::get('enroll/all', 'EnrollController@all')->name('enroll.all')
->middleware('permissions:enroll-all');
Route::post('get/course/fee', 'EnrollController@courseFee')->name('courseFee')
->middleware('permissions:enroll-coursefee');
Route::get('enroll/profile/{enroll_id}', 'EnrollController@profile')->name('enroll.profile')
->middleware('permissions:enroll-profile');
Route::get('enroll/edit/{enroll_id}', 'EnrollController@edit')->name('enroll.edit')
->middleware('permissions:enroll-edit');
Route::post('enroll/update/{enroll_id}', 'EnrollController@update')->name('enroll.update')
->middleware('permissions:enroll-update');



// EmployeeController
Route::get('employee', 'EmployeeController@index')->name('employee.index')
->middleware('permissions:employee-index');
Route::post('employee/create', 'EmployeeController@create')->name('employee.create')
->middleware('permissions:employee-create');
Route::get('employee/all', 'EmployeeController@all')->name('employee.all')
->middleware('permissions:employee-all');
Route::get('employee/profile/{employee_id}', 'EmployeeController@profile')->name('employee.profile')
->middleware('permissions:employee-profile');
Route::get('employee/edit/{employee_id}', 'EmployeeController@edit')->name('employee.edit')
->middleware('permissions:employee-edit');
Route::post('employee/update/{employee_id}', 'EmployeeController@update')->name('employee.update')
->middleware('permissions:employee-update');


// RequisitionController
Route::get('requisition', 'RequisitionController@index')->name('requisition.index')
->middleware('permissions:requisition-index');
Route::post('requisition/create', 'RequisitionController@create')->name('requisition.create')
->middleware('permissions:requisition-create');
Route::get('requisition/all', 'RequisitionController@all')->name('requisition.all')
->middleware('permissions:requisition-all');
Route::get('requisition/profile/{requisition_id}', 'RequisitionController@profile')->name('requisition.profile')
->middleware('permissions:requisition-profile');
Route::get('requisition/edit/{requisition_id}', 'RequisitionController@edit')->name('requisition.edit')
->middleware('permissions:requisition-edit');
Route::post('requisition/update/{requisition_id}', 'RequisitionController@update')->name('requisition.update')
->middleware('permissions:requisition-update');
Route::get('requisition/download/{requisition_id}', 'RequisitionController@download')->name('download.photo')
->middleware('permissions:requisition-photo');



//Designation
Route::post('designation/create', 'EmployeeController@designation_create')->name('designation.create')
->middleware('permissions:designation-create');
//Duties
Route::post('duties/create', 'EmployeeController@duties_create')->name('duties.create')
->middleware('permissions:duties-create');



// AppSettingsController
Route::get('/application/settings','AppSettingsController@index')->name('app_index')
->middleware('permissions:app-index');

Route::post('/application/settings/logo/create','AppSettingsController@logo_create')->name('logo.create')
->middleware('permissions:logo.create');
Route::get('/application/settings/logo/delete/{logo_id}','AppSettingsController@logo_delete')->name('logo.delete')
->middleware('permissions:logo.create');
Route::get('/application/settings/logo/{logo_id}/change','AppSettingsController@logo_active')->name('logo.active')
->middleware('permissions:logo.active');

// AdminController
Route::get('/admin/user','AdminController@index')->name('admin.index')
->middleware('permissions:admin-index');
Route::post('/admin/role/create','AdminController@role_create')->name('role.create')
->middleware('permissions:role-create');
Route::post('/admin/user/create','AdminController@user_create')->name('user.create')
->middleware('permissions:user-create');


// ActivityController
Route::get('activity/log', 'ActivityController@index')->name('activity.index')
->middleware('permissions:activity-index');
Route::get('activity/log/search', 'ActivityController@searchLog')->name('activity.search')
->middleware('permissions:activity-search');


// ReportController
Route::get('report', 'ReportController@index')->name('report.index')
->middleware('permissions:report-index');


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

Route::get('/', function () {return view('welcome');});

// Route::get('/', function () {
//     return redirect('dashboard/index');
//  });

/* Authentication */
Route::get('authentication', function () { return redirect('authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::get('authentication/forgot', 'AuthenticationController@forgot')->name('authentication.forgot');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');
Route::get('authentication/offline', 'AuthenticationController@offline')->name('authentication.offline');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
