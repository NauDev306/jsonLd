<?php

namespace NauDev\JsonLd\Schema\Types;

use NauDev\JsonLd\Contracts\Schema\SchemaType as SchemaTypeInterface;

abstract class AbstractSchemaType implements SchemaTypeInterface
{
	/**
	 * Magic Getter
	 * for any property
	 *
	 * @param string
	 * @return mixed
	 */
	abstract public function __get(string $key);

	/**
	 * Return the @type
	 * 
	 * @return string
	 */
	abstract public function getType();

	/**
	 * Assign properties
	 * for the type
	 *
	 * @param array
	 * @return void
	 */
	abstract protected function assignAttributes(array $attributes);

	/**
	 * Check if a attribute
	 * is permitted
	 *
	 * @param string $attribute
	 * @return bool
	 */
	abstract protected function isPermitted(string $attribute) : bool;
}