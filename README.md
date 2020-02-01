# Laravel Onimage
[![Build Status](https://travis-ci.org/Konnco/laravel-rajaongkir.svg?branch=master)](https://travis-ci.org/Konnco/laravel-rajaongkir)
[![Latest Stable Version](https://poser.pugx.org/konnco/laravel-rajaongkir/v/stable)](https://packagist.org/packages/konnco/laravel-rajaongkir)
[![Total Downloads](https://poser.pugx.org/konnco/laravel-rajaongkir/downloads)](https://packagist.org/packages/konnco/laravel-rajaongkir)
[![Latest Unstable Version](https://poser.pugx.org/konnco/laravel-rajaongkir/v/unstable)](https://packagist.org/packages/konnco/laravel-rajaongkir)
[![License](https://poser.pugx.org/konnco/laravel-rajaongkir/license)](https://packagist.org/packages/konnco/laravel-rajaongkir)
[![StyleCI](https://github.styleci.io/repos/237620279/shield?branch=master)](https://github.styleci.io/repos/237620279)

This package is build based on the rizalafani package [rizalafani/rajaongkirlaravel](https://github.com/rizalafani/rajaongkirlaravel) that i think has been a long time not updated and maybe already abandon this project

***This package is still in alpha version, so the update may broke your application.***


# Rajaongki API Wrapper For Laravel 6

API ini digunakan ( baru tersedia ) untuk type akun starter

**Instalasi**

Download package dengan composer
```
composer require konnco/laravel-rajaongkir
```
atau
```
{
	"require": {
		"konnco/laravel-rajaongkir" : "dev-master"
	}
}
```

Tambahkan service provider ke config/app.php
```php
'providers' => [
	....
	
	konnco\laravel-rajaongkir\RajaOngkirServiceProvider::class,
]
```

Tambahkan juga aliasnya ke config/app.php
```php
'aliases' => [
	....
	
	'RajaOngkir' => konnco\laravel-rajaongkir\RajaOngkirFacade::class,
]
```

Buat file rajaongkir.php di folder config secara manual atau jalankan command artisan
```
php artisan vendor:publish
```
jika anda menggunakan command artisan diatas, anda akan dibuatkan file rajaongkir.php di folder config

Tambahkan kode berikut di file .env untuk konfigurasi API rajaongkir
```
RAJAONGKIR_ENDPOINTAPI=isi_base_url_api_akun_anda_disini
RAJAONGKIR_APIKEY=isi_api_key_anda_disini
```
atau anda juga dapat langsung melakukan konfigurasi di file rajaongkir.php di folder config seperti kode berikut.
```php
'end_point_api' => 'isi_base_url_api_akun_anda_disini',
'api_key' => 'isi_api_key_anda_disini',
```

**Penggunaan**

Ambil data provinsi
```php
$data = RajaOngkir::Provinsi()->all();
```

Ambil jumlah provinsi
```php
$data = RajaOngkir::Provinsi()->count();
```

Ambil data provinsi berdasarkan id provinsi
```php
$data = RajaOngkir::Provinsi()->find($id);
```

Ambil data provinsi berdasarkan nama provinsi
```php
$data = RajaOngkir::Provinsi()->search('province', $name = "ja")->get();
```

Ambil data kota
```php
$data = RajaOngkir::Kota()->all();
```

Ambil jumlah kota
```php
$data = RajaOngkir::Kota()->count();
```

Ambil data kota berdasarkan id kota
```php
$data = RajaOngkir::Kota()->find($id);
```

Ambil data kota berdasarkan nama kota
```php
$data = RajaOngkir::Kota()->search('city_name', $name = "banyu")->get();
```

Ambil data kota berdasarkan provinsi
```php
$data = RajaOngkir::Kota()->byProvinsi($provinsi_id)->get();
```

Ambil jumlah kota berdasarkan provinsi
```php
$data = RajaOngkir::Kota()->byProvinsi($provinsi_id)->count();
```

Ambil data kota berdasarkan nama kota di suatu provinsi
```php
$data = RajaOngkir::Kota()->byProvinsi($provinsi_id)->search('city_name', $name)->get();
```

Ambil Biaya Pengiriman
```php
$data = RajaOngkir::Cost([
	'origin' 		=> 501, // id kota asal
	'destination' 	=> 114, // id kota tujuan
	'weight' 		=> 1700, // berat satuan gram
	'courier' 		=> 'jne', // kode kurir pengantar ( jne / tiki / pos )
])->get();
```


Kunjungi [rajaongkir](http://rajaongkir.com/)


Documentasi akun [starter](http://rajaongkir.com/dokumentasi/starter)

## Authors
[//]: contributor-faces
<a href="https://github.com/frankyso"><img src="https://avatars.githubusercontent.com/u/5705520?v=3" title="frankyso" width="80" height="80"></a>
<a href="https://github.com/frankyso"><img src="https://avatars.githubusercontent.com/u/4284114?v=3" title="rizalafani" width="80" height="80"></a>
## Contributing
we appreciate all contributions, feel free to write some code or request package.
