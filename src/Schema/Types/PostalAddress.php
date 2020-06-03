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

	/**
	 * Get the Street Address
	 *
	 * @return string
	 */
	public function getStreetAddress()
	{
		return $this->streetAddress;
	}

	/**
	 * Get the Address Locality
	 *
	 * @return string
	 */	
	public function getAddressLocality()
	{
		return $this->addressLocality;
	}

	/**
	 * Get the Address Region
	 *
	 * @return string
	 */
	public function getAddressRegion()
	{
		return $this->addressRegion;
	}

	/**
	 * Get the Postal Code
	 *
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * Get the Address Country
	 *
	 * @return string
	 */
	public function getAddressCountry()
	{
		return $this->addressCountry;
	}


}