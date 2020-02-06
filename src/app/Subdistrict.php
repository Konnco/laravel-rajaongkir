<?php

namespace Konnco\RajaOngkir\app;

class Subdistrict extends Api
{
    protected $method = 'subdistrict';

    public function byCity($city_id)
    {
        $this->parameters = '?city='.$city_id;
        return $this->GetData();
    }
}
