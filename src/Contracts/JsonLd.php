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
	 * Retrieve the JSON LD
	 * 
	 * @return json
	 */
	public function getJsonLd();
}