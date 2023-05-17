<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class configurationTest extends TestCase
{
   public function testConfig()
   {
       $firstName = config('contoh.author.first');
       $lastName = config('contoh.author.last');
       $email = config('contoh.email');
       $web = config('contoh.web');

        self::assertEquals('asep', $firstName);
        self::assertEquals('makros', $lastName);
        self::assertEquals('056207@gmail.com', $email);
        self::assertEquals('asep.com', $web);
   }
}
