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

	/**
	 * Check if the getJsonLd function
	 * actually returns JSON
	 *
	 * @return void
	 */
	public function testIfGetJsonLdReturnsJson()
	{
		$jsonLd = new JsonLd;

		$data = [
			"context" => "https://schema.org",
			"type" => "Person",
			"name" => "john",
			"address" => [
				"type" => "PostalAddress",
				"streetAddress" => "123 Test Ave",
				"telephone" => '12346789'
    		]
		];

		$expected = (object)[
			"@context" => "https://schema.org",
			"@type" => "Person",
			"name" => "john",
			"address" => (object)[
				"@type" => "PostalAddress",
				"streetAddress" => "123 Test Ave",
				"telephone" => '12346789'
    		]
		];

		$decoded = json_decode($jsonLd->getJsonLd($data));

		$this->assertNotNull($decoded);
		$this->assertEquals($expected, $decoded);
		//print_r($decoded);
	}
}