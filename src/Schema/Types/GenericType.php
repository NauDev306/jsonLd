<?php

namespace NauDev\JsonLd\Schema\Types;

use \InvalidArgumentException;
use NauDev\JsonLd\Schema\Types\AbstractSchemaType;

class GenericType extends AbstractSchemaType
{
	/**
	 * The Type Name
	 * @var string
	 */
	protected $type;

	/**
	 * Assign the Type Name
	 * @return void
	 */
	public function __construct()
	{
		$this->type = $this->getType();
	}

	/**
	 * Magic Getter
	 * for any property
	 *
	 * @param string
	 * @return mixed
	 */
	public function __get(string $key)
	{
		$key = ucfirst($key);
		$method = "get" . $key;

		if(method_exists($this, $method))
		{
			return $this->{$method}();
		} else {
			throw new InvalidArgumentException("$key is not a Property", 1);
		}
	}

	public function getType()
	{
		return $this->type;
	}

	/**
	 * Assign properties
	 * for the type
	 *
	 * @param array
	 * @return void
	 */
	protected function assignAttributes(array $attributes)
	{
		$attributes = array_filter($attributes, function($k){
			return $this->isPermitted($k);
		}, ARRAY_FILTER_USE_KEY);

		foreach ($attributes as $key => $value) {
			$this->{$key} = $value;
		}
	}

	/**
	 * Check if a attribute
	 * is permitted
	 *
	 * @param string $attribute
	 * @return bool
	 */
	protected function isPermitted(string $attribute) : bool
	{
		return !in_array($attribute, $this->permitted) ? false : true;
	}
}