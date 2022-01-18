<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexRoute()
    {
        $response = $this->get('/example/index');
        $response->assertViewHasAll([
            'examples'
        ]);
    }
}
