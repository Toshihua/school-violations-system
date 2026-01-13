<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeRouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_home_route_redirects_to_login_for_guest(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_the_home_route_redirects_to_dashboard_for_admin(): void
    {
        $admin = User::factory()->faculty()->create();

        $response = $this->actingAs($admin)->get('/');

        $response->assertStatus(302);
        $response->assertRedirect('/admin/dashboard');
    }

    public function test_the_home_route_redirects_to_dashboard_for_students(): void
    {
        $admin = User::factory()->student()->create();

        $response = $this->actingAs($admin)->get('/');

        $response->assertStatus(302);
        $response->assertRedirect('/student/dashboard');
    }
}
