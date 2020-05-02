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
		$obj = [];

		$obj['@context'] = $data['context'];
		unset($data['context']);

		foreach ($data as $key => $value) {
			if(is_array($value)){
				$obj[$key] = SchemaTypeFactory::makeType($value); 
			} else {
				$key === 'type' ? $obj["@" . $key] = $value
								: $obj[$key] = $value;
			}
		}

		return json_encode($obj, JSON_UNESCAPED_SLASHES);
	}
}