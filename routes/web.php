<?php

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

// Route::get('admin/dashboard', function () {
//     return 'hii';
// });

//Auth::routes();
Route::get('get-location-from-ip',function(){
    $ip= Request::ip();
    $position = Location::get('192.168.43.1');
    print_r($position);
});
Route::get('/location/set/{location_value}','HomeController@setLocation');
Route::get('/location/get/{cookie_name}','CookieController@getCookie');
Route::get('/', 'HomeController@index')->name('/');
Route::get('/career', 'CareerController@index')->name('/career');
Route::get('/contact-us', 'ContactController@index')->name('/contact-us');
Route::get('/about-us', 'AboutController@index')->name('/about-us');
Route::post('/contact-us/postContact', 'ContactController@postContact');
Route::post('/contact-us/quickContact', 'ContactController@quickContact');
Route::post('/get-connect/subscribeEmail', 'ContactController@subscribeEmail');
Route::get('/services', 'ServicesController@index')->name('/services');
Route::get('/projects', 'ProjectsController@index')->name('/projects');
Route::get('/products', 'ProductsController@index')->name('/products');
Route::get('/trending', 'TrendingController@index')->name('/trending');
Route::get('/brands', 'BrandsController@index')->name('/brands');
Route::get('/projects/info/{project_id}', 'ProjectsController@getProject');
Route::get('/products/info/{product_id}', 'ProductsController@getProduct');
Route::post('/career/apply-job', 'CareerController@applyJob');
Route::get('/category/info/{category_name}', 'CategoryController@getCategory');
Route::get('/brands/info/{brand_name}', 'BrandsController@getBrand');

// Admin pages
Route::get('/adminlogin', 'AdminloginController@index');
Route::get('/logout/clearsession', 'AdminloginController@logoutUser');
Route::get('admin/product', 'Admin\ProductController@index')->middleware('usersession');
Route::get('admin/general-settings', 'Admin\SettingsController@index')->middleware('usersession');
Route::post('admin/change-settings/updateEmail', 'Admin\SettingsController@updateEmail')->middleware('usersession');
Route::post('admin/change-settings/updatePassword', 'Admin\SettingsController@updatePassword')->middleware('usersession');
Route::get('admin/project', 'Admin\ProjectController@index')->middleware('usersession');
Route::get('/forgot_password', 'AdminloginController@resetpassword');
Route::get('admin/dashboard', 'Admin\DashboardController@index')->middleware('usersession');
Route::post('/adminlogin', 'AdminloginController@checkUSer');
Route::post('/addCategory', 'Admin\DashboardController@addCategory')->middleware('usersession');
Route::post('/addBrand', 'Admin\DashboardController@addBrand')->middleware('usersession');
Route::post('/addArch', 'Admin\DashboardController@addArch')->middleware('usersession');
Route::post('admin/send-mail/sendTrendingMail', 'Admin\DashboardController@sendTrendingMail')->middleware('usersession');
Route::get('/delCategory/{cat_id}', 'Admin\DashboardController@delCategory')->middleware('usersession');
Route::get('/delBrand/{brand_id}', 'Admin\DashboardController@delBrand')->middleware('usersession');
Route::get('/markBrand/{brand_id}', 'Admin\DashboardController@markBrand')->middleware('usersession');
Route::get('/unmarkBrand/{brand_id}', 'Admin\DashboardController@unmarkBrand')->middleware('usersession');
Route::get('/delArch/{arch_id}', 'Admin\DashboardController@delArch')->middleware('usersession');
Route::post('/updateBrand', 'Admin\DashboardController@updateBrand')->middleware('usersession');
Route::get('admin/services/delService', 'Admin\ServicesController@delService')->middleware('usersession');
Route::get('admin/services', 'Admin\ServicesController@index')->middleware('usersession');
Route::get('admin/services/getAllServices', 'Admin\ServicesController@getAllServices')->middleware('usersession');
Route::post('admin/services/addService', 'Admin\ServicesController@addService')->middleware('usersession');
Route::post('admin/product/addProduct', 'Admin\ProductController@addProduct')->middleware('usersession');
Route::post('admin/product/updateProduct', 'Admin\ProductController@updateChanges')->middleware('usersession');
Route::get('admin/product/delProduct', 'Admin\ProductController@delProduct')->middleware('usersession');
Route::get('admin/product/downloadFile', 'Admin\ProductController@downloadFile')->middleware('usersession');
Route::get('admin/product/marktrending/{product_id}', 'Admin\ProductController@markTrending')->middleware('usersession');
Route::get('admin/product/unmarktrending/{product_id}', 'Admin\ProductController@unmarkTrending')->middleware('usersession');
Route::post('admin/project/addProject', 'Admin\ProjectController@addProject')->middleware('usersession');
Route::get('admin/project/getProject', 'Admin\ProjectController@getProject')->middleware('usersession');
Route::get('admin/project/delProject', 'Admin\ProjectController@delProject')->middleware('usersession');
Route::get('admin/project/getNotAssocProduct', 'Admin\ProjectController@getNotAssocProduct')->middleware('usersession');
Route::post('admin/project/updateProject', 'Admin\ProjectController@updateChanges')->middleware('usersession');
Route::get('admin/project/addProductAssoc', 'Admin\ProjectController@addProductAssoc')->middleware('usersession');
Route::get('admin/project/delProductAssoc', 'Admin\ProjectController@delProductAssoc')->middleware('usersession');
Route::get('admin/careers', 'Admin\CareerController@index')->middleware('usersession');
Route::post('admin/careers/post-job', 'Admin\CareerController@addJob')->middleware('usersession');
Route::get('admin/delJob', 'Admin\CareerController@delJob')->middleware('usersession');
Route::get('admin/delApplication', 'Admin\CareerController@delApplication')->middleware('usersession');

Route::get('/email', 'HomeController@mail')->name('/email');
