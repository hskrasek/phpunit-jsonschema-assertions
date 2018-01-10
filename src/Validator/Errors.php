<?php namespace HSkrasek\JsonSchema\Validator;

use League\JsonGuard\ValidationError;

class Errors
{
    /**
     * @var array|ValidationError[]
     */
    private $errors;

    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }

    public function __toString(): string
    {
        return array_reduce($this->errors, function (string $carry, ValidationError $error) {
            return $carry .= PHP_EOL . $error->getMessage() . " ({$error->getDataPath()})";
        }, '');
    }
}
