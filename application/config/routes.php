<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	http://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/



//$route['default_controller'] = 'Welcome';

$route['404_override'] = 'pagenotfound/Pagenotfound/index';

$route['translate_uri_dashes'] = FALSE;





$route['default_controller'] = 'site';

$route['about-us'] = 'about_us';

// $route['register/generate-otp'] = 'register/generateOtp';

// $route['somename'] 'module/folder/controller/function';

// $route['somename/edit/(:any)'] 'module/folder/controller/function/$1';

// $route['somename/edit/(:any)/(:any)'] 'module/folder/controller/function/$1/$2';



$route['admin/users'] = 'admin/user/user';

$route['admin/dashboard'] = 'admin/dashboard/dashboard';

$route['employee/list'] = 'employee/employee/employee';

$route['employee/profile/(:num)'] = 'employee/employee/employee/profile/$1';

$route['my-account'] = 'customer/customer/customer/account';

/**
 * Employee Registration routes
 */
$route['employee/register'] = 'employee/register/register';

$route['employee/register/step-2'] = 'employee/register/register/stepTwo';

$route['employee/register/submit'] = 'employee/register/register/submit';
$route['employee/register/otp'] = 'employee/register/register/sendOtp';

/**
 * Customer registration routes
 */
$route['register'] = 'register/index';

$route['register/step-2'] = 'register/stepTwo';

$route['register/submit'] = 'register/submit';

$route['login'] = 'login/index';
// Service Category

$route['admin/service/category/create'] = 'admin/category/category/create';

$route['admin/service/category/store'] = 'admin/category/category/store';

$route['admin/service/category/edit/(:num)'] = 'admin/category/category/edit/$1';

$route['admin/service/category/update/(:num)'] = 'admin/category/category/update/$1';

$route['admin/service/category/delete/(:num)'] = 'admin/category/category/delete/$1';

$route['admin/service/categories'] = 'admin/category/category';

// Services
$route['admin/service/create'] = 'admin/service/service/create';

$route['admin/service/store'] = 'admin/service/service/store';

$route['admin/service/edit/(:num)'] = 'admin/service/service/edit/$1';

$route['admin/service/update'] = 'admin/service/service/update';

$route['admin/service/delete/(:num)'] = 'admin/service/service/delete/$1';

$route['admin/services'] = 'admin/service/service';
$route['unauthorized'] = 'unauthorized';

/**
 * Forgot password
 */
$route['forgot-password'] = 'forgot_password/index';
$route['forgot-password/send'] = 'forgot_password/submit';
$route['reset'] = 'forgot_password/reset_password_form';
$route['reset-password'] = 'forgot_password/reset_password';

/**
* 
*/
//print_r($infinity->getCategories());
$categories = [
	'painting',
	'car-spa',
	'pest-control',
	'repairs',
	'cleaning',
	'handyman'
];
foreach ($categories as $key => $value) {
	 $route[$value] = 'service/index';
}
// echo "<pre>";
// print_r($route);

//$route['(:any)/(:any)'] = 'Service/show';
