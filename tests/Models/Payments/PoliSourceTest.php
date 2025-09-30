<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\PoliSource;
use PHPUnit\Framework\TestCase;

class PoliSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new PoliSource();
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
