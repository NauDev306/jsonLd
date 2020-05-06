<?php

namespace NauDev\JsonLd;

use NauDev\JsonLd\Schema\SchemaTypeFactory;
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
	public function __construct($context = null, $data = null)
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
	 * Process an array of data
	 * into a JSONLD String
	 *
	 * @param array
	 * @return string
	 */
	public function getJsonLd(array $data)
	{
		$json = [];

		$json["@context"] = $this->context;

		$typeName = array_keys($data)[0];
		$typeData = $data[$typeName];

		$type = SchemaTypeFactory::make($typeName, $typeData);

		$json = array_merge($json, $type);
		
		return json_encode($json, JSON_UNESCAPED_SLASHES);
	}

}