<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\Capture;
use CheckoutOldSdk\tests\Helpers\Payments;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class CaptureTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('CheckoutOldSdk\Models\Payments\Capture');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Payments::generateCaptureModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Capture::class, $result);
    }
}
