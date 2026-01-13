<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_student_can_signin()
    {
        $student = User::factory()->student()->create();

        $response = $this->post('/login', [
            'email' => $student->email,
            'password' => 'secret']);

        $this->assertAuthenticatedAs($student);

        $response->assertRedirect('/student/dashboard');
    }

    public function test_an_admin_can_signin()
    {
        $faculty = User::factory()->faculty()->create();

        $response = $this->post('/login', [
            'email' => $faculty->email,
            'password' => 'secret']);

        $this->assertAuthenticatedAs($faculty);

        $response->assertRedirect('/admin/dashboard');
    }

    public function test_cannot_login_with_wrong_password()
    {
        $faculty = User::factory()->faculty()->create();

        $response = $this->post('/login', [
            'email' => $faculty->email,
            'password' => 'wrongpassword']);

        $this->assertGuest();

        $response->assertSessionHasErrors('email');
    }

    public function test_cannot_login_with_wrong_email()
    {
        $faculty = User::factory()->faculty()->create();

        $response = $this->post('/login', [
            'email' => 'wrongemail@pup.edu.ph',
            'password' => 'secret']);

        $this->assertGuest();

        $response->assertSessionHasErrors('email');
    }

    public function test_a_student_can_logout()
    {
        $student = User::factory()->student()->create();

        $this->actingAs($student);

        $response = $this->post('/logout');

        $this->assertGuest();

        $response->assertRedirect('/login');
    }

    public function test_an_admin_can_logout()
    {
        $faculty = User::factory()->faculty()->create();

        $this->actingAs($faculty);

        $response = $this->post('/logout');

        $this->assertGuest();

        $response->assertRedirect('/login');
    }

    public function test_a_guest_cannot_access_dashboard()
    {
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/login');

        $response = $this->get('/student/dashboard');
        $response->assertRedirect('/login');
    }
}
