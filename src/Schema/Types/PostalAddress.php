<?php

namespace NauDev\JsonLd\Schema\Types;

use NauDev\JsonLd\Schema\Types\Thing;

class PostalAddress extends Thing
{
	/**
	 * The List of permitted fields
	 * @var array
	 */
	protected $permitted = [
		"city"
	];

	/**
	 * The City
	 * @var string
	 */
	protected $city;
	

	public function getCity()
	{
		return $this->city;
	}


}