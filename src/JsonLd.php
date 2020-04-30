<?php

namespace NauDev\JsonLd;

use NauDev\JsonLd\Providers\JsonLdServiceProvider;
use NauDev\JsonLd\Contracts\JsonLd as JsonLdContract;

class JsonLd implements JsonLdContract
{
	/**
	 * The @context variable
	 * @var string
	 */
	protected $context;

	/**
	 * Construct the JsonLd Object
	 *
	 * @param string $context|null
	 * @return void
	 */
	public function __construct($context = null)
	{
		$this->context = !is_null($context)
						? $context
						: JsonLdServiceProvider::DEFAULT_CONTEXT;
	}

	/**
	 * Retrieve the @context
	 *
	 * @return string|null
	 */
	public function getContext()
	{
		return $this->context;
	}

	/**
	 * Retrieve the JSON LD
	 * 
	 * @return json
	 */
	public function getJsonLd()
	{
		return '{"test":"test"}';
	}
}