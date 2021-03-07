<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{   

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIndexPage()
    {   
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
