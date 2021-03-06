<?php

namespace Konnco\RajaOngkir;

use Konnco\RajaOngkir\app\Province;
use Konnco\RajaOngkir\app\City;
use Konnco\RajaOngkir\app\Subdistrict;
use Konnco\RajaOngkir\app\Cost;
use Konnco\RajaOngkir\app\Waybill;

class RajaOngkir
{
    public function province()
    {
        return new Province();
    }

    public function city()
    {
        return new City();
    }

    public function subdistrict()
    {
        return new Subdistrict();
    }

    public function cost($attributes)
    {
        return new Cost($attributes);
    }

    public function waybill($attributes)
    {
        return new Waybill($attributes);
    }
}
