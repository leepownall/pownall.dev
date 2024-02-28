<?php

namespace Tests\Feature;

use Tests\TestCase;

class CanViewPostTest extends TestCase
{
    public function testBasic()
    {
        $response = $this->get('/post/prefix-laravel-passport-routes');

        $response->assertStatus(200);
    }
}
