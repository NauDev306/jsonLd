<?php

namespace Tests\Unit;

use Tests\TestCase;
use NauDev\JsonLd\Schema\SchemaTypeFactory;

class SchemaTypeFactoryTest extends TestCase
{
	/**
	 * Test if the makeType function
	 * returns an array
	 *
	 * @return void
	 */
	public function testIfMakeTypeReturnsArray()
	{
		$data = [
			"type" => "PostalAddress",
			"streetAddress" => "123 Test Ave",
			"telephone" => '12346789'
		];

		$expected = [
			"@type" => "PostalAddress",
			"streetAddress" => "123 Test Ave",
			"telephone" => '12346789'
		];

		$type = SchemaTypeFactory::makeType($data);

		$this->assertTrue(is_array($type));
		$this->assertEquals($expected, $type);
	}
}