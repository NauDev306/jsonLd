<?php

namespace Tests\Unit;

use Tests\TestCase;
use NauDev\JsonLd\Providers\JsonLdServiceProvider;

class JsonLdServiceProviderTest extends TestCase
{
	/**
	 * Test if the JsonLdServiceProvider
	 * has a static DEFAULT_CONTEXT contant
	 */
	public function testIfJsonLdServiceProviderHasDefaultContextConstant()
	{
		$defaultContext = JsonLdServiceProvider::DEFAULT_CONTEXT;
		$expected = "https://schema.org";

		$this->assertTrue(!is_null($defaultContext));
		$this->assertSame($expected, $defaultContext);

	}
}