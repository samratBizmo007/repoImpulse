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

Route::get('/', 'HomeController@index')->name('/');
Route::get('/career', 'CareerController@index')->name('/career');
Route::get('/contact-us', 'ContactController@index')->name('/contact-us');
Route::get('/services', 'ServicesController@index')->name('/services');
Route::get('/projects', 'ProjectsController@index')->name('/projects');
Route::get('/products', 'ProductsController@index')->name('/products');
Route::get('/trending', 'TrendingController@index')->name('/trending');
Route::get('/brands', 'BrandsController@index')->name('/brands');
Route::get('/projects/{project_id}', 'ProjectsController@getProject');
Route::get('/products/info/{product_id}', 'ProductsController@getProduct');
Route::get('/category/{category_name}', 'CategoryController@index');
Route::get('/brands/info/{brand_name}', 'BrandsController@getBrand');

// Admin pages
Route::get('/adminlogin', 'AdminloginController@index');
Route::get('admin/product', 'Admin\ProductController@index');
Route::get('admin/project', 'Admin\ProjectController@index');
Route::get('/forgot_password', 'AdminloginController@resetpassword');
Route::get('admin/dashboard', 'Admin\DashboardController@index');
Route::post('/adminlogin', 'AdminloginController@checkUSer');
Route::post('/addCategory', 'Admin\DashboardController@addCategory');
Route::post('/addBrand', 'Admin\DashboardController@addBrand');
Route::post('/addArch', 'Admin\DashboardController@addArch');
Route::get('/delCategory/{cat_id}', 'Admin\DashboardController@delCategory');
Route::get('/delBrand/{brand_id}', 'Admin\DashboardController@delBrand');
Route::get('admin/services/delService', 'Admin\ServicesController@delService');
Route::get('admin/services', 'Admin\ServicesController@index');
Route::get('admin/services/getAllServices', 'Admin\ServicesController@getAllServices');
Route::post('admin/services/addService', 'Admin\ServicesController@addService');
Route::post('admin/product/addProduct', 'Admin\ProductController@addProduct');
Route::post('admin/product/updateProduct', 'Admin\ProductController@updateChanges');
Route::get('admin/product/delProduct', 'Admin\ProductController@delProduct');
Route::get('admin/product/downloadFile', 'Admin\ProductController@downloadFile');
Route::get('admin/product/marktrending/{product_id}', 'Admin\ProductController@markTrending');
Route::get('admin/product/unmarktrending/{product_id}', 'Admin\ProductController@unmarkTrending');
Route::post('admin/project/addProject', 'Admin\ProjectController@addProject');
Route::get('admin/project/getProject', 'Admin\ProjectController@getProject');
Route::get('admin/project/delProject', 'Admin\ProjectController@delProject');
Route::get('admin/project/getAllProjects', 'Admin\ProjectController@getAllProjects');
