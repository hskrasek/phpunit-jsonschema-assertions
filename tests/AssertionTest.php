<?php

namespace HSkrasek\JsonSchema\Test;

use HSkrasek\JsonSchema\SchemaAssertions;
use PHPUnit\Framework\TestCase;

class AssertionTest extends TestCase
{
    use SchemaAssertions;

    public function setUp()
    {
        parent::setUp();

        $this->setupSchemaAssertions();
    }

    public function testAssertsJsonMatchesSchema()
    {
        $this->assertJsonMatchesSchema(
            json_decode('{"cat": {"breed": "5", "name": "Cate", "age": "5"}}'),
            __DIR__ . '/schemas/pets.json'
        );
    }

    public function testAssertsJsonMatchesRemoteSchema()
    {
        $this->assertJsonMatchesSchema(
            json_decode('{"familyName": "Skrasek", "givenName": "Hunter"}'),
            'http://json-schema.org/card'
        );
    }

    public function testAssertsJsonMatchesRemoteComplexSchema()
    {
        $json = <<<JSON
        {
          "familyName": "Foobarington",
          "givenName": "Baz",
          "additionalName": [
            "foo",
            "bar"
          ],
          "honorificPrefix": ["Sr."],
          "honorificSuffix": ["III"],
          "nickname": "Example",
          "url": "http://example.org",
          "email": {
            "type": "home",
            "value": "test@example.org"
          },
          "tel": {
            "type": "home",
            "value": "+10000000000"
          },
          "adr": {
            "locality": "Austin",
            "region": "TX",
            "country-name": "USA"
          }
        }
JSON;

        $this->assertJsonMatchesSchema(json_decode($json), 'http://json-schema.org/card');
    }
}
