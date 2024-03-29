---
title: "Testing Laravel Rule Objects"
author: "Lee Pownall"
date: "2021-03-04"
description: "Laravel gives you the ability to create custom validation rules using rule objects, but how do you test them?"
slug: "testing-laravel-rule-objects"
---

Laravel gives you the ability to create custom validation rules using [rule objects](https://laravel.com/docs/8.x/validation#using-rule-objects),
these allow you to create any validation rules you want, but how do you test them?

You could create a `Feature` test that visits a route, enters wrong data, presses submit and then asserts an error
message is shown, but that is long-winded.


Instead, we can create a `Unit` test that just tests the rule in isolation. In this example we will be testing the example rule
given in the [documentation](https://laravel.com/docs/8.x/validation#using-rule-objects).

Start by creating your test class:

```php
<?php

namespace Tests\Unit\Rules;

class UppercaseRuleTest extends \Tests\TestCase
{
    /** @test **/
    public function uppercase_string_passes()
    {
        //
    }
}
```

Inside your first test create a new instance of the `Uppercase` rule:

```php
$rule = new Uppercase();
```

Then simply assert against the `passes()` method, giving it an example `attribute` and `value`. The `attribute` you give
it doesn't matter, it can be anything:

```php
$this->assertTrue($rule->passes('name', 'JEFF'));
```

Putting it all together you get:

```php
/** @test **/
public function uppercase_string_passes()
{
    $rule = new Uppercase();

    $this->assertTrue(
        $rule->passes('name', 'JEFF'),
        'String given must be `uppercase`.'
    );
}
```

Hopefully this example shows how easy it is to test Rule Objects. Below is an example of some other test cases you could write:

```php
/** @test **/
public function lowercase_string_does_not_pass()
{
    $rule = new Uppercase();

    $this->assertFalse(
        $rule->passes('name', 'jeff'),
        'String given must be `uppercase`.'
    );
}

/** @test **/
public function uppercase_and_lowercase_string_does_not_pass()
{
    $rule = new Uppercase();

    $this->assertFalse(
        $rule->passes('name', 'JeFf'),
        'String given must be `uppercase`.'
    );
}
```
