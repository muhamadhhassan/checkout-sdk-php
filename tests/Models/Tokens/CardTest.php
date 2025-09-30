<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Tokens\Card;
use CheckoutOldSdk\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class CardTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('CheckoutOldSdk\Models\Tokens\Card');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Tokens::generateCardModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Card::class, $result);
    }
}
