<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\OxxoSource;
use CheckoutOldSdk\Models\Payments\Payer;
use PHPUnit\Framework\TestCase;

class OxxoSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new OxxoSource(
            "redirect",
            "MX",
            new Payer("Bruce Wayne", "bruce@wayne-enterprises.com", ""),
            "simulate OXXO Demo Payment");
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
