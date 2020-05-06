<?php

namespace NauDev\JsonLd\Schema\Types;

use NauDev\JsonLd\Schema\Types\AbstractSchemaType as BaseType;

class Thing extends BaseType
{
	/**
	 * The Type Name
	 * @var string
	 */
	protected $type = "Thing";

	/**
	 * The List of permitted fields
	 * @var array
	 */
	protected $permitted = [
		"someProperty"
	];

	/**
	 * Some Property
	 * @var string
	 */
	protected $someProperty = "test";

	/**
	 * Instantiate the Type by passing it's
	 * attributes
	 *
	 * @param array $attributes
	 */
	public function __construct(array $attributes = null)
	{				
		if(!is_null($attributes))
		{
			$this->assignAttributes($attributes);			
		}
	}

	public function getSomeProperty()
	{
		return $this->someProperty;
	}
}