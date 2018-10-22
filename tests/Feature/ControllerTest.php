<?php

namespace Tests\Feature;

use Tests\TestCase;

class ControllerTest extends TestCase
{
    public function testShowIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testShowAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testShowHistory()
    {
        $response = $this->get('/history');

        $response->assertStatus(200);
    }

    public function testShowPrivate()
    {
        $response = $this->get('/private');

        $response->assertStatus(200);
    }

    public function testShowContact()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function testShowNotExistPage()
    {
        $response = $this->get('/about1');

        $response->assertStatus(404);
    }
}
