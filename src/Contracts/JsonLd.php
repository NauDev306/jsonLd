<?php

namespace NauDev\JsonLd\Contracts;

/**
 * The Interface for the JsonLd Creator
 */

interface JsonLd
{
	/**
	 * Retrieve the @context
	 *
	 * @return string|null
	 */
	public function getContext();

	/**
	 * Process an array of data
	 * into a JSONLD String
	 *
	 * @param array
	 * @return string
	 */
	public function getJsonLd(array $data);
}