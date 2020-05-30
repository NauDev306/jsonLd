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
		"streetAddress",
		"addressLocality",
		"addressRegion",
		"postalCode",
		"addressCountry"
	];

	/**
	 * The Street
	 * @var string
	 */
	protected $streetAddress;

	/**
	 * The City
	 * @var string
	 */
	protected $addressLocality;
	
	/**
	 * The Statae / Region
	 * @var string
	 */
	protected $addressRegion;

	/**
	 * The Postal Code
	 * @var string
	 */
	protected $postalCode;

	/**
	 * The Country
	 * @var string
	 */
	protected $addressCountry;

	public function getStreetAddress()
	{
		return $this->streetAddress;
	}

	public function getAddressLocality()
	{
		return $this->addressLocality;
	}

	public function getAddressRegion()
	{
		return $this->addressRegion;
	}

	public function getPostalCode()
	{
		return $this->postalCode;
	}

	public function getAddressCountry()
	{
		return $this->addressCountry;
	}


}