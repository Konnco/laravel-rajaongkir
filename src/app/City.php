<?php

namespace Konnco\RajaOngkir\app;

class City extends Api
{
    protected $method = 'city';

    public function byProvinsi($province_id)
    {
        $this->parameters = '?province='.$province_id;

        return $this->GetData();
    }
}
