<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\MultibancoSource;
use CheckoutOldSdk\Models\Payments\Payer;
use PHPUnit\Framework\TestCase;

class MultibancoSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new MultibancoSource('{country}', new Payer('{name}', '{email}', '{document}'));
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
