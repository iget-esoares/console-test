<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTestCommand()
    {
        $this->artisan('test')->expectsOutput('<info>Just a test:</info> 123');
    }
}
