<?php

// Mengimpor kelas RouteCollection dari namespace CodeIgniter\Router untuk mengelola routing
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * Deklarasi variabel $routes sebagai instance dari RouteCollection
 * Digunakan untuk mendefinisikan rute-rute aplikasi
 */

// Rute untuk halaman utama
$routes->get('/', 'Home::index'); // Memanggil method index pada controller Home untuk menampilkan halaman utama
$routes->post('/', 'Home::pesan'); // Memproses data pemesanan via POST, memanggil method pesan pada controller Home
$routes->get('/index', 'Home::index'); // Rute alternatif untuk halaman utama, memanggil method index pada controller Home

// Rute untuk halaman statis
$routes->get('/about', 'About::about'); // Memanggil method about pada controller About untuk halaman about
$routes->get('/services', 'Services::services'); // Memanggil method services pada controller Services untuk halaman services
$routes->get('/contact', 'Contact::contact'); // Memanggil method contact pada controller Contact untuk halaman contact
$routes->get('/success', 'Success::success'); // Memanggil method success pada controller Success untuk halaman success

// Rute untuk autentikasi
$routes->get('/login', 'AuthController::login'); // Memanggil method login pada controller AuthController untuk halaman login
$routes->post('/login', 'AuthController::loginPost'); // Memproses data login via POST, memanggil method loginPost pada controller AuthController
$routes->get('/logout', 'AuthController::logout'); // Memanggil method logout pada controller AuthController untuk logout

// Grup rute yang dilindungi oleh filter autentikasi
$routes->group('', ['filter' => 'authGuard'], function ($routes) {
    $routes->get('/admin', 'Admin::index', ['filter' => 'authGuard']); // Memanggil method index pada controller Admin untuk halaman dashboard admin
    $routes->get('/admin/done/(:num)', 'Admin::done/$1'); // Memanggil method done pada controller Admin untuk menandai booking sebagai selesai berdasarkan ID
    $routes->get('/admin/delete/(:num)', 'Admin::delete/$1'); // Memanggil method delete pada controller Admin untuk menghapus booking berdasarkan ID
});