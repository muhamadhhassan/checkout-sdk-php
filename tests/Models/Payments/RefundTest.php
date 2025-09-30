<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\Refund;
use CheckoutOldSdk\tests\Helpers\Payments;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class RefundTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('CheckoutOldSdk\Models\Payments\Refund');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Payments::generateRefundModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Refund::class, $result);
    }
}
