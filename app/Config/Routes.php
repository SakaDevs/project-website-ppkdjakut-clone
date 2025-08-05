<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('contact', 'Home::contact');
$routes->get('about', 'Home::about');
$routes->get('profile', 'Home::profile');
// jadwal
$routes->get('jadwal', 'jadwal::index');
$routes->get('jadwal/tambah', 'jadwal::tambah');
$routes->get('jadwal/search', 'jadwal::search');
$routes->post('jadwal/simpan', 'jadwal::simpan');
$routes->post('jadwal/delete/(:num)', 'jadwal::delete/$1');
$routes->get('jadwal/edit/(:num)', 'jadwal::edit/$1');
$routes->post('jadwal/update/(:num)', 'jadwal::update/$1');
// auth
$routes->get('auth/login', 'Home::login');
$routes->get('auth/register', 'Home::register');
// lowongan
$routes->get('lowongan', 'Home::lowongan');
$routes->get('lowongan/detail/(:num)', 'lowongans::findbyid/$1');
$routes->get('search', 'Lowongans::search');
$routes->get('tambah', 'Lowongans::tambah');
$routes->get('edit/(:num)', 'Lowongans::edit/$1');
$routes->post('update/(:num)', 'Lowongans::update/$1');
$routes->post('delete/(:num)', 'Lowongans::delete/$1');
$routes->post('simpan', 'Lowongans::simpan');

$routes->get('pelatihan/regular/tambah', 'pelatihanregularcontroller::tambah');
$routes->get('pelatihan/regular/daftar', 'pelatihanregularcontroller::daftar');
$routes->post('pelatihan/regular/add', 'pelatihanregularcontroller::add');
$routes->post('pelatihan/regular/delete/(:num)', 'pelatihanregularcontroller::delete/$1');
$routes->get('pelatihan/regular/edit/(:num)', 'pelatihanregularcontroller::edit/$1');
$routes->post('pelatihan/regular/save/(:num)', 'pelatihanregularcontroller::save/$1');
$routes->get('pelatihan/regular', 'pelatihanregularcontroller::reguler');
$routes->get('pelatihan/regular/search', 'pelatihanregularcontroller::search');
$routes->post('pelatihan/regular/daftar/success/', 'pelatihanregularcontroller::daftarSave', );
$routes->post('admin/change/(:num)', 'admin::change/$1',);

$routes->get('pelatihan/MTU','pelatihanmtucontroller::MTU');
$routes->get('pelatihan/MTU/tambah/','pelatihanmtucontroller::tambah');
$routes->post('pelatihan/MTU/add/','pelatihanmtucontroller::add');
$routes->get('pelatihan/MTU/edit/(:num)','pelatihanmtucontroller::edit/$1');
$routes->post('pelatihan/MTU/save/(:num)','pelatihanmtucontroller::save/$1');
$routes->post('pelatihan/MTU/delete/(:num)','pelatihanmtucontroller::delete/$1');
$routes->get('pelatihan/MTU/search/','pelatihanmtucontroller::search');
$routes->get('pelatihan/MTU/daftar/','pelatihanmtucontroller::daftar');
$routes->post('pelatihan/MTU/daftar/success/','pelatihanmtucontroller::saveDaftar');


// users
$routes->get('users/search', 'admin::search',);
$routes->get('users', 'admin::users' );
$routes->post('users/update/(:num)', 'home::saveUser/$1' , );
$routes->get('users_profile/(:num)', 'home::users/$1',  );
$routes->get('users_profile/edit/(:num)', 'admin::edit/$1', );

service('auth')->routes($routes);

