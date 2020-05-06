<?php 

namespace NauDev\JsonLd\Contracts\Schema;

interface SchemaType
{
	/**
	 * Magic Getter
	 * for any property
	 *
	 * @param string
	 * @return mixed
	 */
	public function __get(string $key);

	/**
	 * Return the @type
	 * 
	 * @return string
	 */
	public function getType();

}