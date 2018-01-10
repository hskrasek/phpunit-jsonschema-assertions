<?php namespace HSkrasek\JsonSchema;

use League\JsonGuard\Validator;
use PHPUnit\Framework\Constraint\Constraint;

class ValidatorPasses extends Constraint
{
    /**
     * @param Validator $other
     *
     * @return bool
     */
    protected function matches($other)
    {
        return $other->passes();
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'matches the provided schema';
    }

    protected function failureDescription($other)
    {
        return 'the provided JSON ' . $this->toString();
    }
}
