<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\Destination;
use CheckoutOldSdk\Models\Payments\TokenDestination;
use PHPUnit\Framework\TestCase;

class DestinationTest extends TestCase
{
    public function testCreate()
    {
        $model = new TokenDestination('{id}', 1000, '{last}');
        $this->assertInstanceOf(Destination::class, $model);
    }
}
