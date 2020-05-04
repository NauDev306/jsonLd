<?php

namespace Tests\Unit;

use Tests\TestCase;
use NauDev\JsonLd\Schema\Types\Thing;
use NauDev\JsonLd\Schema\SchemaTypeFactory;

class SchemaTypeFactoryTest extends TestCase
{
	/**
	 * Test if the makeType function
	 * returns an AbstractSchemaType
	 * variant
	 *
	 * @return void
	 */
	public function testIfMakeTypeReturnsCorrectType()
	{
		$data = [
			"thing" => [
				"someProperty" => "tester"
			]
		];

		$expectedClass = Thing::class;

		$type = SchemaTypeFactory::make(array_keys($data)[0], $data["thing"]);

		$this->assertInstanceOf($expectedClass, $type);
		//print_r($type);
	}
}