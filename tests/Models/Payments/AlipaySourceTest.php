<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\AlipaySource;
use PHPUnit\Framework\TestCase;

class AlipaySourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new AlipaySource();
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
