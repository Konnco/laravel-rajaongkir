<?php

namespace Konnco\rajaongkirlaravel;

use Konnco\rajaongkirlaravel\app\Cost;
use Konnco\rajaongkirlaravel\app\Kota;
use Konnco\rajaongkirlaravel\app\Provinsi;

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
