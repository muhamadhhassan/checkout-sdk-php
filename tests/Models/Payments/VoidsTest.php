<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\Voids;
use CheckoutOldSdk\tests\Helpers\Payments;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class VoidsTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('CheckoutOldSdk\Models\Payments\Voids');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Payments::generateVoidModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Voids::class, $result);
    }
}
