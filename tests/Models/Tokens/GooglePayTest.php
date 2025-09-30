<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Tokens\GooglePay;
use CheckoutOldSdk\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class GooglePayTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('CheckoutOldSdk\Models\Tokens\GooglePay');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Tokens::generateGooglePayModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(GooglePay::class, $result);
    }
}
