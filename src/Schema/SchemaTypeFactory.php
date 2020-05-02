<?php

namespace NauDev\JsonLd\Schema;

use NauDev\JsonLd\Contracts\Schema\SchemaTypeFactory as FactoryInterface;

class SchemaTypeFactory implements FactoryInterface
{
	/**
	 * Create a Type Class from an
	 * array of data
	 * 
	 * @param array
	 * @return array
	 */
	public static function makeType(array $typeData)
	{
		$type = [];
		$type['@type'] = ucfirst($typeData['type']);
		unset($typeData['type']);
		foreach ($typeData as $key => $value) {
		    if(is_array($value)){
		        $type[$key] = self::makeType($value);
		    } else {
		        $type[$key] = $value;  
		    }
		}
		return $type;
	}
}