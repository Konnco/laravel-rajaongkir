<?php

namespace Konnco\rajaongkirlaravel;

use Konnco\rajaongkirlaravel\app\Provinsi;
use Konnco\rajaongkirlaravel\app\Kota;
use Konnco\rajaongkirlaravel\app\Cost;

class RajaOngkir {
	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}
}