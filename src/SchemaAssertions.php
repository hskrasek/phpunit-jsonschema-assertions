<?php

namespace HSkrasek\JsonSchema;

use HSkrasek\JsonSchema\Validator\Errors;
use League\JsonGuard\Validator;
use League\JsonReference\Dereferencer;
use PHPUnit\Framework\Constraint\Constraint;

trait SchemaAssertions
{
    /**
     * @var Dereferencer
     */
    private $dereferencer;

    public function setupSchemaAssertions()
    {
        $this->dereferencer = Dereferencer::draft4();
    }

    /**
     * @param mixed $json
     * @param string $schemaPath
     */
    public function assertJsonMatchesSchema($json, string $schemaPath): void
    {
        $validator = new Validator($json, $this->dereferencer->dereference($this->normalizeSchemaPath($schemaPath)));

        static::assertThat($validator, static::validatorPasses(), new Errors($validator->errors()));
    }

    private function normalizeSchemaPath(string $schemaPath): string
    {
        if (strpos($schemaPath, 'http://') === 0 || strpos($schemaPath, 'https://') === 0) {
            return $schemaPath;
        }

        return "file://$schemaPath";
    }

    /**
     * @return ValidatorPasses
     */
    private static function validatorPasses(): Constraint
    {
        return new ValidatorPasses;
    }
}
