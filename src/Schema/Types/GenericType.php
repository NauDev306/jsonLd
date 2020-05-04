<?php

namespace NauDev\JsonLd\Schema\Types;

use NauDev\JsonLd\Schema\Types\AbstractSchemaType;

class GenericType extends AbstractSchemaType
{
	/**
	 * The Type Name
	 * @var string
	 */
	public $type;

	/**
	 * Assign the Type Name
	 * @return void
	 */
	public function __construct()
	{
		$this->type = $this->getType();
	}
}