<?php

namespace Tests\Unit;

use App\Models\Example;
use PHPUnit\Framework\TestCase;

class ExampleModelTest extends TestCase
{
    private Example $example;

    protected function setUp(): void
    {
        $data = ['name' => 'hello', 'description' => 'goodbye'];
        $this->example = new Example($data);
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testConstruct()
    {
        $this->assertEquals('hello', $this->example->name);
        $this->assertEquals('goodbye', $this->example->description);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInstanceOfModel()
    {
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Model::class, $this->example);
    }
}
