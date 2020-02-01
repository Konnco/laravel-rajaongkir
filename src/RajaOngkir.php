<?php

namespace Konnco\RajaOngkir;

use Konnco\RajaOngkir\app\Cost;
use Konnco\RajaOngkir\app\Kota;
use Konnco\RajaOngkir\app\Provinsi;

class RajaOngkir
{
    public function Provinsi()
    {
        return new Provinsi();
    }

    public function Kota()
    {
        return new Kota();
    }

    public function Cost($attributes)
    {
        return new Cost($attributes);
    }
}
