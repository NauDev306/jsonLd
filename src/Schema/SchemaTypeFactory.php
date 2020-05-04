<?php

namespace NauDev\JsonLd\Schema;

use \InvalidArgumentException;
use NauDev\JsonLd\Schema\Types\Thing;
use NauDev\JsonLd\Contracts\Schema\SchemaTypeFactory as FactoryInterface;

class SchemaTypeFactory implements FactoryInterface
{
	/**
	 * The Schema Type Map
	 * @var array
	 */
	protected static $typeMap = [
		"thing" => Thing::class
	];

	/**
	 * Create a Type Class from an
	 * array of data
	 * 
	 * @param string $typeName
	 * @param array $typeData
	 * @return \NauDev\JsonLd\Schema\Types\AbstractSchemaType $type
	 * 
	 * @throws \InvalidArgumentException
	 */
	public static function make(string $typeName, array $typeData)
	{
		if(!isset(self::$typeMap[$typeName]))
		{
			throw new InvalidArgumentException("$typeName is not a valid Schema Type.", 1);
		}

		$className = self::$typeMap[$typeName];

		foreach ($typeData as $key => $value) {
			if(is_array($value))
			{
				$typeData[$key] = self::make($key, $value);
			}
		}

		return new $className($typeData);

	}
}