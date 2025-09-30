<?php

namespace CheckoutOldSdk\tests\Controllers;

use CheckoutOldSdk\Library\HttpHandler;
use CheckoutOldSdk\Models\Instruments\Instrument;
use CheckoutOldSdk\Models\Tokens\Card;

class InstrumentControllerTest extends SandboxTestFixture
{
    /**
     * @before
     */
    public function before()
    {
        $this->init();
    }

    public function testRetrieve()
    {
        $cardToken = new Card('4242424242424242', 01, 2025);
        $token = $this->checkout->tokens()->request($cardToken);
        echo "FOOOOOOO   " . json_encode($token);
        // Create Instrument
        $ins = new Instrument("token", $token->token);
        $details = $this->checkout->instruments()->add($ins, HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $details);
        $this->assertEquals(HttpHandler::METHOD_POST, $details->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $details->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $details->getContentType());
    }
}
