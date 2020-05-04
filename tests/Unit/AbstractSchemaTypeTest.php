<?php

namespace Tests\Unit;

use Tests\TestCase;
use \InvalidArgumentException;
use NauDev\JsonLd\Schema\Types\Thing;

class AbstractSchemaTypeTest extends TestCase
{
	/**
	 * Test if the AbstractType's
	 * magic Getter returns a value
	 *
	 * @return void
	 */
	public function testIfMagicGetterReturnsValue()
	{
		$expected = "test";

		$attributes = [
			"someProperty" => "test"
		];

		$type = new Thing($attributes);

		$attribute = $type->__get(array_keys($attributes)[0]);

		$this->assertNotNull($attribute);
		$this->assertEquals($expected, $attribute);
	}

	/**
	 * Test if the AbstractType's
	 * magic Getter throws an
	 * InvalidArgumentException
	 *
	 * @return void
	 */
	public function testIfMagicGetterReturnsInvalidArgumentExceptiononError()
	{
		$expected = InvalidArgumentException::class;

		$attributes = [
			"notAProperty" => "test"
		];

		$type = new Thing($attributes);

		try {
			$type->__get(array_keys($attributes)[0]);			
		} catch (\Exception $e) {
			$this->assertInstanceOf($expected, $e);
			//print_r($e->getMessage());
		}
	}

	/**
	 * Test the generateType
	 * Method
	 *
	 * @return void
	 */
	public function testIfGetTypeGeneratesTypeFromClassName()
	{
		$type = new Thing;

		$typeName = $type->getType();

		$this->assertNotNull($typeName);
		print_r($typeName);
	}
}