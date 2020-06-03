<?php

namespace NauDev\JsonLd\Schema\Types;

use NauDev\JsonLd\Schema\Types\SchemaType as BaseType;

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
		"name",
		"alternateName"
	];

	/**
	 * The Name
	 * @var string
	 */
	protected $name;

	/**
	 * The alternate Name
	 * @var string
	 */
	protected $alternateName;

	/**
	 * Instantiate the Type by passing it's
	 * attributes
	 *
	 * @param array $attributes
	 */
	public function __construct(array $attributes = null)
	{				
		$this->mergePermittedFromParent();

		if(!is_null($attributes))
		{
			$this->assignAttributes($attributes);			
		}
	}

	/**
	 * Get the Name
	 * 
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the alternate Name
	 * 
	 * @return string
	 */
	public function getAlternateName()
	{
		return $this->alternatename;
	}
}