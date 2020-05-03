<?php

namespace NauDev\JsonLd\Schema\Types;

use \InvalidArgumentException;

abstract class AbstractSchemaType
{
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

	/**
	 * Assign properties
	 * for the type
	 *
	 * @param array
	 * @return void
	 */
	protected function assignAttributes(array $attributes)
	{
		foreach ($attributes as $key => $value) {
			if(!isset($this->permitted[$key]))
			{
				return;
			}

			$this->{$key} = $value;

			return $this;
		}
	}

	/**
	 * Assign a property
	 *
	 * @param 
	 */
}