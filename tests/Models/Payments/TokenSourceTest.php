<?php

namespace CheckoutOldSdk\tests\Models\Payments;

use CheckoutOldSdk\Models\Payments\TokenSource;
use CheckoutOldSdk\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;

class TokenSourceTest extends TestCase
{
    public function testCreate()
    {
        $token = new TokenSource(Tokens::generateId());
        $this->assertInstanceOf(TokenSource::class, $token);
    }
}
