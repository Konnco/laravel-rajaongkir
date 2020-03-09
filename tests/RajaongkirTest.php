<?php

namespace Konnco\RajaOngkir\Tests;

use Konnco\RajaOngkir\RajaOngkir;

class RajaongkirTest extends TestCase
{
    /** @test */
    public function testWaybill(): void
    {
        $waybill = (new RajaOngkir)->Waybill([
            'waybill'           => 'SOCAG00183235715', // no resi
            'courier'           => 'jne', // kode kurir pengantar ( jne / tiki / pos )
        ])->get();

        $this->assertIsArray($waybill['result']);
    }
}
