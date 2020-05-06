<?php

namespace NauDev\JsonLd\Contracts\Schema;

interface SchemaTypeFactory
{
	/**
	 * Create a Type Class from an
	 * array of data
	 * 
	 * @param string $typeName
	 * @param array $typeData
	 * @return array $type
	 */
	public static function make(string $typeName, array $typeData);
}