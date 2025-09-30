<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\BoletoSource;
use CheckoutOldSdk\Models\Payments\Payer;
use PHPUnit\Framework\TestCase;

class BoletoSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new BoletoSource('{redirect}', '{country}', new Payer('{name}', '{email}', '{document}'));
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
