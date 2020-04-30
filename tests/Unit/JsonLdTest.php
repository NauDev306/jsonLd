<?php

namespace Tests\Unit;

use Tests\TestCase;
use NauDev\JsonLd\JsonLd;
use NauDev\JsonLd\Providers\JsonLdServiceProvider;

class JsonLdTest extends TestCase
{
	/**
	 * Test if the JsonLd object
	 * always has a context
	 *
	 * @return void 
	 */
	public function testIfJsonLdObjectHasContext()
	{
		$jsonLd = new JsonLd;
		$expected = JsonLdServiceProvider::DEFAULT_CONTEXT;
		$context = $jsonLd->getContext();

		$this->assertTrue(!is_null($context));
		$this->assertSame($expected, $context);
	}

	/**
	 * Test if JsonLd Object's
	 * context can be set in constructor
	 * 
	 * @return void
	 */
	public function testIfJsonLdObjectContextCanBeSetInConstructor()
	{
		$expected = "example.com";
		$jsonLd = new JsonLd($context = $expected);
		$context = $jsonLd->getContext();

		$this->assertTrue(!is_null($context));
		$this->assertSame($expected, $context);	
	}
}