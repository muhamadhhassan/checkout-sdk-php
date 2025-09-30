<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\Action;
use CheckoutOldSdk\Models\Response;
use CheckoutOldSdk\tests\Helpers\Payments;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class ActionTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('CheckoutOldSdk\Models\Payments\Action');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Payments::generateActionsModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Action::class, $result);
    }

    public function testCreateMultiple()
    {
        $class = new ReflectionClass('CheckoutOldSdk\Models\Payments\Action');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Payments::generateActionsModel();
        $response = array($model->getValues());

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Response::class, $result);
    }
}
