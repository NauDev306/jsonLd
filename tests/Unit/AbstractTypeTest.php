<?php

namespace Tests\Unit;

use Tests\TestCase;
use \InvalidArgumentException;
use NauDev\JsonLd\Schema\Types\Thing;

class AbstractTypeTest extends TestCase
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

		$type = new Thing;

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

		$type = new Thing;

		try {
			$type->__get(array_keys($attributes)[0]);			
		} catch (\Exception $e) {
			$this->assertInstanceOf($expected, $e);
			//print_r($e->getMessage());
		}
	}
}