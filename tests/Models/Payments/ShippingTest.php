<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Address;
use CheckoutOldSdk\Models\Payments\Shipping;
use CheckoutOldSdk\Models\Phone;
use PHPUnit\Framework\TestCase;

class ShippingTest extends TestCase
{
    public function testCreate()
    {
        $address = new Address();
        $phone = new Phone();
        $model = new Shipping($address, $phone);

        $this->assertInstanceOf(Shipping::class, $model);
        $this->assertEquals($address, $model->address);
    }
}
