# NauDev\JsonLd - A SEO Library implementing Schema.org Syntax in json-LD format

# JsonLD SEO for Laravel ^6.9

This library is a simple way to create JsonLd strings for your application
based on [Schema.org](https://schema.org)

Take any array that represents the object tree you would like to
create **(*the class must be available - you can easily create a missing one - see below*)**

	use NauDev\JsonLd\JsonLd;
    ''
	$data = [
		"person" => [
			"name" => "John Doe",
			"address" => [
				"streetAddress" => "123 Test Ave",
				"addressLocality" => "Some Town",
				"addressRegion" => "FL",
				"postalCode" => "12345",
				"addressCountry" => "USA"	
			]
		]
	];
	''
	$jsonLd = new JsonLd();
	return $jsonLd->getJsonLd($data);

will give you

	{
		"@context": "https://schema.org",
		"@type": "Person",
		"name": "John Doe",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "123 Test Ave",
			"addressLocality": "Some Town",
			"addressRegion": "FL",
			"postalCode": "12345",
			"addressCountry": "USA"
		}
	}

Since this is a new library, suggestions are greatly appreciated :)





