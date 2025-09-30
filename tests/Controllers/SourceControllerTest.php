<?php

namespace CheckoutOldSdk\tests\Controllers;

use CheckoutOldSdk\CheckoutApi;
use CheckoutOldSdk\Library\HttpHandler;
use CheckoutOldSdk\tests\Helpers\Sources;
use PHPUnit\Framework\TestCase;

class SourceControllerTest extends SandboxTestFixture
{
    /**
     * @before
     */
    public function before()
    {
        $this->init();
    }

    public function testAdd()
    {
        $source = $this->checkout->sources()->add(Sources::generateSepaModel(), HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $source);
        $this->assertEquals(HttpHandler::METHOD_POST, $source->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $source->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $source->getContentType());
    }
}
