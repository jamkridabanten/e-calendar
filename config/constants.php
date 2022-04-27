<?php

/*
 |--------------------------------------------------------------------------
 | Dynamic Base URL
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to declare dynamic base url
 |
 */
if ($_SERVER['HTTP_HOST'] == 'localhost:8080') {
  defined('BASE') || define('BASE', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://localhost:8080/' : 'http://localhost:8080/');
} else {
  defined('BASE') || define('BASE', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/' : 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/');
}

/*
 |--------------------------------------------------------------------------
 | Application Data
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to declare dynamic base url
 |
 */
$data = (object) [
  'appCode'             => 'E-Calendar',
  'appCopyright'        => '<p><strong>E-Calendar</strong> &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://jamkridabanten.co.id" target="_blank" class="text-info">PT. Penjaminan Kredit Daerah Banten</a>. All right reserved.</p>',
  'companyName'         => 'PT. Penjaminan Kredit Daerah Banten',
  'companyDescription'  => 'PT. Jamkrida Banten adalah Perusahaan Penjamin Kredit Daerah Banten yang merupakan Badan Usaha Milik Daerah (BUMD) Provinsi Banten dan ditetapkan melalui Peraturan Daerah No.9 Tahun 2011 serta telah mendapatkan Ijin Usaha Pejaminan dari Otoritas Jasa Keuangan dengan Nomor: Kep.05/D.05/2013, yang bergerak di bidang keuangan dengan kegiatan usaha pokoknya melakukan penjaminan kredit.',
  'companyAddress'      => 'Jl. Raya Pandeglang Km.04 No.99 Link. Karundang, Kel. Karundang, Kec. Cipocok Jaya, Kota Serang, Banten - 42126',                                  
];
