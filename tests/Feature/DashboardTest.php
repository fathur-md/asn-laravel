<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
  use RefreshDatabase;

  public function test_authenticated_user_can_view_dashboard(): void
  {
    /** @var User $user */
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('dashboard'));

    $response->assertOk();
    $response->assertSee('Selamat datang, ' . $user->name);
    $response->assertSee('Logout');
  }
}
