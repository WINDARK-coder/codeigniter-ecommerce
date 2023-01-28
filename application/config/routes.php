<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//==========================> Admin Panel Routes

//Main Admin Panel

$route['dashboard'] = 'backend/Dashboard/index';

//Admin login

$route['backend/login'] = 'backend/login';
$route['backend/logout'] = 'backend/login/logout';

// Admins 
$route['admins'] = 'backend/Admins/index';
$route['admins/create'] = 'backend/Admins/create';
$route['admins/edit/(:num)'] = 'backend/Admins/edit/$1';
$route['admins/delete/(:num)'] = 'backend/Admins/delete/$1';

// Pages

$route['pages'] = 'backend/pages/index';
$route['pages/create'] = 'backend/pages/create';
$route['pages/edit/(:num)'] = 'backend/pages/edit/$1';
$route['pages/delete/(:num)'] = 'backend/pages/delete/$1';

// Settings

$route['settings'] = 'backend/settings/index';
$route['settings/create'] = 'backend/settings/create';
$route['settings/edit/(:num)'] = 'backend/settings/edit/$1';
$route['settings/delete/(:num)'] = 'backend/settings/delete/$1';

// Payment_methods

$route['payment_methods'] = 'backend/payment_methods/index';
$route['payment_methods/create'] = 'backend/payment_methods/create';
$route['payment_methods/edit/(:num)'] = 'backend/payment_methods/edit/$1';
$route['payment_methods/delete/(:num)'] = 'backend/payment_methods/delete/$1';

// Delivery_methods

$route['delivery_methods'] = 'backend/delivery_methods/index';
$route['delivery_methods/create'] = 'backend/delivery_methods/create';
$route['delivery_methods/edit/(:num)'] = 'backend/delivery_methods/edit/$1';
$route['delivery_methods/delete/(:num)'] = 'backend/delivery_methods/delete/$1';

// Brands

$route['brands'] = 'backend/brands/index';
$route['brands/create'] = 'backend/brands/create';
$route['brands/edit/(:num)'] = 'backend/brands/edit/$1';
$route['brands/delete/(:num)'] = 'backend/brands/delete/$1';

// Categories

$route['categories'] = 'backend/categories/index';
$route['categories/create'] = 'backend/categories/create';
$route['categories/edit/(:num)'] = 'backend/categories/edit/$1';
$route['categories/delete/(:num)'] = 'backend/categories/delete/$1';

// Blogs

$route['blogs'] = 'backend/blogs/index';
$route['blogs/create'] = 'backend/blogs/create';
$route['blogs/edit/(:num)'] = 'backend/blogs/edit/$1';
$route['blogs/delete/(:num)'] = 'backend/blogs/delete/$1';

// Order status

$route['order_status'] = 'backend/order_status/index';
$route['order_status/create'] = 'backend/order_status/create';
$route['order_status/edit/(:num)'] = 'backend/order_status/edit/$1';
$route['order_status/delete/(:num)'] = 'backend/order_status/delete/$1';

// Users

$route['users'] = 'backend/users/index';
$route['users/create'] = 'backend/users/create';
$route['users/edit/(:num)'] = 'backend/users/edit/$1';
$route['users/delete/(:num)'] = 'backend/users/delete/$1';

// Products

$route['products'] = 'backend/products/index';
$route['products/create'] = 'backend/products/create';
$route['products/edit/(:num)'] = 'backend/products/edit/$1';
$route['products/delete/(:num)'] = 'backend/products/delete/$1';

// Images

$route['images'] = 'backend/images/index';
$route['images/create'] = 'backend/images/create';
$route['images/edit/(:num)'] = 'backend/images/edit/$1';
$route['images/delete/(:num)'] = 'backend/images/delete/$1';

// Orders

$route['orders'] = 'backend/orders/index';
$route['orders/create'] = 'backend/orders/create';
$route['orders/edit/(:num)'] = 'backend/orders/edit/$1';
$route['orders/delete/(:num)'] = 'backend/orders/delete/$1';

// Website logo

$route['website_logo'] = 'backend/website_logo/index';
$route['website_logo/create'] = 'backend/website_logo/create';
$route['website_logo/edit/(:num)'] = 'backend/website_logo/edit/$1';
$route['website_logo/delete/(:num)'] = 'backend/website_logo/delete/$1';

// Sliders

$route['sliders'] = 'backend/sliders/index';
$route['sliders/create'] = 'backend/sliders/create';
$route['sliders/edit/(:num)'] = 'backend/sliders/edit/$1';
$route['sliders/delete/(:num)'] = 'backend/sliders/delete/$1';

// Banners

$route['banners'] = 'backend/banners/index';
$route['banners/create'] = 'backend/banners/create';
$route['banners/edit/(:num)'] = 'backend/banners/edit/$1';
$route['banners/delete/(:num)'] = 'backend/banners/delete/$1';

// Our Team

$route['our_team'] = 'backend/our_team/index';
$route['our_team/create'] = 'backend/our_team/create';
$route['our_team/edit/(:num)'] = 'backend/our_team/edit/$1';
$route['our_team/delete/(:num)'] = 'backend/our_team/delete/$1';

// About us

$route['about_us'] = 'backend/about_us/index';
$route['about_us/create'] = 'backend/about_us/create';
$route['about_us/edit/(:num)'] = 'backend/about_us/edit/$1';
$route['about_us/delete/(:num)'] = 'backend/about_us/delete/$1';

//==========================> Website Routes

// Website home page

$route['home'] = 'frontend/Home/index';

// Products
$route['product/(:num)'] = 'frontend/product/index/$1';

// Categories
$route['category'] = 'frontend/category/index';

// Cart
$route['cart'] = 'frontend/cart/index';

// Wishlist
$route['wishlist'] = 'frontend/wishlist/index';

// Checkout
$route['checkout'] = 'frontend/checkout/index';

// Login
$route['login'] = 'frontend/login/index';

// Logout
$route['logout'] = 'frontend/login/logout';

// Register
$route['register'] = 'frontend/register/index';

// Register
$route['my_account'] = 'frontend/my_account/index';

// Blog
$route['blog_page'] = 'frontend/blog_page/index';
$route['blog_detail/(:num)'] = 'frontend/blog_detail/index/$1';

// About Us
$route['about-us'] = 'frontend/about_us/index';

// Contact Us
$route['contact_us'] = 'frontend/contact/index';

// FAQ
$route['faq'] = 'frontend/faq/index';

// Quickview
$route['quickview'] = 'frontend/quickview/index';
