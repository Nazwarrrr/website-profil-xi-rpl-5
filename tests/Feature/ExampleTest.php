<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_public_class_pages_render_successfully(): void
    {
        foreach (['/', '/profil', '/anggota', '/kontak'] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_the_members_page_renders_dynamic_team_data(): void
    {
        $this->get('/anggota')
            ->assertOk()
            ->assertSee('Alya Putri')
            ->assertSee('Developer Kontak');
    }
}
