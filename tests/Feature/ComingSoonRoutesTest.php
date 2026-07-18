<?php

namespace Tests\Feature;

use Tests\TestCase;

class ComingSoonRoutesTest extends TestCase
{
    public function test_home_page_shows_coming_soon_placeholder(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('TransitEase is being updated.');
    }

    public function test_login_page_shows_coming_soon_placeholder(): void
    {
        $response = $this->get('/login');

        $response->assertOk();
        $response->assertSeeText('TransitEase is being updated.');
    }
}
