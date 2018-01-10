# PHPUnit JSON Schema Assertions

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require hskrasek/phpunit-jsonschema-assertions
```

## Usage

``` php
<?php

use HSkrasek\JsonSchema\SchemaAssertions;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    use SchemaAssertions;
    
    public function setUp()
    {
        parent::setUp();

        $this->setupSchemaAssertions();
    }
    
    public function assertMyJsonApiMatchesSchema()
    {
        $this->assertJsonMatchesSchema($json, $pathToSchema);
    }
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hunterskrasek@me.com instead of using the issue tracker.

## Credits

- [Hunter Skrasek][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/hskrasek/phpunit-jsonschema-assertions.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hskrasek/phpunit-jsonschema-assertions/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/hskrasek/phpunit-jsonschema-assertions.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/hskrasek/phpunit-jsonschema-assertions.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hskrasek/phpunit-jsonschema-assertions.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/hskrasek/phpunit-jsonschema-assertions
[link-travis]: https://travis-ci.org/hskrasek/phpunit-jsonschema-assertions
[link-scrutinizer]: https://scrutinizer-ci.com/g/hskrasek/phpunit-jsonschema-assertions/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/hskrasek/phpunit-jsonschema-assertions
[link-downloads]: https://packagist.org/packages/hskrasek/phpunit-jsonschema-assertions
[link-author]: https://github.com/hskrasek
[link-contributors]: ../../contributors
