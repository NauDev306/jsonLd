<?php

namespace Tests\Unit;

use Tests\TestCase;
use NauDev\JsonLd\Schema\Types\Thing;
use NauDev\JsonLd\Schema\SchemaTypeFactory;

class SchemaTypeFactoryTest extends TestCase
{
	/**
	 * Test if the make function
	 * returns an array
	 *
	 * @return void
	 */
	public function testIfMakeTypeReturnsArrayWithType()
	{
		$data = [
			"thing" => [
				"someProperty" => "tester"
			]
		];

		$type = SchemaTypeFactory::make(array_keys($data)[0], $data["thing"]);

		$this->assertTrue(is_array($type));
		//print_r($type);
	}
}