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
$route['default_controller'] = 'BerandaController/Beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//ADMIN
//Admin Pakar
$route['admin']               = 'AdminController/Admin';
$route['admin/tambah']        = 'AdminController/store';
$route['admin/edit']          = 'AdminController/edit';
$route['admin/hapus']         = 'AdminController/delete';
$route['admin/ajxGet']        = 'AdminController/ajxGet';

//Penyakit
$route['penyakit']            = 'PenyakitController/Penyakit';
$route['penyakit/tambah']     = 'PenyakitController/store';
$route['penyakit/edit']       = 'PenyakitController/edit';
$route['penyakit/hapus']      = 'PenyakitController/delete';
$route['penyakit/ajxGet']     = 'PenyakitController/ajxGet';

//Gejala
$route['gejala']              = 'GejalaController/Gejala';
$route['gejala/tambah']       = 'GejalaController/store';
$route['gejala/edit']         = 'GejalaController/edit';
$route['gejala/hapus']        = 'GejalaController/delete';
$route['gejala/ajxGet']       = 'GejalaController/ajxGet';

//Post Keterangan
$route['postketerangan']              = 'KeteranganController/PostKeterangan';
$route['postketerangan/tambah']       = 'KeteranganController/store';
$route['postketerangan/edit']         = 'KeteranganController/edit';
$route['postketerangan/hapus']        = 'KeteranganController/delete';
$route['postketerangan/ajxGet']       = 'KeteranganController/ajxGet';

//Pengetahuan
$route['pengetahuan']                   = 'PengetahuanController/Pengetahuan';
$route['tambah_pengetahuan']            = 'PengetahuanController/Tambah_Pengetahuan';
$route['edit_pengetahuan/(:any)']       = 'PengetahuanController/Edit_Pengetahuan/$1';
$route['pengetahuan/tambah']            = 'PengetahuanController/store';
$route['pengetahuan/edit']              = 'PengetahuanController/edit';
$route['pengetahuan/hapus']             = 'PengetahuanController/delete';

//HOME
$route['home']             = 'HomeController/home';

$route['pendaftaran']             = 'PendaftaranController/Pendaftaran';
$route['pendaftaran/terima']      = 'PendaftaranController/terima';
$route['pendaftaran/tolak']       = 'PendaftaranController/tolak';
$route['pendaftaran/hapus']       = 'PendaftaranController/hapus';
$route['pendaftaran/ajxGet']      = 'PendaftaranController/ajxGet';

//DEPAN
//BERANDA
$route['beranda']               = 'BerandaController/Beranda';

//Keterangan
$route['keterangan']            = 'PostController/Keterangan';
$route['keterangan/ajxGet']     = 'PostController/ajxGet';

//DIAGNOSA
$route['diagnosa']              = 'DiagnosaController/Diagnosa';
$route['diagnosa/hitung']       = 'DiagnosaController/hitung';

//RIWAYAT
$route['riwayat']               = 'RiwayatController/Riwayat';
$route['detailriwayat/(:any)']  = 'RiwayatController/DetailRiwayat/$1';

//LOGIN
$route['login']                 = 'Welcome/Login';
$route['login/auth']            = 'AuthController/auth';
$route['logout']                = 'AuthController/logout';
$route['updatePassword']        = 'AuthController/ubahPassword';
$route['ubahpassword']     = 'Welcome/UbahPassword';

//DAFTAR
$route['daftar']        = 'AuthController/Daftar';
$route['daftar/store']  = 'AuthController/store';

//BANTUAN
$route['bantuan']     = 'Welcome/Bantuan';
$route['tentang']     = 'Welcome/Tentang';
$route['about']     = 'Welcome/About';