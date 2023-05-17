<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');

        self::assertEquals('programmer', $youtube);
    }

    public function testDefaultEnv()
    {
        $author = env('AUTHOR' , 'ASEP');

        self::assertEquals('ASEP', $author);
    }

    
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
