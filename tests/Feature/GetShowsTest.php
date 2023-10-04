<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetShowsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetShow(): void
    {
        $response = $this->get('/shows');
        $response->assertStatus(200);
    }
}
