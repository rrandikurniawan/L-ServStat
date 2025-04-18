<?php

// Mengimpor kelas RouteCollection dari namespace CodeIgniter\Router untuk mengelola routing
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * Deklarasi variabel $routes sebagai instance dari RouteCollection
 * Digunakan untuk mendefinisikan rute-rute aplikasi
 */
$routes->get('/', 'Home::index'); // Rute untuk halaman utama, memanggil method index pada controller Home
$routes->get('/index', 'Home::index'); // Rute alternatif untuk halaman utama, juga memanggil method index pada controller Home
$routes->get('/about', 'About::about'); // Rute untuk halaman about, memanggil method about pada controller About
$routes->get('/services', 'Services::services'); // Rute untuk halaman services, memanggil method services pada controller Services
$routes->get('/contact', 'Contact::contact'); // Rute untuk halaman contact, memanggil method contact pada controller Contact