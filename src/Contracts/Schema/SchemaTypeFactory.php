<?php

namespace NauDev\JsonLd\Contracts\Schema;

interface SchemaTypeFactory
{
	/**
	 * Create a Type Class from an
	 * array of data
	 * 
	 * @param array
	 * @return array
	 */
	public static function makeType(array $data);
}