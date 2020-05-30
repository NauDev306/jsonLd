<?php

namespace NauDev\JsonLd\Schema\Types;

use \InvalidArgumentException;
use NauDev\JsonLd\Schema\Types\AbstractSchemaType;

class SchemaType extends AbstractSchemaType
{
	/**
	 * The List of permitted fields
	 * @var array
	 */
	protected $permitted = [];

	/**
	 * Merge the permitted attributes from the parent class
	 * downwards
	 *
	 * @return null|void
	 */
	protected function mergePermittedFromParent()
	{
		if(in_array("permitted", get_class_vars(parent::class)))
		{
			$this->permitted = array_merge(
				get_class_vars(parent::class)["permitted"], 
				$this->permitted
			);
		}	
	}
}