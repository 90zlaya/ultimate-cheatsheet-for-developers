# PHPUnit
> The PHP Testing Framework.

Read more about [PHPUnit](https://phpunit.de/).

## Table of Contents

* [Misc](#misc)
* [Assertions](#assertions)

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Misc

```php
// Assert that variable is true with message
$this->assertTrue(true, 'This should already work.');

// Mark that test is not completed
$this->markTestIncomplete('This test has not been implemented yet.');

// Skip test if extension isn't loaded
if (!extension_loaded('mysqli'))
{
    $this->markTestSkipped('The MySQLi extension is not available.');
}
```

[⬆ back to top](#table-of-contents)

## Assertions

```php
// Equality
$this->assertEquals($givenValue, $comparisonValue);
$this->assertNotEquals($givenValue, $comparisonValue);

// Emptiness
$this->assertEmpty($givenValue);
$this->assertNotEmpty($givenValue);

// Booleans
$this->assertTrue($givenValue);
$this->assertFalse($givenValue);
$this->assertNotFalse($givenValue);

// Arrays
$this->assertArrayHasKey($givenArray['keyExample'], $comparisonArray);
$this->assertArrayNotHasKey($givenArray['keyExample'], $comparisonArray);

// Types
$this->assertIsBool($givenValue);
$this->assertIsInt($givenValue);
$this->assertIsString($givenValue);
$this->assertIsArray($givenValue);

// Contains
$this->assertContains($givenValue, $containsValue);

// Instances
$this->assertInstanceOf(InstanceName::class, $givenValue);

// Exceptions
$this->expectException(ExceptionName::class);

// Output
$this->expectOutputString($expectedOutputString);
```

[⬆ back to top](#table-of-contents)
