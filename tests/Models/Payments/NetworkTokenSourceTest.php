<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\NetworkTokenSource;
use CheckoutOldSdk\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;

class NetworkTokenSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new NetworkTokenSource(Tokens::generateID(), 12, 2020, '{type}');
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
