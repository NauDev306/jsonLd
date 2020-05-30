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
			"name" => "test"
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
	 * Test if the magic __toArray
	 * function returns all
	 * Object vars
	 *
	 * @return void
	 */
	public function testIfMagicToArrayReturnsAllObjVars()
	{
		$expected = [
			"name" => "test"
		];

		$type = new Thing($expected);

		$attributes = $type->__toArray();

		$this->assertTrue(is_array($attributes));
		$this->assertEquals($expected, $attributes);	
	}
}