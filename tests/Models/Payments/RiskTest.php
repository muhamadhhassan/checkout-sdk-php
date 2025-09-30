<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\Risk;
use PHPUnit\Framework\TestCase;

class RiskTest extends TestCase
{
    public function testCreate()
    {
        $model = new Risk(true);
        $this->assertInstanceOf(Risk::class, $model);
    }
}
